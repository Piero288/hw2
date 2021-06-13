<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Carrello extends Model
{
    protected $table = "carrello";
    public $timestamps = false;

    protected $fillable = ['user_id', 'prodotto_id'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function prodotto(){
        return $this->hasOne(Prodotto::class);
    }
}