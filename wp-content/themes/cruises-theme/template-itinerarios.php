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
                                  <input type="text" ng-change="filterbyDate()" class="dropdown dropdown-itenerario form-control" datepicker-popup="{{format}}" ng-model="dt" is-open="opened" min-date="minDate" max-date="" datepicker-options="dateOptions" date-disabled="disabled(date, mode)" ng-required="true" close-text="Close" />
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

<script>
                  angular.module('itinerarios', ['ui.bootstrap']);
                  angular.module('itinerarios').controller('itinerarioController', function ($scope,$filter) {   
                      
                  $scope.itinerarioss = [];
                  $scope.barcos = [];
                  $scope.selectedBarco = "Todos";             
                  $scope.barcos.push({"nombre":"Todos"});               
                  <?php getItinerariosBarcos(); ?>
                  
                  $scope.destinos = [];
                  $scope.selectedDestino = "Todos";             
                  $scope.destinos.push({"nombre":"Todos"});               
                  <?php getItinerariosDestinos(); ?>
                      
                 <?php getListaItinerarios(); ?>
                      
                  $scope.paginatedItinerarios = {};
                  $scope.filteredItinerarios = $scope.itinerarioss;     
                  
                  $scope.totalItems = 3;
                  $scope.currentPage = 1;
                  $scope.itemsPage = 12;
                  $scope.maxSize = 5;   
                  $scope.dt = Date.now();
                  $scope.selectedDate = '';
                      
                  $scope.open = function($event) {
                    $event.preventDefault();
                    $event.stopPropagation();

                    $scope.opened = true;
                  };

                  $scope.dateOptions = {
                    formatYear: 'yy',
                    startingDay: 1
                  };

                  $scope.formats = ['dd-MM-yyyy'];
                  $scope.format = $scope.formats[0];

                  $scope.totalItems = $scope.bigCount;
                  
                  $scope.getFilteredItinerarios = function(){
                  
                      $scope.filteredItinerarios = [];   
                      count = 0;
                      
                      
                      angular.forEach($scope.itinerarioss, function(itinerario){
                                               
                            if($scope.selectedBarco == 'Todos' || itinerario.barco == $scope.selectedBarco) {
                                if($scope.selectedDestino == 'Todos'|| itinerario.destino == $scope.selectedDestino){
                                    
                                     $valid = 0;
                                    
                                     angular.forEach(itinerario.fechas, function(fecha){
                                         
                                        console.log(fecha.fecha);
                                        console.log($scope.selectedDate);
                                                              
                                        if($scope.selectedDate == 'undefined' ||  $scope.selectedDate == '0001-01-01' || $scope.selectedDate == ''  || fecha.fecha >= $scope.selectedDate){

                                            $valid = 1;
                                        }         
                                          
                                    });
                                    
                                    if ($valid == 1){
                                        $scope.filteredItinerarios.push(itinerario);
                                        count =  count +1; 
                                    }
                                }
                            }
         
                        });
                        totalItems = count;                      
                      
                    };
   
                      
               $scope.clearFilter = function(clickedBarco) {
                    $scope.selectedBarco = "Todos";
                    $scope.selectedDestino = "Todos";
                    $scope.selectedDate = '';
                    $scope.filteredItinerarios = $scope.itinerarioss;
                       
                };           
                      
               $scope.filterbyBarcos = function(clickedBarco) {
                    $scope.selectedBarco = clickedBarco;
                    $scope.getFilteredItinerarios();
                       
                };
                      
                      
                      
                $scope.filterbyDestinos = function(clickedDestino) {
                    $scope.selectedDestino = clickedDestino;
                    $scope.getFilteredItinerarios();
                };
                      
                      
                $scope.filterbyDate = function() {
                    $scope.selectedDate = $filter('date')($scope.dt, "yyyy-MM-dd");
                    $scope.getFilteredItinerarios();
                    
                };
                      
                  $scope.setPage = function (pageNo) {
                    $scope.currentPage = pageNo;
                  };
                      
                  $scope.$watch('currentPage + filteredItinerarios', function() {
                        var begin = (($scope.currentPage - 1) * $scope.itemsPage)
                        , end = begin + $scope.itemsPage;

                        $scope.paginatedItinerarios = $scope.filteredItinerarios.slice(begin, end);
                  });    
                

    
                });

        
        </script> 
