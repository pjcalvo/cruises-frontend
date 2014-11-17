<?php
/*
 Template Name: Pagina Barcos
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
    <section class="content">
            <div id="barcos-hero" class="extended sub-hero">
                <div class="container-fluid">
                    <h1>BARCOS</h1>
                    <a class ="btn-primary" href="">
                                APROVECHA <strong>RESERVA AHORA</strong>
                    </a>
                </div>
            </div>                     
     </section>
        

    <section class="content">
            <div id="barcos-content" class="extended" ng-app="barcos" ng-controller="barcoController">
                <div class="container-fluid">
                    <h1>NUESTRA FLOTA</h1>
                    <p>La belleza del destino no será lo único que te sorprenda en este viaje: ¡quedarás maravillado con el propio barco! 
                    Los cruceros de Royal Caribbean son los más innovadores y emocionantes de la industria del turismo. 
                    La experiencia a bordo es increíble, desde las paredes de escalada en cada barco hasta los elegantes comedores principales 
                    y relajantes spas. Y el servicio que recibas será igualmente sorprendente gracias a nuestra atención Gold Anchor Service ©, 
                    disponible en todos los barcos. 
                    </p>
                    <div id="barcos-categorias">
                        <h3>NUESTROS CRUCEROS</h3>
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdown-barcos" data-toggle="menu">
                            Todos
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-barcos">
                            <li role="presentation"><a role="menuitem" tabindex="-1" ng-click="filterBarcos('')">Todos</a></li>
                            <?php getEmpresasBarcos(); ?>
        
                          </ul>
                        </div>
                    </div>
                    <div id="barcos-lista">
                        <div class="barco-detalle" ng-repeat="barco in paginatedBarcos">
                            <div class="imagen-crucero">
                                <img src="{{barco.imagen}}"/>
                            </div>
                            <div class="crucero-detalle">
                                <h4> {{barco.nombre}}</h4>
                                <p ng-bind = "barco.detalle"></p>
                                <a class ="btn-primary" href="{{barco.link}}">
                                    LEER MAS
                                </a>
                            </div>
                        </div>
                        <pagination direction-links="false" 
                            boundary-links="true" 
                            total-items="totalItems"
                            items-per-page="itemsPage"
                            ng-model="currentPage"></pagination>
                        </div>
                    </div>
                </div>
            </div>                     
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php get_template_part( 'partials/-reserve', 'page' ); ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>
