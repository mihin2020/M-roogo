<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class locations extends Model
{
    protected $fillable = [
        'user_id','type_bien','locataire','type_bail','loyer','date_bail','date_entre',
     ];

     public function ajout_biens(){

        return $this->belongsTo(Ajout_bien::class);
    }
    public function locataires(){

        return $this->belongsTo(locataires::class);
    }
}
