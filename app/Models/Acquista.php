<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Acquista extends Model
{
    protected $table = "acquista";
    public $timestamps = false;

    protected $fillable = ['cod_acquisto','user_id', 'prodotto_id', 'quantita', 'prezzo', 'cellulare', 'citta', 'indirizzo', 'data_di_acquisto'];
    
    public function user(){
        return $this->belongsTo('User');
    }

    public function prodotto(){
        return $this->belongsTo(Prodotto::class, 'prodotto_id', 'ID');
    }
}