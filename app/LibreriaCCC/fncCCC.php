<?php

namespace sis_ccc\libreriaCCC;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class fncCCC {

    public static function CorrDatInsc($a) {
        return ucwords(strtolower(trim($a)));
    }

    public static function obt_nombre() {
        $user = Auth::user()->ape_paterno . ' ' .
                Auth::user()->ape_materno.' '.
                Auth::user()->nombre;
        return $user;
    }

    public static function getDateAttribute($value) {
        return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
    }

    public static function setDateAttribute($value) {
        return Carbon::createFromFormat('d/m/Y', $value)->toDateString();
    }
}
