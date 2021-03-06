<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajout_bien extends Model
{
    protected $fillable = [
       'type_biens','localisation','nbre_piece','toilette','garage','courant','assainissement','plafond','carreaux','meuble','prix','description','statut','caution','avance','prestation','available', 'user_id','picture'
    ];
    public function location(){

        return $this->hasOne(locations::class);
    }
    public function locataire(){

        return $this->belongsTo(locataires::class);
    }
    public function user(){

        return $this->belongsto(User::class,'user_id');
    }

}
