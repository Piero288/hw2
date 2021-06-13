<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Prodotto extends Model
{
    protected $table = "prodotto";
    public $timestamps = false;

    public function carrello(){
        return $this->belongsToMany(Carrello::class);
    }

    public function acquista(){
        return $this->hasMany(Acquista::class);
    }

}