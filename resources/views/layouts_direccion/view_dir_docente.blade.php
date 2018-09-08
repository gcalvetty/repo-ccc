@extends('layouts_sisccc.pagsis_docentes')
@section('titulo','Dirección')
@section('usuccc')
{{ $usuactivo }}
@endsection
@section('usuico')
<i class="fa fa-graduation-cap fa-2x"></i>
@endsection
@section('usuico-peq')
<i class="fa fa-graduation-cap fa-lg"></i>
@endsection

@section('sis_menu_lateral')
@include('layouts_direccion.partials.menu')   
@endsection	

@section('sis_contenido')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">    	
    <!-- Content Header (Page header) -->
    <section class="content-header">      
        <h1>
            Escritorio           
        </h1>
        <ol class="breadcrumb">
            <li><a href="/dirección/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Escritorio</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <section class="col-lg-4 connectedSortable ui-sortable">
                <div class="box box-primary">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-comments-o"></i>

                        <h3 class="box-title">Docentes - Sección</h3>

                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Profesor</th>
                                <th>Paralelo</th>
                                <th>Modificar</th>                                                                        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($l1 as $Prof1)
                            <tr>
                                <td>{{ $Prof1->id }}</td>                                      
                                <td>{{ $Prof1->nombre }}, {{ $Prof1->ape_paterno }} {{ $Prof1->ape_materno }}
                                </td>

                                <td>
                                    A                                    
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" 
                                            data-toggle="modal" 
                                            data-target=".bs-example-modal-lg"
                                            data-iddoc="{{ $Prof1->id }}"
                                            data-nomdoc="{{ $Prof1->ape_paterno }} {{ $Prof1->ape_materno }} {{ $Prof1->nombre }}"
                                            >
                                        <i class="fa fa-edit"></i></button>                                   
                                </td>

                            </tr>
                            @endforeach  

                            </tfoot>
                    </table>
                </div> 
            </section>

            <section class="col-lg-4 connectedSortable ui-sortable">
                <div class="box box-success">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-comments-o"></i>

                        <h3 class="box-title">Docentes - Primaria</h3>

                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Profesor</th>
                                <th>Paralelo</th>
                                <th>Modificar</th>                                                                        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($l2 as $Prof1)
                            <tr>
                                <td>{{ $Prof1->id }}</td>                                      
                                <td>{{ $Prof1->nombre }}, {{ $Prof1->ape_paterno }} {{ $Prof1->ape_materno }}
                                </td>

                                <td>
                                    A                                    
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success" 
                                            data-toggle="modal" 
                                            data-target=".bs-example-modal-lg"
                                            data-iddoc="{{ $Prof1->id }}"
                                            data-nomdoc="{{ $Prof1->ape_paterno }} {{ $Prof1->ape_materno }} {{ $Prof1->nombre }}"
                                            >
                                        <i class="fa fa-edit"></i></button>                                  
                                </td>

                            </tr>
                            @endforeach  

                            </tfoot>
                    </table>
                </div> 
            </section>

            <section class="col-lg-4 connectedSortable ui-sortable ">
                <div class="box box-info">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-comments-o"></i>

                        <h3 class="box-title">Docentes - Secundaria</h3>

                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Profesor</th>
                                <th>Paralelo</th>
                                <th>Modificar</th>                                                                        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($l3 as $Prof1)
                            <tr>
                                <td>{{ $Prof1->id }}</td>                                      
                                <td> {{ $Prof1->nombre }}, {{ $Prof1->ape_paterno }} {{ $Prof1->ape_materno }}
                                </td>

                                <td>
                                    A                                    
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info" 
                                            data-toggle="modal" 
                                            data-target=".bs-example-modal-lg"
                                            data-iddoc="{{ $Prof1->id }}"
                                            data-nomdoc="{{ $Prof1->ape_paterno }} {{ $Prof1->ape_materno }} {{ $Prof1->nombre }}">
                                        <i class="fa fa-edit"></i></button>                                    
                                </td>

                            </tr>
                            @endforeach  

                            </tfoot>
                    </table>
                </div> 
            </section>


        </div>

        <div class="row">
            <section class="col-lg-6 connectedSortable ui-sortable">
                <div class="box box-title">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-comments-o"></i>

                        <h3 class="box-title">Docentes - Taller Inicial</h3>

                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Profesor</th>
                                <th>Paralelo</th>
                                <th>Modificar</th>                                                                        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($l4 as $Prof1)
                            <tr>
                                <td>{{ $Prof1->id }}</td>                                      
                                <td>{{ $Prof1->nombre }}, {{ $Prof1->ape_paterno }} {{ $Prof1->ape_materno }}
                                </td>

                                <td>
                                    A                                    
                                </td>
                                <td>
                                    <button type="button" class="btn btn-title" 
                                            data-toggle="modal" 
                                            data-target=".bs-example-modal-lg"
                                            data-iddoc="{{ $Prof1->id }}"
                                            data-nomdoc="{{ $Prof1->ape_paterno }} {{ $Prof1->ape_materno }} {{ $Prof1->nombre }}">
                                        <i class="fa fa-edit"></i></button>                                  
                                </td>

                            </tr>
                            @endforeach  

                            </tfoot>
                    </table>
                </div> 
            </section>

            <section class="col-lg-6 connectedSortable ui-sortable">
                <div class="box box-danger">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-comments-o"></i>

                        <h3 class="box-title">Docentes - Sin Asignación</h3>

                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Profesor</th>
                                <th>Paralelo</th>
                                <th>Modificar</th>                                                                        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($l0 as $Prof1)
                            <tr>
                                <td>{{ $Prof1->id }}</td>                                      
                                <td>{{ $Prof1->nombre }}, {{ $Prof1->ape_paterno }} {{ $Prof1->ape_materno }}</b>
                                </td>

                                <td>
                                    A                                    
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" 
                                            data-toggle="modal" 
                                            data-target=".bs-example-modal-lg"
                                            data-iddoc="{{ $Prof1->id }}"
                                            data-nomdoc="{{ $Prof1->ape_paterno }} {{ $Prof1->ape_materno }} {{ $Prof1->nombre }}">
                                        <i class="fa fa-edit"></i></button>                                          
                                </td>

                            </tr>
                            @endforeach  
                            </tfoot>
                    </table>
                </div> 
            </section>
        </div>


    </section>



    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="DocenteModal">
        <div class="modal-dialog" role="document">
            <form action="{{route('Dir.asig.materias')}}" id="matDoc">                
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Modificar Materias que Dicta: <span class="Doc"></span></h4>

                    </div>

                    <div class="modal-body">
                        <!-- Nav tabs -->

                        <ul class="nav nav-tabs" role="tablist">                        
                            <li role="presentation" class="active"><a href="#m1" aria-controls="settings" role="tab" data-toggle="tab">Seccion</a></li>
                            <li role="presentation"><a href="#m2" aria-controls="profile" role="tab" data-toggle="tab">Primaria</a></li>
                            <li role="presentation"><a href="#m3" aria-controls="messages" role="tab" data-toggle="tab">Secundaria</a></li>
                            <li role="presentation" class="hidden"><a href="#m4" aria-controls="home" role="tab" data-toggle="tab">Taller Inicial</a></li>

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- *********** SECCION *********** -->

                            <div role="tabpanel" class="tab-pane  active" id="m1">
                                <table  class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="col-lg-6">Materia</th>
                                            <th class="col-lg-6">Curso</th>                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="mat30"  value="30">
                                                        Lenguaje y Comunicación
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <select multiple name="cur30[]" class="form-control input-sm">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>                                        
                                                </select>
                                            </td></tr>
                                        <tr><td><div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="mat31" value="31">
                                                        Lenguaje Extranjera, Musica y Recreacion
                                                    </label>
                                                </div></td><td>
                                                <select multiple name="cur31[]" class="form-control input-sm">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>                                        
                                                </select>
                                            </td></tr>
                                        <tr><td><div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="mat32" value="32">
                                                        Ciencias Sociales
                                                    </label>
                                                </div></td><td><select name="cur32[]"  multiple class="form-control input-sm">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>                                        
                                                </select></td></tr>
                                        <tr>
                                            <td><div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="mat33"  value="33">
                                                        Matematicas
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur33[]" class="form-control input-sm">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"  name="mat34" value="34">
                                                        Ciencia y Tecnologia
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur34[]"class="form-control input-sm">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"  name="mat35" value="35">
                                                        Ciencias Naturales
                                                    </label>
                                                </div></td>
                                            <td> <select multiple name="cur35[]" class="form-control input-sm">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>                                      
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="mat36" value="36">
                                                        Desarrollo Social Cultural, Afectivo y Espiritual
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur36[]" class="form-control input-sm">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>                                        
                                                </select></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- *********** PRIMARIA *********** -->                        
                            <div role="tabpanel" class="tab-pane" id="m2">

                                <table  class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="col-lg-6">Materia</th>
                                            <th class="col-lg-6">Curso</th>                                
                                        </tr>
                                    </thead>
                                    <tbody>                                                                            
                                        <tr>
                                            <td><div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="mat44" value="44">
                                                        Comunicación y Lenguaje
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur44[]"  class="form-control input-sm">
                                                    <option value="3">1</option>
                                                    <option value="4">2</option>                                        
                                                    <option value="5">3</option>
                                                    <option value="6">4</option>
                                                    <option value="7">5</option>
                                                    <option value="8">6</option>                                       
                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="mat45" value="45">
                                                        Lengua Extranjera
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur45[]"  class="form-control input-sm">
                                                    <option value="3">1</option>
                                                    <option value="4">2</option>                                        
                                                    <option value="5">3</option>
                                                    <option value="6">4</option>
                                                    <option value="7">5</option>
                                                    <option value="8">6</option>                                       
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat46" value="46">
                                                        Ciencias Sociales
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur46[]"  class="form-control input-sm">
                                                    <option value="3">1</option>
                                                    <option value="4">2</option>                                        
                                                    <option value="5">3</option>
                                                    <option value="6">4</option>
                                                    <option value="7">5</option>
                                                    <option value="8">6</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat47" value="47">
                                                        Educación Fisica y Deportes
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur47[]"  class="form-control input-sm">
                                                    <option value="3">1</option>
                                                    <option value="4">2</option>                                        
                                                    <option value="5">3</option>
                                                    <option value="6">4</option>
                                                    <option value="7">5</option>
                                                    <option value="8">6</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat48" value="48">
                                                        Educación Musical
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur48[]"  class="form-control input-sm">
                                                    <option value="3">1</option>
                                                    <option value="4">2</option>                                        
                                                    <option value="5">3</option>
                                                    <option value="6">4</option>
                                                    <option value="7">5</option>
                                                    <option value="8">6</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat49" value="49">
                                                        Artes Plasticas y Visuales
                                                    </label>
                                                </div></td>
                                            <td> <select multiple name="cur49[]"  class="form-control input-sm">
                                                    <option value="3">1</option>
                                                    <option value="4">2</option>                                        
                                                    <option value="5">3</option>
                                                    <option value="6">4</option>
                                                    <option value="7">5</option>
                                                    <option value="8">6</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="mat50" value="50">
                                                        Matematicas
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur50[]"  class="form-control input-sm">
                                                    <option value="3">1</option>
                                                    <option value="4">2</option>                                        
                                                    <option value="5">3</option>
                                                    <option value="6">4</option>
                                                    <option value="7">5</option>
                                                    <option value="8">6</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="mat51" value="51">
                                                        Tecnica Tecnologia
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur51[]" class="form-control input-sm">
                                                    <option value="3">1</option>
                                                    <option value="4">2</option>                                        
                                                    <option value="5">3</option>
                                                    <option value="6">4</option>
                                                    <option value="7">5</option>
                                                    <option value="8">6</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="mat52" value="52">
                                                        Ciencias Naturales
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur52[]" class="form-control input-sm">
                                                    <option value="3">1</option>
                                                    <option value="4">2</option>                                        
                                                    <option value="5">3</option>
                                                    <option value="6">4</option>
                                                    <option value="7">5</option>
                                                    <option value="8">6</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat53" value="53">
                                                        Valores Espirituales y Religiones
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur53[]" class="form-control input-sm">
                                                    <option value="3">1</option>
                                                    <option value="4">2</option>                                        
                                                    <option value="5">3</option>
                                                    <option value="6">4</option>
                                                    <option value="7">5</option>
                                                    <option value="8">6</option>                                        
                                                </select></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <!-- *********** SECUNDARIA *********** -->
                            <div role="tabpanel" class="tab-pane" id="m3">
                                <table  class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="col-lg-6">Materia</th>
                                            <th class="col-lg-6">Curso</th>                                
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat54" value="54">
                                                        Lenguaje Castellana y Originaria
                                                    </label>
                                                </div></td>
                                            <td><select multiple  name="cur54[]" class="form-control input-sm">
                                                    <option value="9">1</option>
                                                    <option value="10">2</option>                                        
                                                    <option value="11">3</option>
                                                    <option value="12">4</option>
                                                    <option value="13">5</option>
                                                    <option value="14">6</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat55"  value="55">
                                                        Lenguaje Extranjera
                                                    </label>
                                                </div></td>
                                            <td><select multiple  name="cur55[]" class="form-control input-sm">
                                                    <option value="9">1</option>
                                                    <option value="10">2</option>                                        
                                                    <option value="11">3</option>
                                                    <option value="12">4</option>
                                                    <option value="13">5</option>
                                                    <option value="14">6</option>                                       
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat56"  value="56">
                                                        Comunicación y Lenguajes
                                                    </label>
                                                </div></td>
                                            <td><select multiple  name="cur56[]" class="form-control input-sm">
                                                    <option value="9">1</option>
                                                    <option value="10">2</option>                                        
                                                    <option value="11">3</option>
                                                    <option value="12">4</option>
                                                    <option value="13">5</option>
                                                    <option value="14">6</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat57"  value="57">
                                                        Lenguaje Extrangera
                                                    </label>
                                                </div></td>
                                            <td><select multiple  name="cur57[]" class="form-control input-sm">
                                                    <option value="9">1</option>
                                                    <option value="10">2</option>                                        
                                                    <option value="11">3</option>
                                                    <option value="12">4</option>
                                                    <option value="13">5</option>
                                                    <option value="14">6</option>                                       
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat58"  value="58">
                                                        Ciencias Sociales
                                                    </label>
                                                </div></td>
                                            <td><select multiple  name="cur58[]" class="form-control input-sm">
                                                    <option value="9">1</option>
                                                    <option value="10">2</option>                                        
                                                    <option value="11">3</option>
                                                    <option value="12">4</option>
                                                    <option value="13">5</option>
                                                    <option value="14">6</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td> <div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat59"  value="59">
                                                        Educación Fisica y Deportes
                                                    </label>
                                                </div></td>
                                            <td><select multiple  name="cur59[]" class="form-control input-sm">
                                                    <option value="9">1</option>
                                                    <option value="10">2</option>                                        
                                                    <option value="11">3</option>
                                                    <option value="12">4</option>
                                                    <option value="13">5</option>
                                                    <option value="14">6</option>                                       
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat60"  value="60">
                                                        Educación Musical
                                                    </label>
                                                </div></td>
                                            <td><select multiple  name="cur60[]" class="form-control input-sm">
                                                    <option value="9">1</option>
                                                    <option value="10">2</option>                                        
                                                    <option value="11">3</option>
                                                    <option value="12">4</option>
                                                    <option value="13">5</option>
                                                    <option value="14">6</option>                                      
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat61"  value="61">
                                                        Artes Plasticas y Visuales
                                                    </label>
                                                </div></td>
                                            <td><select multiple  name="cur61[]" class="form-control input-sm">
                                                    <option value="9">1</option>
                                                    <option value="10">2</option>                                        
                                                    <option value="11">3</option>
                                                    <option value="12">4</option>
                                                    <option value="13">5</option>
                                                    <option value="14">6</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat62"  value="62">
                                                        Matematicas
                                                    </label>
                                                </div></td>
                                            <td><select multiple  name="cur62[]" class="form-control input-sm">
                                                    <option value="9">1</option>
                                                    <option value="10">2</option>                                        
                                                    <option value="11">3</option>
                                                    <option value="12">4</option>
                                                    <option value="13">5</option>
                                                    <option value="14">6</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat63" value="63">
                                                        Tecnica Tecnologia
                                                    </label>
                                                </div></td>
                                            <td><select multiple  name="cur63[]" class="form-control input-sm">
                                                    <option value="9">1</option>
                                                    <option value="10">2</option>                                        
                                                    <option value="11">3</option>
                                                    <option value="12">4</option>
                                                    <option value="13">5</option>
                                                    <option value="14">6</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat64"  value="64">
                                                        Ciencias Naturales, Biologia, Geografia
                                                    </label>
                                                </div></td>
                                            <td><select multiple  name="cur64[]" class="form-control input-sm">
                                                    <option value="9">1</option>
                                                    <option value="10">2</option>                                        
                                                    <option value="11">3</option>
                                                    <option value="12">4</option>
                                                    <option value="13">5</option>
                                                    <option value="14">6</option>                                       
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat65"  value="65">
                                                        Cosmovisión, Filosofia y Psicologia
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur65[]" class="form-control input-sm">
                                                    <option value="9">1</option>
                                                    <option value="10">2</option>                                        
                                                    <option value="11">3</option>
                                                    <option value="12">4</option>
                                                    <option value="13">5</option>
                                                    <option value="14">6</option>                                       
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat66"  value="66">
                                                        Fisica, Quimica
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur66[]" class="form-control input-sm">
                                                    <option value="9">1</option>
                                                    <option value="10">2</option>                                        
                                                    <option value="11">3</option>
                                                    <option value="12">4</option>
                                                    <option value="13">5</option>
                                                    <option value="14">6</option>                                        
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><div class="checkbox ">
                                                    <label>
                                                        <input type="checkbox" name="mat70"  value="70">
                                                        Valores Espiritualidad y Religiones
                                                    </label>
                                                </div></td>
                                            <td><select multiple name="cur70[]" class="form-control input-sm">
                                                    <option value="9">1</option>
                                                    <option value="10">2</option>                                        
                                                    <option value="11">3</option>
                                                    <option value="12">4</option>
                                                    <option value="13">5</option>
                                                    <option value="14">6</option>
                                                </select></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- *********** TALLER *********** -->
                            <div role="tabpanel" class="tab-pane" id="m4">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="checkbox">
                                            </span>
                                            <input type="text" class="form-control" aria-label="Materia1 Seccion 1" value="Materia1 Seccion 1" disabled="true">
                                        </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                                </div>
                            </div>
                        </div>
                        <input class="DocId" id="DocId" name="DocId" value="" hidden="true">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="saveDoc">Guardar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <!-- /.content -->

</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    {!! Html::footer('siscccConfig.pie') !!}
</footer>
@endsection

@section('menu-configuracion')
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home">1</i></a></li>      
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Actividades Recientes</h3>
        </div>
    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
@endsection	
