<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class locataires extends Model
{
    protected $fillable = [
        'user_id','nom','prenom','email','numero','date','lieu','nationalite','numero_cnib',
     ];

    public function location()
    {
        return $this->hasOne(locations::class);
    }
    public function ajout_bien()
    {
        return $this->hasOne(Ajout_bien::class);
    }
    
}
