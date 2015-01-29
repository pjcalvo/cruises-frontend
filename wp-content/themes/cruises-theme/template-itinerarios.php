<?php
/*
 Template Name: Pagina Itinerarios
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
    <section class="content">
            <div id="itinerarios-hero" class="extended sub-hero">
                <div class="container-fluid">
                    <h1>ITINERARIOS</h1>
                           <?php get_template_part( 'partials/-reserve-button', 'page' ); ?>  
                </div>
            </div>                     
     </section>
        

    <section class="content">
            <div id="itinerarios-content" class="extended" ng-app="itinerarios" ng-controller="itinerarioController">
                <div class="container-fluid">
                    <h1>EXPLORA NUESTROS DESTINOS</h1>
                    <p class="multi-line"><?php getPageContent(); ?>
                    </p>
                    <div id="itinerario-categorias">
                        <h3>CRUCEROS</h3>
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle dropdown-itinerario" type="button" id="dropdown-barcos" data-toggle="menu">
                            <span ng-bind="selectedBarco"></span>
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-itin">
                            <li role="presentation" ng-repeat="barco in barcos"><a role="menuitem" tabindex="-1" ng-click="filterbyBarcos(barco.nombre)">{{barco.nombre}}</a></li>
                          </ul>
                        </div>
                        <h3>DESTINO</h3>
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle dropdown-itinerario" type="button" id="dropdown-destinos" data-toggle="menu">
                            <span ng-bind="selectedDestino"></span>
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-destinos">
                            <li role="presentation" ng-repeat="destino in destinos"><a role="menuitem" tabindex="-1" ng-click="filterbyDestinos(destino.nombre)">{{destino.nombre}}</a></li>
                          </ul>
                        </div>
                        <h3><input class="text-field" type= "date" id="fechasalida" placeholder="" ng-change="filterbyDate()" ng-model="selectedDate"/>    </h3>
                    </div>
                    <div id="itinerarios-lista">
                            <div class="itinerario-detalle" ng-repeat= "itinerario in filteredItinerarios">
                                <div class="itinerario-texto">
                                    <h4><span ng-bind="itinerario.nombre"></span></h4>
                                    <p><span ng-bind="itinerario.detalle"></p>
                                    <a class ="btn-primary" href="{{itinerario.link}}">
                                        <strong>LEER MAS</strong>
                                    </a>
                                    <a class ="btn-primary" href="" data-toggle="modal" data-target="#myModal">
                                        HAGA SUS <strong>RESERVACIONES</strong>
                                    </a>
                                </div>
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
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php get_template_part( 'partials/-reserve', 'page' ); ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>
