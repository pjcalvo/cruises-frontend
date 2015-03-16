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
                           <?php get_template_part( 'partials/-reserve-button', 'page' ); ?>  
                </div>
            </div>                     
     </section>
        

    <section class="content">
            <div id="barcos-content" class="extended" ng-app="barcos" ng-controller="barcoController">
                <div class="container-fluid">
                    <h1>NUESTRA FLOTA</h1>
                    <p class="multi-line"><?php getPageContent(); ?>
                    </p>
                    <div id="barcos-categorias">
                        <h3>NUESTROS CRUCEROS</h3>
                        <div class="companies-area container-fluid">
                            <ul>
                                <li ng-class="{active: empresa == 'Azamara Club Cruises'}" ng-click="filterBarcos('Azamara Club Cruises')" id="company1">
                                    <a href=""></a>
                                </li>
                                <li ng-class="{active: empresa == 'Celebrity Cruises'}" ng-click="filterBarcos('Celebrity Cruises')" id="company2">
                                    <a href=""></a>
                                </li>
                                <li ng-class="{active: empresa == 'Royal Caribbean'}" ng-click="filterBarcos('Royal Caribbean')" id="company3">
                                    <a href=""></a>
                                </li>
                                <li ng-class="{active: empresa == 'Pullmantur'}" ng-click="filterBarcos('Pullmantur')" id="company4">
                                    <a href=""></a>
                                </li>            
                            </ul>
                        </div>
                        <!--<div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdown-barcos" data-toggle="menu">
                            Todos
                            <span class="caret"></span>
                          </button>
                            
                            
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-barcos">
                            <li role="presentation"><a role="menuitem" tabindex="-1" ng-click="filterBarcos('')">Todos</a></li>
                            <?php getEmpresasBarcos(); ?>
                            
                          </ul>
                        </div>-->
                    </div>
                    <div id="barcos-lista">
                        <div class="barco-detalle" ng-repeat="barco in paginatedBarcos">
                            <div class="imagen-crucero" >
                                <img src="{{barco.imagen}}"/>
                            </div>
                            <div class="crucero-detalle">
                                <h4> {{barco.nombre}}<sup>&#174;</sup></h4>
                                <p ng-bind = "barco.detalle"></p>
                                <p class= "clase-barco" ng-hide = "barco.clase == ''"><strong>Clase: </strong>{{barco.clase}}</p>
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
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>

<script>
               angular.module('barcos', ['ui.bootstrap']);
                  angular.module('barcos').controller('barcoController', function ($scope) {   
                      
                  $scope.barcoss = [];       
                  <?php getListaBarcos(); ?>
                      
                  $scope.paginatedBarcos = {};
                  $scope.filteredBarcos = $scope.barcoss;     
                  
                  $scope.totalItems = $scope.bigCount;
                  $scope.currentPage = 1;
                  $scope.itemsPage = 10;
                  $scope.maxSize = 5;
                      
                  $scope.empresa = 'Todos';
                      
                      
                  $scope.filterBarcos = function(empresa) {
                      
                    $scope.empresa = empresa;  
                    
                    
                    if (empresa == '') {
                        $scope.filteredBarcos = $scope.barcoss;
                        $scope.totalItems = $scope.bigCount;
                    }
                      else{
                    
                        $scope.filteredBarcos = [];   
                        $count = 0;
                      
                        angular.forEach($scope.barcoss, function(barco){
    
                            if(barco.empresa == empresa) {
                                $scope.filteredBarcos.push(barco);
                                $count = $count + 1 ;
                            }
                            $scope.totalItems = $count;                      
                      
                            });
                      }
                  };
                      
                  $scope.setPage = function (pageNo) {
                    $scope.currentPage = pageNo;
                  };
                      
                  $scope.$watch('currentPage + filteredBarcos', function() {
                        var begin = (($scope.currentPage - 1) * $scope.itemsPage)
                        , end = begin + $scope.itemsPage;

                        $scope.paginatedBarcos = $scope.filteredBarcos.slice(begin, end);
                  });    
                

    
                });

        
        </script>