<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajout_bien extends Model
{
    protected $fillable = [
    'type_biens','localisation','nbre_piece','courant','assainissement','plafond','carreaux','meuble','prix','description','statut','picture'
    ];
}
