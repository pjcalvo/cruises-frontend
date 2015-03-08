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
                        <div class="col-xs-3">
                            <h3>Barco</h3>
                            <div class="dropdown">
                              <button class="btn btn-default dropdown-toggle dropdown-itinerario" type="button" id="dropdown-barcos" data-toggle="menu">
                                <span ng-bind="selectedBarco"></span>
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-itin">
                                <li role="presentation" ng-repeat="barco in barcos"><a role="menuitem" tabindex="-1" ng-click="filterbyBarcos(barco.nombre)">{{barco.nombre}}</a></li>
                              </ul>
                            </div>
                        </div>  
                        <div class="col-xs-3">
                            <h3>Destino</h3>
                            <div class="dropdown">
                              <button class="btn btn-default dropdown-toggle dropdown-itinerario" type="button" id="dropdown-destinos" data-toggle="menu">
                                <span ng-bind="selectedDestino"></span>
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-destinos">
                                <li role="presentation" ng-repeat="destino in destinos"><a role="menuitem" tabindex="-1" ng-click="filterbyDestinos(destino.nombre)">{{destino.nombre}}</a></li>
                              </ul>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <h3>Fecha de Salida</h3>
                            <div><p class="input-group">
                                  <input type="text" ng-change="filterbyDate()" class="dropdown dropdown-itenerario form-control" datepicker-popup="{{format}}" ng-model="dt" is-open="opened" min-date="minDate" max-date="'2015-06-22'" datepicker-options="dateOptions" date-disabled="disabled(date, mode)" ng-required="true" close-text="Close" />
                                  <span class="input-group-btn">
                                    <button type="button" class="btn-calendar btn btn-default" ng-click="open($event)"><i class="glyphicon glyphicon-calendar"></i></button>
                                  </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-3 btn-limpiar">
                            <button type="button" class="btn" ng-click="clearFilter()">
                                Limpiar
                            </button>
                        </div>
                    </div>
                    <div id="itinerarios-lista">
                            <div class="itinerario-detalle" ng-repeat= "itinerario in paginatedItinerarios">
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
                    <div>
                        <p></br></br><strong>Todos los itinerarios están sujetos a cambio sin previo aviso. Confirma tu itinerario antes de comprar el crucero. </strong></p>
                    </div>
                </div>
            </div>                     
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>
