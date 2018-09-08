<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Alumnos Inscritos por Area - Gestión {{ $Gestion }}</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>                
        </div>
    </div>
    <div class="box-body">
        <div class="row AlmInsc">
            
            @foreach($CantAlm as $clave => $valor)
            @if($clave!="totalAlum")
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">                    
                    @if($clave=='seccion')
                    <span class="info-box-icon bg-green-active">
                        <i class="fa fa-sign-language" aria-hidden="true"></i>
                    </span>
                    @endif
                    @if($clave=='primaria')
                    <span class="info-box-icon bg-blue-active">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </span>
                    @endif
                    @if($clave=='secundaria')
                    <span class="info-box-icon bg-aqua-active">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </span>
                    @endif
                    @if($clave=='taller')
                    <span class="info-box-icon bg-maroon-active">
                        <i class="fa fa-child" aria-hidden="true"></i>
                    </span>
                    @endif 
                    @if($clave!='totalAlum')
                    <div class="info-box-content">
                        <span class="info-box-text tit_sec">{{ $clave }}</span>                  
                        @foreach($valor as $clav2 => $valor2)
                        <span class="info-box-text">
                            @if($clav2=='F')                        
                            <i class="fa fa-female SexF" aria-hidden="true"></i>{{ " : ".$valor2 }}
                            @endif
                            @if($clav2=='M')                        
                            <i class="fa fa-male SexM" aria-hidden="true"></i>{{ " : ".$valor2 }}
                            @endif
                            @if($clav2=='Total')                        
                            <div class="total">
                                {{ $valor2 }}
                            </div>    
                            @endif
                        </span>

                        @endforeach 
                    </div>
                    @endif
                </div>            
            </div>
            @endif
            @endforeach 
        </div>
    </div>
    <!-- /.box-body -->
</div>

