
<div class="container menGECN">
    <div class="col-md-6 col-xs-offset-3">
        <div class="panel panel-success row">
            <div class="panel-heading">
                <h3><i aria-hidden="true" class="fa fa-graduation-cap fa-x5"> Suscripción de Estudiantes</i></h3>
            </div>
            <div class="panel-body"> 
                <div class="col-md-6">

                    <a href="{{ route('inscr-ccc-nuevo') }}" target="_blank">
                        <button type="button" class="btn btn-primary" >
                            <i class="fa fa-plus fa-2x" aria-hidden="true"></i> Nuevo <b>Estudiante</b>
                        </button>
                    </a>
                </div>
                <div class="col-md-6">            
                    <a href="{{ route('inscr-ccc-ant') }}" target="_blank" >
                        <button type="button" class="btn btn-success" >
                            <i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i> Antiguo <b>Estudiante</b>
                        </button>
                    </a>
                </div>
            </div>
        </div> 


        <div class="panel panel-info row">
            <div class="panel-heading">
                <h3><i class="fa fa-address-book-o" aria-hidden="true"> Lista de Alumnos - Reportes - Descargar</i></h3>
            </div>
            <div class="panel-body"> 
                <div class="list-group">
                    <a href="{{ route('rep.alumnos', ['nivel' => 4]) }}" class="list-group-item">
                        <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> <b>Taller Inicial</b>
                    </a>
                    <a href="{{ route('rep.alumnos', ['nivel' => 1]) }}" class="list-group-item">                        
                        <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> <b>Inicial / Sección</b>
                    </a>
                    <a href="{{ route('rep.alumnos', ['nivel' => 2]) }}" class="list-group-item">
                        <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> <b>Primaria</b>
                    </a>
                    <a href="{{ route('rep.alumnos', ['nivel' => 3]) }}" class="list-group-item">
                        <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> <b>Secundaria</b>
                    </a>                    
                </div>
            </div>
        </div>
    </div>
</div>

