<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends BaseController{
    public function login(){
        //verifichiamo se l'utente ha fatto il login
        if(session('ID') != null){
        //redirect home
        return redirect('homelog');
        }else{
        //verifichiamo se le credenziali non sono valide (c'è un errore)
        $old_username = Request::old('username');
        return view('login')
        ->with('csrf_token', csrf_token())
        ->with('old_username', $old_username);
        }
    }

    public function checkLogin(){
        $password = request('password');
        $result = User::where('username', request('username'))->first();
        if(isset($result->password)){
            $passcript = $result->password;
            if( password_verify($password, $passcript)){
            //credenziali valide
            Session::put('ID', $result->ID);
            return redirect('homelog');
            }else{
               return view('login')
               ->with('csrf_token', csrf_token())
               ->with('old_username', request('username'));
            }
        }else{
            //credenziali non valide
            return view('login')
            ->with('csrf_token', csrf_token())
            ->with('old_username', request('username'));
        }
    }

    public function logout(){
        //elimino i dati di sessione
        Session::flush();
        return redirect('login');
    }
}

?>