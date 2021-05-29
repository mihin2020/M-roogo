<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class locataires extends Model
{
    protected $fillable = [
        'user_id','nom','prenom','email','numero','date','lieu','nationalite','numero_cnib',
     ];
     public function locations(){

        return $this->belongsTo(locations::class);
    }
    
}
