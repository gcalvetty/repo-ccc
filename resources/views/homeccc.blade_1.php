<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- CSRF Token -->
        
        <!-- Favicon -->        
        <link rel="apple-touch-icon" sizes="76x76" href="/imagenes/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/imagenes/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/imagenes/favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/imagenes/favicon/manifest.json">
        <link rel="mask-icon" href="/imagenes/favicon/safari-pinned-tab.svg" color="#385c27">
        <meta name="msapplication-TileColor" content="#7cba5f">
        <meta name="theme-color" content="#7cba5f">
        <meta name="google-site-verification" content="TMCJ84VbGNP_H5cHT4uBHnMKj0lKeK0yYNPNw1wBgXU" />
        <title>{{ config('app.name', 'CCC-SIS') }}</title>
        
        <!-- Styles -->
        <link href="/dist/css/AdminLTE.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/sisccc.css" rel="stylesheet">     
                  
        
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
        </script>
    </head>
    <body>
      <div class="navbar-wrapper">
          <div class="container">
            {!! Html::menuHome() !!}  
          </div>
      </div>
     
      <!-- Mi Carousel -->
      <div id="myCarousel" class="carousel slide visible-sm-block visible-md-block visible-lg-block" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>            
          </ol>
          <div class="carousel-inner" role="listbox">            
            <div class="item active">
              <img class="second-slide" src="/imagenes/banner-inscripcion/pre2.jpg" alt="Pre-Inscripción Taller">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Iniciamos Inscripciones</h1>
                  <p>Recibimos Solicitud de pre-inscripciones para Taller Inicial</p>
                  <p><a class="btn btn-lg btn-primary" href="/inscripcion/" role="button">Reserva de Inscripción</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <img class="third-slide" src="/imagenes/banner-inscripcion/pre1.jpg" alt="Pre-Inscripción Primaria Secundaria">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Iniciamos Inscripciones</h1>
                  <p>Recibimos Solicitud pre-Inscripción A nuestra unidad educativa</p>
                  <p><a class="btn btn-lg btn-primary" href="/inscripcion/" role="button">Reserva de Inscripción</a></p>
                </div>
              </div>
            </div>
          </div>          
        </div> 
        <!-- Informacion para cel. peq-->
        <div class="container visible-xs-block inscripcion">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="/imagenes/banner-inscripcion/pre2.jpg" alt="Pre-Inscripción">
                      <div class="caption">
                        <h4>Iniciamos Inscripciones</h4>
                        <p>Recibimos Solicitud pre-Inscripción A nuestra unidad educativa</p>
                        <p><a class="btn btn-lg btn-primary" href="/inscripcion/" role="button">Reserva de Inscripción</a></p>
                      </div>
                    </div>
                  </div>
        </div>
        
        <div class="container ns panel-body">
        	<div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="thumbnail">
                      <img src="/imagenes/home/opc-01.jpg" alt="">
                      <div class="ico-opc">                      
                        <i class="fa fa-graduation-cap fa-5x"></i>
                      </div>
                      <div class="small-box bg-aqua">
                        <div class="inner">
                          <h2><i class="fa fa-quote-left"></i> Plantel <span class="titRes">Educativo</span></h2>
                        </div>
                        <a href="/estudiante" class="small-box-footer">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="thumbnail">
                      <img src="/imagenes/home/opc-02.jpg" alt="">
                      <div class="ico-opc">
                        <i class="fa fa-id-card-o  fa-5x"></i>
                      </div>
                      <div class="small-box bg-aqua">
                        <div class="inner">
                          <h2><i class="fa fa-quote-left"></i> Plantel  <span class="titRes">Docente</span></h2>
                        </div>                    
                        <a href="/profesor" class="small-box-footer">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                 </div>
           </div><!-- /row -->            
           <hr/> 
           <div class="row sub_opc">
           		<div class="col-md-4 col-xs-12">
                	<div class="info-box bg-green sel1">
           				<span class="info-box-icon">
                        	<i class="fa fa-desktop"></i>
                        </span>
                        <div class="info-box-content">
                          	<a href="/administracion">Plantel<br/>Administrativo</a>
                        </div>
                       
		        	</div>
                </div>
           		<div class="col-md-4 col-xs-12">
                	<div class="info-box sel2">
           				<span class="info-box-icon">
                        	<i class="fa fa-skyatlas"></i>
                        </span>
                        <div class="info-box-content">                          
                          	<a href="/direccion/">Plantel<br/>Directivo</a>
                        </div>
		        	</div>
                </div>
           		<div class="col-md-4 col-xs-12">
                	<div class="info-box sel3">
           				<span class="info-box-icon">
                        	<i class="fa fa-cubes"></i>
                        </span>
                        <div class="info-box-content">                          
                          <ul>
                            <li><a href="contador/">
                                <i class="fa fa-modx"></i> 
                                Contador</a></li>
                            <li><a href="secretaria/">
                                <i class="fa fa-puzzle-piece"></i> 
                                Secretraría</a></li>
                            <li><a href="regente/">
                                <i class="fa fa-binoculars"></i> 
                                Regente</a></li>
                          </ul>
                        </div>
		        	</div>
                 </div>
           </div><!-- /row -->
       	</div><!-- Container -->  
        <footer class="container footer">
        	<div class="row ">
            	<div class="col-md-9 izq">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        &copy; <b>Sistema Educativo</b> - "{{ config('app.name', 'CCC-SIS') }}" - Todos los derechos reservados.
                      </div>
                    </div>
              	</div>  
                
                <div class="col-md-3 der">
                    <div class="panel panel-default">
                      <div class="panel-body">
                     	<a class="btn btn-social-icon btn-vk" href="http://ccc.edu.bo/" target="_blank"><i class="fa fa-vk"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/ColegioCristianoColcapirhuaOficial/" target="_blank"><i class="fa fa-facebook"></i></a>                
                      </div>
                    </div>
              	</div>
                
                
                
           	</div><!-- /row -->
       	</footer><!-- Container -->  
        <!-- Scripts -->
        <script src="/js/app.js"></script> 
        <!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '99KCGJJr6c';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->   
    </body>
</html>
