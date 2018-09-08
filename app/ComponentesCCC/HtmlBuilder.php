<?php

namespace sis_ccc\ComponentesCCC;

use Illuminate\Contracts\Config\Repository as Config;
use Illuminate\Contracts\View\Factory as View;
use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;
use Illuminate\Support\Facades\Auth;

class HtmlBuilder extends CollectiveHtmlBuilder {

    /**
     * [menu del sitio]
     * @param  array  $items [las lista de opciones del menú]
     * @return [type]        [description]
     */
    public function menu($items) {
        if (!is_Array($items)) {
            $items = config($items, array());
        }
        return view('layouts_sisccc/pagmenu', compact('items'));
    }
    
     public function menuHome() {        
        return view('layouts_sisccc/pagmenuhome');
    }

    /**
     * [css_gecn Retorna si es activa la opc]
     * @param  array  $class_gecn [Se tiene la ruta]
     * @return [type]             [Si la opcion se activa o no]
     */
    public function css_gecn(array $class_gecn) {
        $htmlclass = '';
        foreach ($class_gecn as $name => $bool) {
            if (is_int($name)) {
                $name = $bool;
                $bool = true;
            }
            if ($bool) {
                $htmlclass .= $name . '';
            }
        }
        if (!empty($htmlclass)) {
            return ' class="' . trim($htmlclass) . '"';
        }
        return '';
    }

    /*
     * Creamos la Opc de Inicio
     */
    public function menuopc($items) {
        if (!is_Array($items)) {
            $items = config($items, array());
        }
        return view('layouts_sisccc/pagmenuopc', compact('items'));
    }
	
	/*
     * Creamos la Opc de Inicio
     */
    public function menuccc() {                
        if(Auth::user()->tipo_Usu == 'Est_ccc'){            
            return view('layouts_estudiante/partials/menu_top');
        }
        else{
            return view('layouts_sisccc/pagmenu');
        }
    }

    /**
     * [footer Creando la informacion del pie de pagina]
     * @param  [type] $items [La lista del Propietario y el Dev]
     * @return [type]        [pasa la vista footer]
     */
    public function footer($items) {
        if (!is_Array($items)) {
            $items = config($items, array());
        }
        return view('layouts_sisccc/pagfooter', compact('items'));
    }

}
