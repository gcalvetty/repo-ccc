<section class="content editarRegAlm">        
        <div class="row ">
            <div  class="container inscripcion inscrForm col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">Formulario [@yield('titulo')]</div> 
                    <div class="panel-body">
                        @include('layouts_sisccc/pagsis-msg-reg-alm')
                        @include('layouts_sisccc/pagsis-error')            
                        @include('layouts_sisccc/pagsis-vue-data')
                        <div id="app" class="container-fluid"> 
                            <form v-on:submit="validateBeforeSubmit" class="form-horizontal" role="form" method="PUT" action="{{ route('rude-d.update', ['alumno' => $Alumno->user_id]) }}">
                                {{ csrf_field() }}
                                @include('layouts_sisccc.partials.pagsis_edit_rude')                   
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
        </div>


    </section>

<button class="btn btn-primary" type="submit">
    <i class="fa fa-floppy-o" aria-hidden="true"></i>
    Guardar
</button>