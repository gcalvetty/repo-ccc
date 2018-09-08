<?php

namespace sis_ccc\Http\Controllers;

use Illuminate\Http\Request;
use Knp\Snappy\Pdf;


class PdfController extends Controller
{
    

public function github (){
return \PDF::loadFile('http://sis.ccc')->stream('aaa.pdf');


}
}
