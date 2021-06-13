<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Carrello;
use Illuminate\Routing\Controller as BaseController;



class HomelogController extends BaseController{
    public function homelog(){
        //leggiamo l'utente connesso
        $user = User::where('ID', session('ID'))->first();
        if((session('ID'))!== null){
        return view('homelog')->with('nome', $user->nome);
        }else{
        return redirect('home');
        }
    }

    public function recuperaprodotti(){
        $user = User::where('ID', session('ID'))->first();
        $p=Carrello::where("user_id", session('ID'))->get();
        return json_encode($p);
    }

    public function apicocktail($cocktail){
        $json = Http::get('https://www.thecocktaildb.com/api/json/v1/1/search.php?', [
            's' => $cocktail
        ]);
        return $json;
    }

    //https://api.edamam.com/api/recipes/v2 NUOVA VERSIONE
    //https://api.edamam.com/search?        VECCHIA VERSIONE NON C'E' BISOGNO DEL 'type' => 'public'
    public function apigin(){
        $json = Http::get('https://api.edamam.com/api/recipes/v2',[
            'q' => "gin",
            'app_id' => env('APP_ID'),
            'app_key' => env('APP_KEY'),
            'type' => 'public',
        ]);
        return $json;
    }

    public function apidistillate(){
        $json = Http::get('https://api.edamam.com/api/recipes/v2',[
            'q' => "distillate",
            'app_id' => env('APP_ID'),
            'app_key' => env('APP_KEY'),
            'type' => 'public',
        ]);
        return $json;
    }

    public function apiliquor(){
        $json = Http::get('https://api.edamam.com/api/recipes/v2',[
            'q' => "liquor",
            'app_id' => env('APP_ID'),
            'app_key' => env('APP_KEY'),
            'type' => 'public',
        ]);
        return $json;
    }

    public function apiliqueur(){
        $json = Http::get('https://api.edamam.com/api/recipes/v2',[
            'q' => "liqueur",
            'app_id' => env('APP_ID'),
            'app_key' => env('APP_KEY'),
            'type' => 'public',
        ]);
        return $json;
    }

    public function apibitter(){
        $json = Http::get('https://api.edamam.com/api/recipes/v2',[
            'q' => "bitter",
            'app_id' => env('APP_ID'),
            'app_key' => env('APP_KEY'),
            'type' => 'public',
        ]);
        return $json;
    }

    public function apiinfuse(){
        $json = Http::get('https://api.edamam.com/api/recipes/v2',[
            'q' => "infuse",
            'app_id' => env('APP_ID'),
            'app_key' => env('APP_KEY'),
            'type' => 'public',
        ]);
        return $json;
    }
}

?>