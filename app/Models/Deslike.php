<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deslike extends Model
{
    //
    protected $table= 'deslikes';
    protected $fillable = ['publicacao_id','user_id'];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function publicacao(){
        return $this->belongsTo(Publicacao::class, 'publicacao_id');
    }
}