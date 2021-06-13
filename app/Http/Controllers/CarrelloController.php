<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Carrello;
use App\Models\Prodotto;
use Illuminate\Routing\Controller as BaseController;



class CarrelloController extends BaseController{
    public function carrello(){
        $user = User::where('ID', session('ID'))->first();
        if((session('ID')) === null){
            return redirect('login');
        }else{
            return view('carrello');
        }
    }

    public function carprod(){
        $user = User::where('ID', session('ID'))->first();
        $p=Carrello::where("user_id", session('ID'))->get();
        return json_encode($p);
    }

    private function cercaid($titolo){
        $prod=Prodotto::where("nome", $titolo)->first();
        return $prod->ID;
    }

    public function eliminaprod($titolo){
        $prod_id=$this->cercaid($titolo);
        $prodotto = Carrello::where("user_id", session('ID'))->where("prodotto_id", $prod_id);
        $prodotto->delete();
    }

    public function addCarrello($titolo){
        $prod_id=$this->cercaid($titolo);
        $prod_Cart = Carrello::create([
            'user_id' => session('ID'),
            'prodotto_id' => $prod_id,
        ]);

    }

}