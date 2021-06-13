<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;


class HomeController extends BaseController{
    public function home(){
        $user = User::where('ID', session('ID'))->first();
        if((session('ID')) === null){
            return view('home');
        }else{
            return redirect('homelog')->with('nome', $user->nome);;
        }
    }
}