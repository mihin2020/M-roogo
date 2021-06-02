<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class locations extends Model
{
    protected $fillable = [
        'user_id','ajoutbien_id','locataire_id','type_bail','loyer','date_bail','date_entre',
     ];
   


     public function user(){

        return $this->belongsTo(User::class,'user_id');
    }

     public function ajout_bien(){

        return $this->belongsTo(Ajout_bien::class,'ajoutbien_id');
    }
    public function locataire(){

        return $this->belongsTo(locataires::class);
    }
}
