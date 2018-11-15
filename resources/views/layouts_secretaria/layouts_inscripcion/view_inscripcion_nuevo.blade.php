@extends('layouts_sisccc.paginscr')

<!-- Main Content -->
@section('sis_contenido')

<div  class="container inscrForm">
    @include('layouts_sisccc/pagsis-msg-reg-alm')
    @include('layouts_sisccc/pagsis-error')            
    @include('layouts_sisccc/pagsis-vue-data')    
    @if (!session('status'))
    <div class="panel panel-success">
       <div class="panel-heading"><i class="fa fa-file-text fa-2x" aria-hidden="true"></i> Formulario para Inscripción - Nuevos</div>
        <div class="panel-body">
            <div id="app" class="container-fluid"> 
                <form v-on:submit="validateBeforeSubmit" class="form-horizontal" role="form" method="POST" action="{{ route('inscr-reg') }}">
                    {{ csrf_field() }}

                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a  href="#1a" data-toggle="tab">
                                Datos del Estudiante
                            </a>
                        </li>
                        <li><a href="#2a" data-toggle="tab">
                                Datos de Inscripción</a>
                        </li>
                        <li><a href="#3a" data-toggle="tab">
                                Dirección Actual</a>
                        </li>
                        <li><a href="#4a" data-toggle="tab">
                                Aspectos Sociales</a>
                        </li>
                        <li><a href="#5a" data-toggle="tab">
                                Tutor del estudiante</a>
                        </li>                        
                    </ul>                     

                    <div id="RegInsc" class="tab-content clearfix">
                        <!-- ***************************** -->  
                        <div class="tab-pane active" id="1a">
                            <div class="row row-offcanvas row-offcanvas-right">       
                                <div class="col-md-12">
                                    <div class="col-md-7">
                                        <h4><i class="fa fa-graduation-cap fa-x2" aria-hidden="true"></i> Apellido(s) y Nombre(s)</h4>
                                        <div class="form-group has-feedback {{ $errors->has('ape_paterno') ? ' has-error' : '' }} " v-bind:class="{'': true, 'has-error': errors.has('ape_paterno') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user-circle-o"></i></span>

                                                <input type="text" class="form-control" id="ape_paterno"  name="ape_paterno" value=""  placeholder="Apellido Paterno" 
                                                       v-model="ape_paterno" 
                                                       v-validate.initial="ape_paterno" 
                                                       data-vv-rules="required|min:3|max:30" 
                                                       data-vv-delay="500" 
                                                       v-bind:class="{'': true, 'has-error': errors.has('ape_paterno') }">

                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('ape_paterno') }"></span>
                                            @if ($errors->has('ape_paterno'))<span class="help-block"><strong>{{ $errors->first('ape_paterno') }}</strong></span>
                                            @endif
                                        </div>

                                        <div class="form-group has-feedback {{ $errors->has('ape_materno') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('ape_materno') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-user-circle-o"></i></span>
                                                <input type="text" class="form-control" id="ape_materno"  name="ape_materno" value=""  placeholder="Apellido Materno" aria-describedby="basic-addon2" v-model="ape_materno"  v-validate.initial="ape_materno" data-vv-rules="min:3|max:30" data-vv-delay="200" v-bind:class="{'': true, 'has-error': errors.has('ape_materno') }">
                                            </div>	
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('ape_materno') }"></span>
                                            @if ($errors->has('ape_materno'))<span class="help-block"><strong>{{ $errors->first('ape_materno') }}</strong></span>
                                            @endif
                                        </div>

                                        <div class="form-group has-feedback {{ $errors->has('nombre') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('nombre') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user-circle-o"></i></span>                                               

                                                <input type="text" class="form-control" id="nombre"  name="nombre" value="{{ old('nombre') }}"  placeholder="Nombre" aria-describedby="basic-addon1" v-model="nombre"  v-validate.initial="nombre" data-vv-rules="required|min:3|max:30" data-vv-delay="200" v-bind:class="{'': true, 'has-error': errors.has('nombre') }">                           
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('nombre') }"></span>
                                            @if ($errors->has('nombre'))<span class="help-block"><strong>{{ $errors->first('nombre') }}</strong></span>
                                            @endif
                                        </div>

                                        <div class="form-group has-feedback {{ $errors->has('cod_rude') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('cod_rude') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-id-card-o" aria-hidden="true"></i></span>                                               

                                                <input type="text" class="form-control" id="cod_rude"  name="cod_rude" value="{{ old('cod_rude') }}"  placeholder="RUDE" aria-describedby="basic-addon1" v-model="cod_rude"  v-validate.initial="cod_rude" data-vv-rules="min:3|max:30" data-vv-delay="200" v-bind:class="{'': true, 'has-error': errors.has('cod_rude') }">                           
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('cod_rude') }"></span>
                                            @if ($errors->has('cod_rude'))<span class="help-block"><strong>{{ $errors->first('cod_rude') }}</strong></span>
                                            @endif
                                        </div>


                                        <h4>
                                            <i class="fa fa-graduation-cap fa-x2" aria-hidden="true"></i> Lugar de Nacimiento</h4>

                                        <div class="row">  
                                            <div class="col-md-6"> 
                                                <div class="form-group has-feedback {{ $errors->has('pais') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('pais') }">

                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon4"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="pais"  name="pais" value="{{ old('pais') }}"  placeholder="País" aria-describedby="basic-addon4" v-model="pais"  v-validate.initial="pais" data-vv-rules="required|min:3|max:30" data-vv-delay="200" v-bind:class="{'': true, 'has-error': errors.has('pais') }">                                   
                                                    </div>
                                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('pais') }"></span>
                                                    @if ($errors->has('pais'))<span class="help-block"><strong>{{ $errors->first('pais') }}</strong></span>@endif
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback {{ $errors->has('departamento') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('departamento') }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon5"><i class="fa fa-map" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="departamento"  name="departamento" value="{{ old('departamento') }}"  placeholder="Departamento" aria-describedby="basic-addon5" v-model="departamento"  v-validate.initial="departamento" data-vv-rules="min:3|max:30" data-vv-delay="200" v-bind:class="{'': true, 'has-error': errors.has('departamento') }">                                   

                                                    </div>	
                                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('departamento') }"></span>
                                                    @if ($errors->has('departamento'))<span class="help-block"><strong>{{ $errors->first('departamento') }}</strong></span>@endif
                                                </div>                 
                                            </div>

                                            <div class="col-md-6">                                                
                                                <div class="form-group has-feedback {{ $errors->has('provincia') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('provincia') }">                                                
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon6"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="provincia"  name="provincia" value="{{ old('provincia') }}"  placeholder="Provincia" aria-describedby="basic-addon6" v-model="provincia"  v-validate.initial="provincia" data-vv-rules="min:3|max:30" data-vv-delay="200" v-bind:class="{'': true, 'has-error': errors.has('provincia') }"> 
                                                    </div>
                                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('provincia') }"></span>
                                                    @if ($errors->has('provincia'))<span class="help-block"><strong>{{ $errors->first('provincia') }}</strong></span>@endif
                                                </div>                 		
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback {{ $errors->has('localidad') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('localidad') }">                                                
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon7"><i class="fa fa-street-view" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="localidad"  name="localidad" value="{{ old('localidad') }}"  placeholder="Localidad" aria-describedby="basic-addon7" 
                                                               v-model="localidad"  
                                                               v-validate.initial="localidad" 
                                                               data-vv-rules="min:3|max:30" 
                                                               data-vv-delay="200" 
                                                               v-bind:class="{'': true, 'has-error': errors.has('localidad') }"> 

                                                    </div>
                                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('localidad') }"></span>
                                                    @if ($errors->has('localidad'))<span class="help-block"><strong>{{ $errors->first('localidad') }}</strong></span>@endif
                                                </div>
                                            </div>
                                        </div>
                                        <h4>

                                            <i class="fa fa-book fa-x2" aria-hidden="true"></i> Unidad Educativa de Procedencia - "Si corresponde"</h4>
                                        <div class="row">    
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback {{ $errors->has('rue_num') ? ' has-error' : '' }}"  v-bind:class="{'': true, 'has-error': errors.has('rue_num') }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon15"><i class="fa fa-hashtag"></i></span>
                                                        <input  name="rue_num" type="text"class="form-control" id="rue_num"  placeholder="N° de Rue" value="{{ old('rue_num') }}" maxlength="10" aria-describedby="basic-addon15"
                                                                v-model="rue_num"  
                                                                v-validate.initial="rue_num" 
                                                                data-vv-rules="numeric|min:5|max:8" 
                                                                data-vv-delay="200" 
                                                                v-bind:class="{'': true, 'has-error': errors.has('rue_num') }">
                                                    </div>
                                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('rue_num') }"></span>
                                                    @if ($errors->has('rue_num'))<span class="help-block"><strong>{{ $errors->first('rue_num') }}</strong></span>@endif
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback {{ $errors->has('rue_nom') ? ' has-error' : '' }}"  v-bind:class="{'': true, 'has-error': errors.has('rue_nom') }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon15"><i class="fa fa-address-card-o"></i></span>
                                                        <input  name="rue_nom" type="text"class="form-control" id="rue_nom"  placeholder="Nombre del Colegio" value="{{ old('rue_nom') }}"  aria-describedby="basic-addon15"
                                                                v-model="rue_nom"  
                                                                v-validate.initial="rue_nom" 
                                                                data-vv-rules="min:3|max:50" 
                                                                data-vv-delay="200" 
                                                                v-bind:class="{'': true, 'has-error': errors.has('rue_nom') }">
                                                    </div>
                                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('rue_nom') }"></span>
                                                    @if ($errors->has('rue_nom'))<span class="help-block"><strong>{{ $errors->first('rue_nom') }}</strong></span>@endif
                                                </div>
                                            </div>

                                        </div>

                                    </div><!-- ********** // Col 1 ********** -->

                                    <div class="col-md-5">
                                        <h4><i class="fa fa-graduation-cap fa-x2" aria-hidden="true"></i> Documento de Identificación</h4>
                                        <div class="form-group has-feedback {{ $errors->has('tip_doc') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('tip_doc') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon8">
                                                    <i class="fa fa-id-card" aria-hidden="true"></i>
                                                </span>
                                                <select id="tip_doc" 
                                                        name='tip_doc' 
                                                        class="form-control" 
                                                        aria-describedby="basic-addon8" 
                                                        placeholder="Tipo Documento" 
                                                        v-model="tip_doc"  
                                                        v-validate.initial="tip_doc" 
                                                        data-vv-rules="not_in:''" 
                                                        data-vv-delay="200" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('tip_doc') }" v-on:change="tipDoc()">
                                                    <option value="">Tipo de Documento</option>
                                                    <option value="C.I.">C.I.</option>
                                                    <option value="Pasaporte">Pasaporte</option>
                                                </select>
                                            </div>                                            
                                            @if ($errors->has('tip_doc'))<span class="help-block"><strong>{{ $errors->first('tip_doc') }}</strong></span>@endif
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('num_doc') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('num_doc') }">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>                                               

                                                <input type="text" class="form-control" id="num_doc"  name="num_doc" value="{{ old('num_doc') }}"  placeholder="Número" 
                                                       v-model="num_doc"  
                                                       v-validate.initial="num_doc" 
                                                       data-vv-delay="200" 
                                                       v-bind:class="{'': true, 'has-error': errors.has('num_doc') }"  
                                                       v-bind:disabled="tip_doc==''" v-bind:data-vv-rules="tip_doc==''? 'max:15':'required|max:15'">                           
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('num_doc') }"></span>
                                            @if ($errors->has('num_doc'))<span class="help-block"><strong>{{ $errors->first('num_doc') }}</strong></span>
                                            @endif
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('fec_nac') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('fec_nac') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon10"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="fec_nac"  name="fec_nac" value="{{ old('fec_nac') }}"  placeholder="Fecha de Nacimiento DD/MM/YYYY" aria-describedby="basic-addon10" v-model="fec_nac"  v-validate.initial="fec_nac" data-vv-rules="required|date_format:DD/MM/YYYY" data-vv-delay="200" v-bind:class="{'': true, 'has-error': errors.has('fec_nac') }">
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('fec_nac') }"></span>
                                            @if ($errors->has('fec_nac'))<span class="help-block"><strong>{{ $errors->first('fec_nac') }}</strong></span>@endif
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('sexo') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('sexo') }">                                        
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon11">
                                                    <i class="fa fa-venus-mars" aria-hidden="true"></i>
                                                </span>
                                                <select id="sexo" name='sexo' class="form-control"aria-describedby="basic-addon11" placeholder="Fecha de Nacimiento" 
                                                        v-model="sexo"  
                                                        v-validate.initial="sexo" 
                                                        data-vv-rules="required|not_in:''" 
                                                        v-validate.initial="sexo" 
                                                        data-vv-delay="200" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('sexo') }" v-on:change="tipDoc()">
                                                    <option value="">Sexo</option>
                                                    <option value="F">Femenino</option>
                                                    <option value="M">Masculino</option>
                                                </select>
                                            </div>                                            
                                            @if ($errors->has('sexo'))<span class="help-block"><strong>{{ $errors->first('sexo') }}</strong></span>@endif
                                        </div>
                                        <h4><i class="fa fa-graduation-cap fa-x2" aria-hidden="true"></i> Certificado de Nacimiento</h4>                
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback {{ $errors->has('ofc_num') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('ofc_num') }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon12"><i class="fa fa-hashtag"></i></span>
                                                        <input type="text" class="form-control" id="ofc_num"  name="ofc_num" value="{{ old('ofc_num') }}"  placeholder="N° Oficialía"maxlength="10" aria-describedby="basic-addon12"
                                                               v-model="ofc_num"  
                                                               v-validate.initial="ofc_num" 
                                                               data-vv-rules="min:1|max:15" 
                                                               data-vv-delay="200" 
                                                               v-bind:class="{'': true, 'has-error': errors.has('ofc_num') }">
                                                    </div>
                                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('ofc_num') }"></span>
                                                    @if ($errors->has('ofc_num'))<span class="help-block"><strong>{{ $errors->first('ofc_num') }}</strong></span>@endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback {{ $errors->has('lib_num') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('lib_num') }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon13"><i class="fa fa-hashtag"></i></span>
                                                        <input type="text" class="form-control" id="lib_num"  name="lib_num" value="{{ old('lib_num') }}"  placeholder="N° Libro" aria-describedby="basic-addon13" 
                                                               v-model="lib_num"  
                                                               v-validate.initial="lib_num" 
                                                               data-vv-rules="min:1|max:15" 
                                                               data-vv-delay="200" 
                                                               v-bind:class="{'': true, 'has-error': errors.has('lib_num') }">
                                                    </div>
                                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('lib_num') }"></span> 
                                                    @if ($errors->has('lib_num'))<span class="help-block"><strong>{{ $errors->first('lib_num') }}</strong></span>@endif
                                                </div>                    
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback {{ $errors->has('par_num') ? ' has-error' : '' }}"  v-bind:class="{'': true, 'has-error': errors.has('par_num') }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon14"><i class="fa fa-hashtag"></i></span>
                                                        <input type="text" class="form-control" id="par_num"  name="par_num" value="{{ old('par_num') }}"  placeholder="N° Partida"maxlength="10"aria-describedby="basic-addon14"
                                                               v-model="par_num"  
                                                               v-validate.initial="par_num" 
                                                               data-vv-rules="min:1|max:15" 
                                                               data-vv-delay="200" 
                                                               v-bind:class="{'': true, 'has-error': errors.has('par_num') }">
                                                    </div>
                                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('par_num') }"></span>
                                                    @if ($errors->has('par_num'))<span class="help-block"><strong>{{ $errors->first('par_num') }}</strong></span>@endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback {{ $errors->has('fol_num') ? ' has-error' : '' }}"  v-bind:class="{'': true, 'has-error': errors.has('fol_num') }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon15"><i class="fa fa-hashtag"></i></span>
                                                        <input  name="fol_num" type="text"class="form-control" id="fol_num"  placeholder="N° Folio" value="{{ old('fol_num') }}" maxlength="10" aria-describedby="basic-addon15"
                                                                v-model="fol_num"  
                                                                v-validate.initial="fol_num" 
                                                                data-vv-rules="min:1|max:15" 
                                                                data-vv-delay="200" 
                                                                v-bind:class="{'': true, 'has-error': errors.has('fol_num') }">
                                                    </div>
                                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('fol_num') }"></span>
                                                    @if ($errors->has('fol_num'))<span class="help-block"><strong>{{ $errors->first('fol_num') }}</strong></span>@endif
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- ********** // Col 2 ********** --> 
                                </div>    
                            </div><!-- // Datos del Estudiante -->
                        </div>
                        <!-- ***************************** -->
                        <div class="tab-pane" id="2a">                        
                            <div class="row row-offcanvas row-offcanvas-right">       
                                <div class="col-md-12">
                                    <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> Datos de Inscripción en la Gestión Actual</h4>
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active"><a  href="#1inscr" data-toggle="tab">Taller Inicial</a>
                                        </li>
                                        <li><a href="#2inscr" data-toggle="tab">Inicial</a>
                                        </li>
                                        <li><a href="#3inscr" data-toggle="tab">Primaria</a>
                                        </li>
                                        <li><a href="#4inscr" data-toggle="tab">Secundaria</a>
                                        </li>
                                    </ul>                            
                                    <div id="exTab3" class="tab-content clearfix nivel has-feedback {{ $errors->has('optCurso') ? ' has-error' : '' }}"  v-bind:class="{'': true, 'has-error': errors.has('optCurso') }">
                                        <div class="tab-pane active" id="1inscr">
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso" value="15"
                                                       v-model="optCurso" 
                                                       v-validate.initial="optCurso"
                                                       data-vv-rules="required"
                                                       >Taller Inicial
                                            </label>                                        
                                        </div>
                                        <div class="tab-pane" id="2inscr">
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso" value="1">1ra Sección
                                            </label>                                        
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso" value="2">2da Sección
                                            </label>                  
                                        </div>
                                        <div class="tab-pane" id="3inscr">
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso" value="3">1ro Prm.
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso" value="4">2do Prm.
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso" value="5">3ro Prm.
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso" value="6">4to Prm.
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso"  value="7">5to Prm.
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso" value="8">6to Prm.
                                            </label>
                                        </div>
                                        <div class="tab-pane" id="4inscr">
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso" value="9">1ro Sec.
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso" value="10">2do Sec.
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso" value="11">3ro Sec.
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso" value="12">4to Sec.
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso" value="13">5to Sec.
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optCurso" value="14">6to Sec.
                                            </label>	

                                        </div>
                                        <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('optCurso') }"></span>
                                    </div>


                                </div>    
                            </div><!-- // Datos de inscripcion en la gestion actual -->
                        </div>    
                        <!-- ***************************** -->
                        <div class="tab-pane" id="3a">    
                            <div class="row row-offcanvas row-offcanvas-right">       
                                <div class="col-md-12">
                                    <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> Dirección actual del Estudiante</h4>                                        
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback {{ $errors->has('dir_prov') ? ' has-error' : '' }} " v-bind:class="{'': true, 'has-error': errors.has('dir_prov') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon16"><i class="fa fa-map-o" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="dir_prov"  name="dir_prov" value="{{ old('dir_prov') }}"  placeholder="Provincia" aria-describedby="basic-addon16"
                                                       v-model="dir_prov"  
                                                       v-validate.initial="dir_prov" 
                                                       data-vv-rules="min:3|max:15" 
                                                       data-vv-delay="200" 
                                                       v-bind:class="{'': true, 'has-error': errors.has('dir_prov') }">                           
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('dir_prov') }"></span>
                                            @if ($errors->has('dir_prov'))<span class="help-block"><strong>{{ $errors->first('dir_prov') }}</strong></span>@endif
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('municipio') ? ' has-error' : '' }}"  v-bind:class="{'': true, 'has-error': errors.has('municipio') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon17"><i class="fa fa-map-pin" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="municipio"  name="municipio" value="{{ old('municipio') }}"  placeholder="Sección/Municipio"  aria-describedby="basic-addon17"                                  
                                                       v-model="municipio"  
                                                       v-validate.initial="municipio" 
                                                       data-vv-rules="min:3|max:15" 
                                                       data-vv-delay="200" 
                                                       v-bind:class="{'': true, 'has-error': errors.has('municipio') }"> 
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('municipio') }"></span>
                                            @if ($errors->has('municipio'))<span class="help-block"><strong>{{ $errors->first('municipio') }}</strong></span>@endif
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('loc_comn') ? ' has-error' : '' }}"  v-bind:class="{'': true, 'has-error': errors.has('loc_comn') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon17"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="loc_comn"  name="loc_comn" value="{{ old('loc_comn') }}"  placeholder="Localidad/Comunidad"  aria-describedby="basic-addon17"
                                                       v-model="loc_comn"  
                                                       v-validate.initial="loc_comn" 
                                                       data-vv-rules="min:3|max:15" 
                                                       data-vv-delay="200" 
                                                       v-bind:class="{'': true, 'has-error': errors.has('loc_comn') }"> 
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('loc_comn') }"></span>
                                            @if ($errors->has('loc_comn'))<span class="help-block"><strong>{{ $errors->first('loc_comn') }}</strong></span>@endif
                                        </div>  
                                    </div><!-- // Col 1 -->
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback {{ $errors->has('zn_villa') ? ' has-error' : '' }}"  v-bind:class="{'': true, 'has-error': errors.has('zn_villa') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon18"><i class="fa fa-building-o" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="zn_villa"  name="zn_villa" value="{{ old('zn_villa') }}"  placeholder="Zona/Villa" maxlength="30"aria-describedby="basic-addon18"
                                                       v-model="zn_villa"  
                                                       v-validate.initial="zn_villa" 
                                                       data-vv-rules="min:3|max:30" 
                                                       data-vv-delay="200" 
                                                       v-bind:class="{'': true, 'has-error': errors.has('zn_villa') }"> 
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('zn_villa') }"></span>
                                            @if ($errors->has('zn_villa'))<span class="help-block"><strong>{{ $errors->first('zn_villa') }}</strong></span>@endif
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('av_calle') ? ' has-error' : '' }}"  v-bind:class="{'': true, 'has-error': errors.has('av_calle') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon19"><i class="fa fa-map-signs" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="av_calle"  name="av_calle" value="{{ old('av_calle') }}"  placeholder="Avenida/Calle" aria-describedby="basic-addon19"
                                                       v-model="av_calle"  
                                                       v-validate.initial="av_calle" 
                                                       data-vv-rules="required|min:3|max:50" 
                                                       data-vv-delay="200" 
                                                       v-bind:class="{'': true, 'has-error': errors.has('av_calle') }"> 
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('av_calle') }"></span>

                                            @if ($errors->has('av_calle'))<span class="help-block"><strong>{{ $errors->first('av_calle') }}</strong></span>@endif
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback {{ $errors->has('telf') ? ' has-error' : '' }}"  v-bind:class="{'': true, 'has-error': errors.has('telf') }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon14"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="telf"  name="telf" value="{{ old('telf') }}"  placeholder="Teléfono" aria-describedby="basic-addon14"
                                                               v-model="telf"  
                                                               v-validate.initial="telf" 
                                                               data-vv-rules="required|numeric|min:5|max:10" 
                                                               data-vv-delay="200" 
                                                               v-bind:class="{'': true, 'has-error': errors.has('telf') }">                                        
                                                    </div>
                                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('telf') }"></span>
                                                    @if ($errors->has('telf'))<span class="help-block"><strong>{{ $errors->first('telf') }}</strong></span>@endif
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback {{ $errors->has('cel') ? ' has-error' : '' }}"  v-bind:class="{'': true, 'has-error': errors.has('cel') }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon14"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="cel"  name="cel" value="{{ old('cel') }}"  placeholder="Celular" aria-describedby="basic-addon14"
                                                               v-model="cel"  
                                                               v-validate.initial="cel" 
                                                               data-vv-rules="numeric|min:7|max:10" 
                                                               data-vv-delay="200" 
                                                               v-bind:class="{'': true, 'has-error': errors.has('cel') }">                                        
                                                    </div>
                                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('cel') }"></span>
                                                    @if ($errors->has('cel'))<span class="help-block"><strong>{{ $errors->first('cel') }}</strong></span>@endif
                                                </div>
                                            </div>



                                            <div class="col-md-6">
                                                <div class="form-group {{ $errors->has('num_viv') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('num_viv') }">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon15"><i class="fa fa-hashtag" aria-hidden="true"></i></span>
                                                        <input  name="num_viv" type="text"class="form-control" id="num_viv"  placeholder="N° de Vivienda" value="{{ old('num_viv') }}"  aria-describedby="basic-addon15"
                                                                v-model="num_viv"  
                                                                v-validate.initial="num_viv" 
                                                                data-vv-rules="min:1|max:15" 
                                                                data-vv-delay="200" 
                                                                v-bind:class="{'': true, 'has-error': errors.has('num_viv') }">                                        
                                                    </div>
                                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('num_viv') }"></span>
                                                    @if ($errors->has('num_viv'))<span class="help-block"><strong>{{ $errors->first('num_viv') }}</strong></span>@endif
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- // Col 2 -->
                                </div>    
                            </div><!-- // Dirección actual del Estudiante -->   
                        </div>    
                        <!-- ***************************** -->
                        <div class="tab-pane" id="4a">    
                            <div class="row row-offcanvas row-offcanvas-right">       
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> Idiomas del Estudiante</h4>
                                        <div class="form-group {{ $errors->has('idi_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('idi_est') }">
                                            <p>¿Cuál es el idioma que aprendió a hablar en su niñez la o el estudiante</p>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon30">
                                                    <i class="fa fa-gg" aria-hidden="true"></i>
                                                </span>
                                                <select id="idi_est" name='idi_est' class="form-control"aria-describedby="basic-addon30" placeholder="Fecha de Nacimiento"
                                                        v-model="idi_est"  
                                                        v-validate.initial="idi_est" 
                                                        data-vv-rules="required|not_in:''" 
                                                        data-vv-delay="200" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('idi_est') }">
                                                    <option value="">Idioma</option>
                                                    <option value="Castellano">Castellano</option>
                                                    <option value="Quechua">Quechua</option>
                                                    <option value="Aymara">Aymara</option>
                                                    <option value="Guarani">Guarani</option>
                                                    <option value="Ingles">Ingles</option>
                                                </select>
                                            </div>                                            
                                            @if ($errors->has('idi_est'))<span class="help-block"><strong>{{ $errors->first('idi_est') }}</strong></span>@endif
                                        </div>     

                                        <p>¿Qué idiomas habla frecuentemente la o el estudiante?</p>
                                        <div class="form-group{{ $errors->has('idihab1_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('idihab1_est') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon31">
                                                    <i class="fa fa-gg-circle" aria-hidden="true"></i>
                                                </span>
                                                <select id="idihab1_est" name='idihab1_est' class="form-control" aria-describedby="basic-addon31" placeholder="Idioma 1"
                                                        v-model="idihab1_est"  
                                                        v-validate.initial="idihab1_est" 
                                                        data-vv-rules="not_in:''" 
                                                        data-vv-delay="200" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('idihab1_est') }">    
                                                    <option value="">Idioma 1</option>
                                                    <option value="Castellano">Castellano</option>
                                                    <option value="Quechua">Quechua</option>
                                                    <option value="Aymara">Aymara</option>
                                                    <option value="Guarani">Guarani</option>
                                                    <option value="Ingles">Ingles</option>

                                                </select>
                                            </div>	
                                            @if ($errors->has('idihab1_est'))<span class="help-block"><strong>{{ $errors->first('idihab1_est') }}</strong></span>@endif
                                        </div>      

                                        <div class="form-group{{ $errors->has('idihab2_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('idihab2_est') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon32">
                                                    <i class="fa fa-gg-circle" aria-hidden="true"></i>
                                                </span>
                                                <select id="idihab2_est" name='idihab2_est' class="form-control" aria-describedby="basic-addon32" placeholder="Idioma 2"
                                                        v-model="idihab2_est"  
                                                        v-validate.initial="idihab2_est" 
                                                        data-vv-rules="not_in:" 
                                                        data-vv-delay="200" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('idihab2_est') }">        
                                                    <option value="">Idioma 2</option>
                                                    <option value="Castellano">Castellano</option>
                                                    <option value="Quechua">Quechua</option>
                                                    <option value="Aymara">Aymara</option>
                                                    <option value="Guarani">Guarani</option>
                                                    <option value="Ingles">Ingles</option>

                                                </select>
                                            </div>	
                                            @if ($errors->has('idihab2_est'))<span class="help-block"><strong>{{ $errors->first('idihab2_est') }}</strong></span>@endif
                                        </div> 

                                        <div class="form-group{{ $errors->has('idihab3_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('idihab3_est') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon32">
                                                    <i class="fa fa-gg-circle" aria-hidden="true"></i>
                                                </span>
                                                <select id="idihab3_est" name='idihab3_est' class="form-control" aria-describedby="basic-addon32" placeholder="Idioma 3"
                                                        v-model="idihab3_est"  
                                                        v-validate.initial="idihab3_est" 
                                                        data-vv-rules="not_in:''"
                                                        data-vv-delay="200" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('idihab3_est') }">        
                                                    <option value="">Idioma 3</option>
                                                    <option value="Castellano">Castellano</option>
                                                    <option value="Quechua">Quechua</option>
                                                    <option value="Aymara">Aymara</option>
                                                    <option value="Guarani">Guarani</option>
                                                    <option value="Ingles">Ingles</option>                                                   
                                                </select>
                                            </div>	
                                            @if ($errors->has('idihab3_est'))<span class="help-block"><strong>{{ $errors->first('idihab3_est') }}</strong></span>@endif
                                        </div> 


                                    </div><!-- Col 1 Idiomas -->

                                    <div class="col-md-5">
                                        <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> Pertenencia del Estudiante</h4>    

                                        <div class="form-group{{ $errors->has('pert_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('pert_est') }">
                                            <p>¿Pertenece a alguna nación, pueblo indígena originario campesino o afroboliviano?</p>        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon33">
                                                    <i class="fa fa-font-awesome" aria-hidden="true"></i>
                                                </span>

                                                <select id="pert_est" 
                                                        name="pert_est"
                                                        class="form-control" 
                                                        aria-describedby="basic-addon33" 
                                                        placeholder="Pertenencia" 
                                                        v-model="pert_est"  
                                                        v-validate.initial="pert_est" 
                                                        data-vv-rules="required|not_in:''" 
                                                        data-vv-delay="200" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('pert_est') }">    
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">No pertenece</option>
                                                    <option value="2">Afroboliviano</option>
                                                    <option value="3">Araona</option>
                                                    <option value="4">Aymara</option>
                                                    <option value="5">Baure</option>
                                                    <option value="6">Bésiro</option>
                                                    <option value="7">Canichana</option>
                                                    <option value="8">Cavineño</option>
                                                    <option value="9">Cayubaba</option>
                                                    <option value="10">Chacobo</option>
                                                    <option value="11">Chiman</option>
                                                    <option value="12">EseEjja</option>                      
                                                    <option value="13">Guaraní</option>
                                                    <option value="14">Guarasuawe</option>
                                                    <option value="15">Guarayo</option>
                                                    <option value="16">Itonoma</option>
                                                    <option value="17">Leco</option>
                                                    <option value="18">Machajuyai-Kallawaya</option>
                                                    <option value="19">Machineri</option>
                                                    <option value="20">Maropa</option>
                                                    <option value="21">Mojeño-Ignaciano</option>
                                                    <option value="22">Mojeño-Trinitario</option>
                                                    <option value="23">Moré</option>
                                                    <option value="24">Mosetén</option>
                                                    <option value="25">Movima</option>
                                                    <option value="26">Tacawara</option>
                                                    <option value="27">Puquina</option>
                                                    <option value="28">Quechua</option>
                                                    <option value="29">Sirionó</option>
                                                    <option value="30">Tacana</option>
                                                    <option value="31">Tapiete</option>
                                                    <option value="32">Toromona</option>
                                                    <option value="33">Uru-Chipaya</option>
                                                    <option value="34">Weenhayek</option>
                                                    <option value="35">Yaminawa</option>
                                                    <option value="36">Yuki</option>
                                                    <option value="37">Yuracaré</option>
                                                    <option value="38">Zamuco</option>
                                                    <option value="39">Otro:</option>                                          
                                                </select>
                                            </div>	
                                            @if ($errors->has('pert_est'))<span class="help-block"><strong>{{ $errors->first('pert_est') }}</strong></span>@endif
                                        </div>  

                                        <div class="form-group{{ $errors->has('pert_est_otro') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('pert_est_otro') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon34"><i class="fa fa-font-awesome" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="pert_est_otro"  name="pert_est_otro" value="{{ old('pert_est_otro') }}"  placeholder="Otro" aria-describedby="basic-addon34"
                                                       v-bind:disabled="pert_est!=39"
                                                       v-bind:data-vv-rules="pert_est==39? 'required|max:20':'max:20'"
                                                       v-model="pert_est_otro"  
                                                       v-validate.initial="pert_est_otro" 
                                                       data-vv-delay="200"                                                         
                                                       >
                                            </div>	
                                            @if ($errors->has('pert_est_otro'))<span class="help-block"><strong>{{ $errors->first('pert_est_otro') }}</strong></span>@endif
                                        </div>

                                    </div><!-- Col 2 Pertenencia -->

                                    <div class="col-md-4">
                                        <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> Salud del Estudiante</h4>
                                        <p>¿Existe Centro de Salud / Posta / Hospital en su comunidad?</p>
                                        <div class="form-group {{ $errors->has('exit_salud_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('exit_salud_est') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon35"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
                                                <select id="exit_salud_est" name='exit_salud_est' class="form-control" aria-describedby="basic-addon35" placeholder="Existe Salud"
                                                        v-model="exit_salud_est"  
                                                        v-validate.initial="exit_salud_est" 
                                                        data-vv-rules="required|in:1,2" 
                                                        data-vv-delay="200" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('pert_est') }"
                                                        >        
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">Si</option>
                                                    <option value="2">No</option>
                                                </select>
                                            </div>	
                                            @if ($errors->has('exit_salud_est'))<span class="help-block"><strong>{{ $errors->first('exit_salud_est') }}</strong></span>@endif
                                        </div>

                                        <p>¿Cuántas veces fue la o el estudiante al centro de salud el año pasado?</p>
                                        <div class="form-group {{ $errors->has('vec_salud_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('vec_salud_est') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon36"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                                                <select id="vec_salud_est" name='vec_salud_est' class="form-control" aria-describedby="basic-addon36" placeholder="Existe Salud"
                                                        v-model="vec_salud_est"  
                                                        v-validate.initial="vec_salud_est" 
                                                        data-vv-rules="required|not_in:''" 
                                                        data-vv-delay="200" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('pert_est') }"
                                                        > 
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">1 a 2 veces</option>
                                                    <option value="2">3 a 5 veces</option>
                                                    <option value="3">6 o más veces</option>
                                                    <option value="4">Nunca</option>
                                                </select>
                                            </div>	
                                            @if ($errors->has('vec_salud_est'))<span class="help-block"><strong>{{ $errors->first('vec_salud_est') }}</strong></span>@endif
                                        </div>

                                        <p>Presenta la o el estudiante alguna discapacidad:</p>
                                        <table class="disc_est" id="disc_est" name='disc_est' >
                                            <tr v-bind:class="{ '':true,'text-danger': errors.has('dis1') }">
                                                <td class="col-md-6">
                                                    <span>
                                                        Sensorial y de la comunicación</span>
                                                </td>
                                                <td class="col-md-3"><label>
                                                        <input type="radio" name="dis1" value="1"
                                                               v-model="dis1"
                                                               v-validate="dis1" 
                                                               data-vv-rules="required|in:1,2">
                                                        Si</label></td>
                                                <td class="col-md-3"><label>
                                                        <input type="radio" name="dis1" value="2"
                                                               v-model="dis1">
                                                        no</label></td>
                                            </tr> 


                                            <tr v-bind:class="{  '':true,'text-danger': errors.has('dis2') }">
                                                <td class="col-md-6">Motriz</td>
                                                <td class="col-md-3"><label>
                                                        <input type="radio" name="dis2" value="1"
                                                               v-model="dis2"
                                                               v-validate="dis2" 
                                                               data-vv-rules="required|in:1,2">
                                                        Si</label></td>

                                                <td class="col-md-3"><label>
                                                        <input type="radio" name="dis2" value="2"
                                                               v-model="dis2">
                                                        no</label></td>
                                            </tr>
                                            <tr v-bind:class="{  '':true,'text-danger': errors.has('dis3') }">
                                                <td class="col-md-6">Mental</td>
                                                <td class="col-md-3"><label>
                                                        <input type="radio" name="dis3" value="1"
                                                               v-model="dis3"
                                                               v-validate="dis3" 
                                                               data-vv-rules="required|in:1,2">
                                                        Si</label></td>

                                                <td class="col-md-3"><label>
                                                        <input type="radio" name="dis3" value="2"
                                                               v-model="dis3">
                                                        no</label></td>
                                            </tr>
                                        </table>
                                        <p>Su discapacidad es:</p>
                                        <div class="form-group{{ $errors->has('discp') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('discp') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon37"><i class="fa fa-wheelchair" aria-hidden="true"></i></span>
                                                <select id="discp" name='discp' class="form-control" aria-describedby="basic-addon37" placeholder="Existe Salud"
                                                        v-bind:disabled="(dis1==2)&&(dis2==2)&&(dis3==2)"
                                                        v-bind:data-vv-rules="((dis1==1)||(dis2==1)||(dis3==1))? 'required|in:1,2,3':''"
                                                        v-model="discp"  
                                                        v-validate.initial="discp" 
                                                        data-vv-delay="200"  
                                                        >
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">De nacimiento</option>
                                                    <option value="2">Adquirida</option>
                                                    <option value="3">Hereditaria</option>
                                                </select>
                                            </div>	
                                            @if ($errors->has('discp'))<span class="help-block"><strong>{{ $errors->first('discp') }}</strong></span>@endif
                                        </div> 

                                        <p>Otra discapacidad:</p>
                                        <div class="form-group{{ $errors->has('discp_otro') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('discp_otro') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon34"><i class="fa fa-font-awesome" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="discp_otro"  name="discp_otro" value="{{ old('discp_otro') }}"  placeholder="Otro" aria-describedby="basic-addon34"                                                       
                                                       data-vv-rules="min:3|max:50"
                                                       v-model="discp_otro"  
                                                       v-validate.initial="discp_otro" 
                                                       data-vv-delay="200"                                                         
                                                       >
                                            </div>	
                                            @if ($errors->has('discp_otro'))<span class="help-block"><strong>{{ $errors->first('discp_otro') }}</strong></span>@endif
                                        </div>

                                    </div><!-- Col 3 Salud -->
                                </div>    
                            </div>
                            <hr/>
                            <div class="row row-offcanvas row-offcanvas-right">       
                                <div class="col-md-12">

                                    <div class="col-md-6">
                                        <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> Acceso a servicio Basico</h4>   
                                        <p>El agua de su casa proviene de:</p>   
                                        <div class="form-group{{ $errors->has('ser_agua') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('ser_agua') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon38"><i class="fa fa-tint" aria-hidden="true"></i></span>
                                                <select id="ser_agua" name='ser_agua' class="form-control" aria-describedby="basic-addon38" placeholder="Existe Salud"

                                                        data-vv-rules="required|not_in:''"
                                                        v-model="ser_agua"  
                                                        v-validate.initial="ser_agua" 
                                                        data-vv-delay="200"                                                          
                                                        >

                                                    <option value="">Seleccionar</option>
                                                    <option value="1">Cañería de red</option>
                                                    <option value="2">Pileta pública</option>
                                                    <option value="3">Carro repartidor (aguatero)</option>
                                                    <option value="4">Pozo (con o sin bomba)</option>
                                                    <option value="5">Río, vertiente, acequia, lago,
                                                        laguna, curiche</option>
                                                    <option value="6">Otra</option>
                                                </select>
                                            </div>	
                                            @if ($errors->has('ser_agua'))<span class="help-block"><strong>{{ $errors->first('ser_agua') }}</strong></span>@endif
                                        </div> 

                                        <p>¿La o el estudiante tiene energía eléctrica en su vivienda?</p>
                                        <div class="form-group{{ $errors->has('elec_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('elec_est') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon39"><i class="fa fa-bolt" aria-hidden="true"></i></span>
                                                <select id="elec_est" name='elec_est' class="form-control"aria-describedby="basic-addon39" placeholder="Existe Salud"
                                                        v-model="elec_est"  
                                                        v-validate.initial="elec_est" 
                                                        data-vv-rules="required|not_in:''"
                                                        data-vv-delay="200"
                                                        >
                                                    <option value="">Seleccionar</option>
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>	
                                            @if ($errors->has('elec_est'))<span class="help-block"><strong>{{ $errors->first('elec_est') }}</strong></span>@endif
                                        </div>

                                        <p>El baño, water o letrina de su casa tiene desagüe a:</p>
                                        <div class="form-group{{ $errors->has('water_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('water_est') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon40"><i class="fa fa-bath" aria-hidden="true"></i></span>
                                                <select id="water_est" name='water_est' class="form-control"aria-describedby="basic-addon40" placeholder="Desagüe"
                                                        v-model="water_est"  
                                                        v-validate.initial="water_est" 
                                                        data-vv-rules="required|not_in:''"
                                                        data-vv-delay="200"
                                                        >
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">Alcantarillado</option>
                                                    <option value="2">Cámara séptica</option>
                                                    <option value="3">Pozo ciego</option>
                                                    <option value="4">A la calle</option>
                                                    <option value="5">A quebrada, río lago, laguna, curiche</option>
                                                </select>
                                            </div>	
                                            @if ($errors->has('water_est'))<span class="help-block"><strong>{{ $errors->first('water_est') }}</strong></span>@endif
                                        </div>
                                    </div><!-- Col 1 Servicios Basicos-->

                                    <div class="col-md-6">
                                        <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> Empleo</h4>
                                        <p>¿Realizó la o el estudiante en los últimos 3 meses alguna de las siguientes actividades?</p> 
                                        <div class="form-group{{ $errors->has('trab_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('trab_est') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon41"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                                                <select id="trab_est" name='trab_est' class="form-control"aria-describedby="basic-addon41" placeholder="Realizo Trabajo"
                                                        v-model="trab_est"  
                                                        v-validate.initial="trab_est" 
                                                        data-vv-rules="required|not_in:''"
                                                        data-vv-delay="200"
                                                        >
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">Trabajó en agricultura o agroindustria</option>
                                                    <option value="2">Ayudó a familiares en agricultura o ganadería</option>
                                                    <option value="3">Ayudó en el hogar en labores domésticas, comercio o ventas</option>
                                                    <option value="4">Trabajó como trabajadora del hogar o niñera</option>
                                                    <option value="5">Trabajó en minería</option>
                                                    <option value="6">Trabajó en construcción</option>
                                                    <option value="7">Trabajó en transporte público</option>
                                                    <option value="8">Otro trabajo</option>
                                                    <option value="9">No trabajó </option>
                                                </select>
                                            </div>	
                                            @if ($errors->has('trab_est'))<span class="help-block"><strong>{{ $errors->first('trab_est') }}</strong></span>@endif
                                        </div> 

                                        <p>La semana pasada ¿Cuántos días trabajó o ayudó a la familia la o el estudiante?</p>
                                        <div class="form-group{{ $errors->has('dia_trab_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('dia_trab_est') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon42"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></span>
                                                <select id="dia_trab_est" name='dia_trab_est' class="form-control" aria-describedby="basic-addon42" placeholder="Días de Trabajo"
                                                        v-model="dia_trab_est"  
                                                        v-validate.initial="dia_trab_est" 
                                                        data-vv-rules="required|not_in:''"
                                                        data-vv-delay="200">
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="0">0</option>
                                                </select>
                                            </div>	
                                            @if ($errors->has('dia_trab_est'))<span class="help-block"><strong>{{ $errors->first('dia_trab_est') }}</strong></span>@endif
                                        </div>

                                        <p>¿Recibió algún pago por el trabajo realizado?</p>
                                        <div class="form-group{{ $errors->has('rec_pag_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('rec_pag_est') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon43"><i class="fa fa-money" aria-hidden="true"></i></span>
                                                <select id="rec_pag_est" name='rec_pag_est' class="form-control"aria-describedby="basic-addon43" placeholder="Recibió Pago"
                                                        v-model="rec_pag_est"  
                                                        v-validate.initial="rec_pag_est" 
                                                        data-vv-rules="required|not_in:''"
                                                        data-vv-delay="200">
                                                    <option value="">Seleccionar</option>
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>	
                                            @if ($errors->has('rec_pag_est'))<span class="help-block"><strong>{{ $errors->first('rec_pag_est') }}</strong></span>@endif
                                        </div>                                            

                                    </div><!-- Col 2 Empleo-->

                                    <div class="col-md-6">
                                        <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> Acceso a medios de comunicación</h4>
                                        <p>La o el estudiante accede a internet en:</p>
                                        <div class="form-group{{ $errors->has('internet_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('internet_est') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon44"><i class="fa fa-internet-explorer" aria-hidden="true"></i></span>
                                                <select id="internet_est" name='internet_est' class="form-control"aria-describedby="basic-addon44" placeholder="Realizo Trabajo"
                                                        v-model="internet_est"  
                                                        v-validate.initial="internet_est" 
                                                        data-vv-rules="required|not_in:''"
                                                        data-vv-delay="200"
                                                        >
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">Su domicilio</option>
                                                    <option value="2">En la Unidad Educativa</option>
                                                    <option value="3">Lugares públicos</option>
                                                    <option value="4">No accede a internet</option>
                                                </select>
                                            </div>	
                                            @if ($errors->has('internet_est'))<span class="help-block"><strong>{{ $errors->first('internet_est') }}</strong></span>@endif
                                        </div>

                                        <p>¿Con qué frecuencia la o el estudiante accede a internet?
                                        <div class="form-group{{ $errors->has('frec_inter_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('frec_inter_est') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon45"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                                <select id="frec_inter_est" name='frec_inter_est' class="form-control"aria-describedby="basic-addon45" placeholder="Frecuencia Internet" 
                                                        v-bind:disabled="(internet_est==4)||(internet_est=='')"
                                                        v-model="frec_inter_est"  
                                                        v-validate.initial="frec_inter_est" 
                                                        data-vv-rules="not_in:''"
                                                        data-vv-delay="200"
                                                        >
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">Diariamente</option>
                                                    <option value="2">Más de una vez a la semana</option>
                                                    <option value="3">Una vez al mes o menos</option>                    
                                                </select>
                                            </div>	
                                            @if ($errors->has('frec_inter_est'))<span class="help-block"><strong>{{ $errors->first('frec_inter_est') }}</strong></span>@endif
                                        </div>

                                    </div><!-- Col 3 Comunicacion-->

                                    <div class="col-md-6">
                                        <h4><i class="fa fa-graduation-cap" aria-hidden="true"></i> Acceso a medios de transporte</h4>
                                        <p>¿Cómo llega la o el estudiante a la Unidad Educativa?</p>
                                        <div class="form-group{{ $errors->has('transp_esp') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('transp_esp') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon46"><i class="fa fa-bus" aria-hidden="true"></i></span>
                                                <select id="transp_esp" name='transp_esp' class="form-control"aria-describedby="basic-addon46" placeholder="Transporte"
                                                        v-model="transp_esp"  
                                                        v-validate.initial="transp_esp" 
                                                        data-vv-rules="required|not_in:''"
                                                        data-vv-delay="200"
                                                        >
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">A pie</option>
                                                    <option value="2">En vehículo de transporte terrestre</option>
                                                    <option value="3">Otro medio</option>
                                                </select>
                                            </div>	
                                            @if ($errors->has('transp_esp'))<span class="help-block"><strong>{{ $errors->first('transp_esp') }}</strong></span>@endif
                                        </div>

                                        <div class="form-group{{ $errors->has('trans_otro_est') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('trans_otro_est') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon47"><i class="fa fa-rocket" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="trans_otro_est"  name="trans_otro_est" value="{{ old('trans_otro_est') }}"  placeholder="Otro" aria-describedby="basic-addon47"
                                                       v-bind:disabled="(transp_esp!=3)||(transp_esp=='')"
                                                       v-model="trans_otro_est"  
                                                       v-validate.initial="trans_otro_est" 
                                                       data-vv-rules="min:3|max:10"
                                                       data-vv-delay="200"
                                                       >
                                            </div>	
                                            @if ($errors->has('trans_otro_est'))<span class="help-block"><strong>{{ $errors->first('trans_otro_est') }}</strong></span>@endif
                                        </div>

                                        <p>En el medio de transporte señalado ¿Cuál es el tiempo máximo que demora en llegar de su casa a la Unidad Educativa o viceversa?</p>

                                        <div class="form-group{{ $errors->has('transp_tiempo') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('transp_tiempo') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon48"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                                <select id="transp_tiempo" name='transp_tiempo' class="form-control"aria-describedby="basic-addon48" placeholder="Tiempo"
                                                        v-model="transp_tiempo"  
                                                        v-validate.initial="transp_tiempo" 
                                                        data-vv-rules="required|not_in:''"
                                                        data-vv-delay="200"
                                                        >
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">Menos de media hora</option>
                                                    <option value="2">Entre media hora y una hora</option>
                                                    <option value="3">Entre una a dos horas</option>
                                                    <option value="4">Dos horas o más</option>
                                                </select>
                                            </div>	
                                            @if ($errors->has('transp_tiempo'))<span class="help-block"><strong>{{ $errors->first('transp_tiempo') }}</strong></span>@endif
                                        </div>                                                  

                                    </div><!-- Col 4 transporte-->


                                </div>    
                            </div>

                            <!-- // Aspectos Sociales -->
                        </div>       
                        <!-- ***************************** -->
                        <div class="tab-pane" id="5a">    
                            <div class="row row-offcanvas row-offcanvas-right">       
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h4><i class="fa fa-male" aria-hidden="true"></i> Datos del Padre o Tutor</h4>

                                        <div class="form-group{{ $errors->has('ci_tut') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('ci_tut') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon60"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="ci_tut"  name="ci_tut" value="{{ old('ci_tut') }}"  placeholder="C.I. Tutor" aria-describedby="basic-addon60"
                                                       v-model="ci_tut"  
                                                       v-validate.initial="ci_tut" 
                                                       data-vv-rules="required|min:6|max:15"
                                                       data-vv-delay="200"                                                      
                                                       >
                                                <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('ci_tut') }"></span>
                                            </div>	
                                            @if ($errors->has('ci_tut'))<span class="help-block"><strong>{{ $errors->first('ci_tut') }}</strong></span>@endif
                                        </div> 

                                        <div class="form-group{{ $errors->has('ape_tut') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('ape_tut') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon61"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="ape_tut"  name="ape_tut" value="{{ old('ape_tut') }}"  placeholder="Apellidos" aria-describedby="basic-addon61"
                                                       v-model="ape_tut"  
                                                       v-validate.initial="ape_tut" 
                                                       data-vv-rules="required|min:3|max:50"
                                                       data-vv-delay="200"                                                       
                                                       >
                                                <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('ape_tut') }"></span>
                                            </div>	
                                            @if ($errors->has('ape_tut'))<span class="help-block"><strong>{{ $errors->first('ape_tut') }}</strong></span>@endif
                                        </div>                                                            

                                        <div class="form-group{{ $errors->has('nom_tut') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('nom_tut') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon62"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="nom_tut"  name="nom_tut" value="{{ old('nom_tut') }}"  placeholder="Nombres" aria-describedby="basic-addon62"
                                                       v-model="nom_tut"  
                                                       v-validate.initial="nom_tut" 
                                                       data-vv-rules="required|min:3|max:50"
                                                       data-vv-delay="200"                                                       
                                                       >
                                                <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('nom_tut') }"></span>
                                            </div>	
                                            @if ($errors->has('nom_tut'))<span class="help-block"><strong>{{ $errors->first('nom_tut') }}</strong></span>@endif
                                        </div> 

                                        <div class="form-group{{ $errors->has('idim_tut') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('idim_tut') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon63">
                                                    <i class="fa fa-gg-circle" aria-hidden="true"></i>
                                                </span>
                                                <select id="idim_tut" name='idim_tut' class="form-control" aria-describedby="basic-addon63" placeholder="Idioma"
                                                        v-model="idim_tut"  
                                                        v-validate.initial="idim_tut" 
                                                        data-vv-rules="required|not_in:''"
                                                        data-vv-delay="200"
                                                        >
                                                    <option value="">Idioma </option>
                                                    <option value="Castellano">Castellano</option>
                                                    <option value="Quechua">Quechua</option>
                                                    <option value="Aymara">Aymara</option>
                                                    <option value="Guarani">Guarani</option>
                                                    <option value="Ingles">Ingles</option>
                                                </select>
                                            </div>	
                                            @if ($errors->has('idim_tut'))<span class="help-block"><strong>{{ $errors->first('idim_tut') }}</strong></span>@endif
                                        </div> 




                                        <div class="form-group{{ $errors->has('ocp_tut') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('ocp_tut') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon64"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="ocp_tut"  name="ocp_tut" value="{{ old('ocp_tut') }}"  placeholder="Ocupacion Laboral" aria-describedby="basic-addon64"
                                                       v-model="ocp_tut"  
                                                       v-validate.initial="ocp_tut" 
                                                       data-vv-rules="min:3|max:50"
                                                       data-vv-delay="200"                                                       
                                                       >
                                            </div>	
                                            @if ($errors->has('ocp_tut'))<span class="help-block"><strong>{{ $errors->first('ocp_tut') }}</strong></span>@endif
                                        </div>  

                                        <div class="form-group{{ $errors->has('grd_tut') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('grd_tut') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon65"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="grd_tut"  name="grd_tut" value="{{ old('grd_tut') }}"  placeholder="Grado de Instrucción" aria-describedby="basic-addon65"
                                                       v-model="grd_tut"  
                                                       v-validate.initial="grd_tut" 
                                                       data-vv-rules="min:3|max:50"
                                                       data-vv-delay="200"
                                                       >
                                            </div>	
                                            @if ($errors->has('grd_tut'))<span class="help-block"><strong>{{ $errors->first('grd_tut') }}</strong></span>@endif
                                        </div> 

                                        <div class="form-group{{ $errors->has('paren_tut') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('paren_tut') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon66"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="paren_tut"  name="paren_tut" value="{{ old('paren_tut') }}"  placeholder="En caso de tutor(a) ¿Cuál es el parentesco?"aria-describedby="basic-addon66"
                                                       v-model="paren_tut"  
                                                       v-validate.initial="paren_tut" 
                                                       data-vv-rules="min:3|max:50"
                                                       data-vv-delay="200"
                                                       >
                                            </div>	
                                            @if ($errors->has('paren_tut'))<span class="help-block"><strong>{{ $errors->first('paren_tut') }}</strong></span>@endif
                                        </div>                

                                    </div><!-- // Col 1 -->

                                    <div class="col-md-6">
                                        <h4><i class="fa fa-female" aria-hidden="true"></i> Datos de la Madre</h4>
                                        <div class="form-group{{ $errors->has('ci_madre') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('ci_madre') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon70"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="ci_madre"  name="ci_madre" value="{{ old('ci_madre') }}"  placeholder="C.I. Madre" aria-describedby="basic-addon70"
                                                       v-model="ci_madre"  
                                                       v-validate.initial="ci_madre" 
                                                       data-vv-rules="min:6|max:15"
                                                       data-vv-delay="200"
                                                       >
                                            </div>	
                                            @if ($errors->has('ci_madre'))<span class="help-block"><strong>{{ $errors->first('ci_madre') }}</strong></span>@endif
                                        </div> 

                                        <div class="form-group{{ $errors->has('ape_madre') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('ape_madre') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon71"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="ape_madre"  name="ape_madre" value="{{ old('ape_madre') }}"  placeholder="Apellidos" aria-describedby="basic-addon71"
                                                       v-model="ape_madre"  
                                                       v-validate.initial="ape_madre" 
                                                       data-vv-rules="min:3|max:50"
                                                       data-vv-delay="200"
                                                       >
                                            </div>	
                                            @if ($errors->has('ape_madre'))<span class="help-block"><strong>{{ $errors->first('ape_madre') }}</strong></span>@endif
                                        </div>                                                            

                                        <div class="form-group{{ $errors->has('nom_madre') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('nom_madre') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon72"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="nom_madre"  name="nom_madre" value="{{ old('nom_madre') }}"  placeholder="Nombres" aria-describedby="basic-addon72"
                                                       v-model="nom_madre"  
                                                       v-validate.initial="nom_madre" 
                                                       data-vv-rules="min:3|max:50"
                                                       data-vv-delay="200"
                                                       >
                                            </div>	
                                            @if ($errors->has('nom_madre'))<span class="help-block"><strong>{{ $errors->first('nom_madre') }}</strong></span>@endif
                                        </div> 

                                        <div class="form-group{{ $errors->has('idim_madre') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('idim_madre') }">        	
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon63">
                                                    <i class="fa fa-gg-circle" aria-hidden="true"></i>
                                                </span>
                                                <select id="idim_madre" name='idim_madre' class="form-control" aria-describedby="basic-addon73" placeholder="Idioma"
                                                        v-model="idim_madre"  
                                                        v-validate.initial="idim_madre" 
                                                        data-vv-rules="not_in:''"
                                                        data-vv-delay="200"
                                                        >
                                                    <option value="">Idioma </option>
                                                    <option value="Castellano">Castellano</option>
                                                    <option value="Quechua">Quechua</option>
                                                    <option value="Aymara">Aymara</option>
                                                    <option value="Guarani">Guarani</option>
                                                    <option value="Ingles">Ingles</option>
                                                </select>
                                            </div>	
                                            @if ($errors->has('idim_madre'))<span class="help-block"><strong>{{ $errors->first('idim_madre') }}</strong></span>@endif
                                        </div> 



                                        <div class="form-group{{ $errors->has('ocp_madre') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('ocp_madre') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon74"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="ocp_madre"  name="ocp_madre" value="{{ old('ocp_madre') }}"  placeholder="Ocupacion Laboral" aria-describedby="basic-addon74"
                                                       v-model="ocp_madre"  
                                                       v-validate.initial="ocp_madre" 
                                                       data-vv-rules="min:3|max:20"
                                                       data-vv-delay="200"
                                                       >
                                            </div>	
                                            @if ($errors->has('ocp_madre'))<span class="help-block"><strong>{{ $errors->first('ocp_madre') }}</strong></span>@endif
                                        </div>  

                                        <div class="form-group{{ $errors->has('grd_madre') ? ' has-error' : '' }} has-feedback "  v-bind:class="{'': true, 'has-error': errors.has('grd_madre') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon75"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="grd_madre"  name="grd_madre" value="{{ old('grd_madre') }}"  placeholder="Grado de Instrucción" aria-describedby="basic-addon75"
                                                       v-model="grd_madre"  
                                                       v-validate.initial="grd_madre" 
                                                       data-vv-rules="min:3|max:20"
                                                       data-vv-delay="200"
                                                       >
                                            </div>	
                                            @if ($errors->has('grd_madre'))<span class="help-block"><strong>{{ $errors->first('grd_madre') }}</strong></span>@endif
                                        </div>  


                                    </div><!-- // Col 2 -->
                                </div>    
                            </div><!-- // Datos del TUTOT --> 
                        </div>      
                        <!-- ***************************** -->

                    </div><!-- // TAB informacion  -->
                    <div class="col-md-12">
                        <div class="enviarbtn">                            
                            {!! Form::submit('Validar Registro', ['class' => 'btn btn-primary']); !!}
                        </div>

                    </div>                     
                </form>

            </div>    

        </div>

    </div>
    @endif
</div>

@endsection