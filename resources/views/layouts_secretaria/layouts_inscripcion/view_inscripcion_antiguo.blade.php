@extends('layouts_sisccc.paginscr_bus_antiguo')

<!-- Main Content -->
@section('sis_contenido')

<div class="container inscrForm">
    @include('layouts_sisccc/pagsis-msg-reg-alm')
    @include('layouts_sisccc/pagsis-error')            
    @include('layouts_sisccc/pagsis-vue-data')    
    @if (!session('status'))
    <div class="panel panel-success">
        <div class="panel-heading"><i class="fa fa-file-text fa-2x" aria-hidden="true"></i> Buscar Alumno</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Lista de Alumnos</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Curso</th>
                                        <th>Paralelo</th>
                                        <th>Apellido Paterno</th>  
                                        <th>Apellido Materno</th>  
                                        <th>Nombre</th>  
                                        <th>Inscribir</th>                                                                              
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Lista as $Alumno)
                                    <tr>
                                        <td>{{ $Alumno->id }}</td>  
                                        <td>{{ $Alumno->curso }}</td>
                                        <td>{{ $Alumno->aula }}</td>
                                        <td><b>{{ $Alumno->ape_paterno }}</b></td>
                                        <td><b>{{ $Alumno->ape_materno }}</b></td>
                                        <td>{{ $Alumno->nombre }}
                                            <br><b>Usuario:</b> {{ $Alumno->email }}
                                            <br><b>Contraseña:</b> cccedu
                                        </td>                                        
                                        <td style="text-aling:center">
                                            <a href="{{ route('rude-ins.edit', ['alumno' => $Alumno->id]) }}"><i class="fa fa-pencil-square-o   fa-lg" aria-hidden="true"></i></a>
                                        </td>    
                                    </tr>
                                    @endforeach  

                                    </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
    @endif
</div>

@endsection