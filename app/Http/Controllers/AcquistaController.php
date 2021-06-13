<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Carrello;
use App\Models\Prodotto;
use App\Models\Acquista;
use Illuminate\Routing\Controller as BaseController;

class AcquistaController extends BaseController{
    public function acquisto(){
        return view('acquista');
    }

    private function cercaid($titolo){
        $prod=Prodotto::where("nome", $titolo)->first();
        return $prod->ID;
    }

    public function prodacqu(){
        $prodotti = [];
        $a = Acquista::where('user_id', session('ID'))->get();
        for($i=0, $size= count($a); $i < $size; $i++){
            if(!empty($a[$i]->prodotto)){
            $prodotti[] = $a[$i];
            }
        }
        return $prodotti;
    }

    private function checkCod($cod){
        $newCod = Acquista::where("cod_acquisto", $cod)->first();
        if(empty($newCode)){
            return true;
        }else{
            return false;
        }
    }

    private function checkQuant($titolo, $quantita){
        $prod = Prodotto::where("nome", $titolo)->first();
        if($quantita <= $prod -> quantita){
            return true;
        }else{
            return false;
        }
    }

    public function addAcq($titolo, $quant, $prezzo, $citta, $cell, $indirizzo){
        $prod_id=$this->cercaid($titolo);
        $datadiacquisto = date ("Y/m/d");
        $cod = uniqid();
        $codice = $this->checkCod($cod);
        if($codice === false){
            $cod=uniqid();
        }
        if( $this->checkQuant($titolo, $quant) ===true){
        $prod_acq = Acquista::create([
            'cod_acquisto' => $cod,
            'user_id' => session('ID'),
            'prodotto_id' => $prod_id,
            'quantita' => $quant,
            'prezzo' => $prezzo,
            'cellulare' => $cell,
            'citta' => $citta,
            'indirizzo' => $indirizzo,
            'data_di_acquisto' => $datadiacquisto,
        ]);
        return json_encode(true);
        }else{
            return json_encode(false);
        }
    }
}