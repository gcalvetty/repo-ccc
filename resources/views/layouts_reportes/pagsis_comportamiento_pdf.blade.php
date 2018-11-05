@extends('layouts_sisccc.pagsis_pdf')
@section('titulo','Reporte')	

@section('sis_contenido')
<div class="container">
    <section class="cabeceraRepo row">        
        <table>
            <tr>
                <td class="logoRepo col-md-3">
                    <img src="{{ asset('imagenes/logo-ccc.png') }}">                                        
                </td>
                <td class="col-md-9" style="text-align: center;"> 
                    <h2>Reporte de Comportamiento</h2>
                </td>
            </tr>
        </table>
    </section>

    <section class="cuerpoRepo row">
        <div class="panel panel-success">        
            <div class="panel-heading"><h3><b>{{ $alumno}}</b></h3></div>
            <div class="panel-body">                           
                <table class="table table-condensed table-hover table-striped">
                    <thead>
                        <tr>                            
                            <th>Tarjeta</th>
                            <th>Fecha</th>                    
                            <th>Comportamiento</th>
                            <th>Observación</th>                                
                        </tr>
                    </thead>
                    <tbody>
                        {{ $cont=0 }}
                        @foreach($comp as $Alumno)
                        <?php                        
                        $tipTar = "";
                        $tipMen = "";
                        switch ($Alumno->tiptarj) {
                            case "Sin Tarjeta":
                                $tipMem = "Sin Tarjeta";
                                $tipTar = "success";
                                break;
                            case "Tarjeta Blanca":
                                $tipMem = "Tarjeta Blanca";
                                $tipTar = "info";
                                break;
                            case "Tarjeta Amarilla":
                                $tipMem = "Tarjeta Amarilla";
                                $tipTar = "warning";
                                break;
                            case "Tarjeta Roja":
                                $tipMem = "Tarjeta Roja";
                                $tipTar = "danger";
                                break;
                        }
                        ?>
                        <tr class="{{ $tipTar }}" role="alert">                                                                                                                                                                             
                            <td class="col-md-4">
                                <div class="alert-{{ $tipTar }}" role="alert">
                                    <b>{{ $tipMem }}</b>
                                </div>
                            </td>
                            <td class="col-md-2">                        
                                {{ sis_ccc\libreriaCCC\fncCCC::getDateAttribute($Alumno->fec) }}
                            </td>                                          
                            <td class="col-md-2" style="text-align:left;">
                                {{ $Alumno->tipcomp }}</td>                                        
                            <td class="col-md-4 text-md-justify">{{ strip_tags($Alumno->obser) }}</td>
                        </tr>
                        @endforeach                                  
                    </tbody>                 
                </table> 
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">

</footer>
@endsection
