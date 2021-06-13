<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "utente";
    protected $hidden = ['password'];
    public $timestamps = false;

    protected $fillable = ['username', 'password', 'email', 'nome', 'cognome'];

    public function carrello(){
        return $this->hasMany(Carrello::class);
    }

    public function acquista(){
        return $this->hasMany(Acquista::class, "user_id", "ID");
    }
}
