<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class SignupController extends BaseController{
    public function signup(){
        //verifico che l'utente ha fatto l'accesso
        if((session('ID'))!== null){
            return redirect('homelog');
        }else{
            $old_email = Request::old('email');
            return view('signup')
            ->with('csrf_token', csrf_token())
            ->with('old_email', $old_email);
        }
    }

    public function checkUtente(){
        $result = User::all(); //recupero tutti gli username della tabella utente
        if( $result !== null){
            return json_encode($result);
        }
    }

    private function checkEmail($email){
        $newEmail = User::where('email', $email)->first();
        if(empty($newEmail)){
            return true;
        }else{
            return false;
        }
    }

    public function creaUtente(){
        $request = request();
        $pass=password_hash($request['password'], PASSWORD_BCRYPT);
        $email = $request['email'];
        $e_mail = $this->checkEmail($email);
        if($e_mail === false){
            return redirect('signup')
            ->withInput();
        }else{
        $utente = User::create([
            'username' => $request['username'],
            'nome' => $request['nome'],
            'cognome' => $request['cognome'],
            'email' => $email,
            'password' => $pass,
        ]);  
        }    

        if($utente){
        Session::put('ID', $utente->id);
        return redirect('homelog')
        ->with('csrf_token', csrf_token());
        }
    }
}