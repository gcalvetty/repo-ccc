@extends('layouts_sisccc.pagsis_contador')
@section('titulo','Contador')
@section('usuccc')
{{ $usuactivo }}
@endsection
@section('usuico')
    <i class="fa fa-cubes fa-2x"></i>
@endsection
@section('usuico-peq')
    <i class="fa fa-cubes fa-lg"></i>
@endsection

@section('sis_menu_lateral')
@include('layouts_contador.partials.menu')
@endsection


@section('sis_contenido')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">    	
    <!-- Content Header (Page header) -->
    <section class="content-header">      
        <h1>
            Escritorio:
            <small>Bienvenido!!!</small>
        </h1>
        {!! Breadcrumbs::render() !!}
    </section>    

    <section class="content">
        
        <div id="contador_crud" class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Alumnos Inscritos</h3>                        
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        
                        <!-- component template -->
                        <script type="text/x-template" id="grid-template">
                          <table>
                            <thead>
                              <tr>
                                <th v-for="alumn in columns"
                                  v-on:click="sortBy(alumn)"
                                  v-bind:class="{ active: sortKey == alumn }">
                                  @{{ alumn }}
                                  <span class="arrow" v-bind:class="sortOrders[alumn] > 0 ? 'asc' : 'dsc'">
                                  </span>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr v-for="entry in filteredData">
                                <td v-for="alumn in columns">
                                  @{{entry[alumn]}}
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </script>

                        <!-- demo root element -->
                        <div id="demo">
                          <form id="search">
                            Search <input name="query" v-model="searchQuery">
                          </form>
                          <demo-grid
                            v-bind:data="listado"
                            v-bind:columns="gridColumns"
                            v-bind:filter-key="searchQuery">
                          </demo-grid>
                        </div>


                        
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-xs-12">
                <pre>
                    @{{ $data.listado }}
                </pre>
                
            </div>
        </div>
        <!-- /.row -->
    </section>


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
