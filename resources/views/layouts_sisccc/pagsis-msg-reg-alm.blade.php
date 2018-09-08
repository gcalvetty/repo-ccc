@if (session('status'))
<div class="container menGECN">
    <div class="col-md-6 col-xs-offset-3">
        <div class="panel panel-success row">
            <div class="panel-heading">
                <h3><i aria-hidden="true" class="fa fa-graduation-cap fa-x5"> Se registro al Alumn@</i></h3>
            </div>
            <div class="panel-body">
                <div class="col-md-12" style="text-align: center;">                    
                    <h4> <b>{{ session('nombre') }}</b> </h4>
                </div>                
                <h5>¿Que desea Realizar?</h5>
                <div class="col-md-6">
                    
                    <a href="{{ route('impr.alumno', ['alumno' => session('alumno')]) }}" target="_blank">
                        <button type="button" class="btn btn-primary" >
                            <i class="fa fa-print fa-2x" aria-hidden="true"></i> Imprimir <b>RUDE!!!</b>
                        </button>
                    </a>
                </div>
                <div class="col-md-6">            
                    <a href="{{ route('inscr-ccc') }}" target="_blank" >
                        <button type="button" class="btn btn-success" >
                            <i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i> Registrar <b>Otro Estudiante !!!</b>
                        </button>
                    </a>
                </div>
            </div>
        </div>    
    </div>
</div>
@endif 
