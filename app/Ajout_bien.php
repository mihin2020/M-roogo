<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajout_bien extends Model
{
    protected $fillable = [
       'type_biens','localisation','nbre_piece','toilette','garage','courant','assainissement','plafond','carreaux','meuble','prix','description','statut','caution','avance','prestation', 'user_id'
    ];
    public function user(){

        return $this->belongsTo(User::class);
    }
}
