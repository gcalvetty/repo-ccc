<?php

namespace sis_ccc\libreriaCCC;

use Carbon\Carbon;
use sis_ccc\ModeloCCC\Grd_Nivel;
use sis_ccc\libreriaCCC\queryCCC as qGECN;
use Maatwebsite\Excel\Facades\Excel;

class queryCCCReportes {

    public static $gyear = "";

    /*
     * Constructor
     */

    public function __construct() {
        $dt = Carbon::now();
        self::$gyear = $dt->year;
        ;
    }

    /*
     * Reporte x Nivel
     */
    public static function Reporte_Alumnos($req) {
        $grdNiv = Grd_Nivel::select('grd_nivel_nombre as Nivel')->where('grd_nivel_id', $req->grd_nivel)->get();
        Excel::create('Alumnos - ' . $grdNiv[0]->Nivel, function($excel) use($req) {
            $excel->sheet('Excel sheet', function($sheet) use($req) {
                //otra opción -> $products = Product::select('name')->get();
                $lGECN = qGECN::listAlumnReporte($req);                
                $sheet->fromArray($lGECN);
                $sheet->setOrientation('landscape');
            });
        })->export('xls');
    }
    /*
     * Reporte RUDE
     */
    public static function Reporte_RUDE(){
       
        Excel::create('RUDE - ColCristianoColcapirhua', function($excel){
            $excel->sheet('Rude', function($sheet){
                //otra opción -> $products = Product::select('name')->get();
                $lGECN = qGECN::listAlumnRUDE();                
                $sheet->fromArray($lGECN);
                $sheet->setOrientation('landscape');
            });
        })->export('xls');
    }

}
