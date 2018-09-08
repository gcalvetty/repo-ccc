<?php
namespace sis_ccc\Http\Middleware;
use Illuminate\Foundation\Http\Middleware\TrimStrings as BaseTrimmer;
/**
 * Description of TrimStrings
 * @author GuillermoElías
 */

class TrimStrings extends BaseTrimmer{
    /*
     * Eliminar o no los espacios en blanco
     */
    protected $except = [];
}
