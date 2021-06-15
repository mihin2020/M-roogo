<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AvailableController extends Controller
{
    public function available($id){
        DB::update('update ajout_biens set available = \'Non disponible\' where id =?' , [$id]);
        return 'ok';
    }
}