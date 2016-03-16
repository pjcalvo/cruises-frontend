<?php
/*
 Template Name: Pagina Detalle Naviera
*/
?>

<?php 
    get_template_part( 'header', 'page' ); 
    $theTitle = get_the_title();
?>
    <section class="content">
            <?php echo "<div id=\"barcos-hero\" class=\"extended sub-hero\" style=\"background-image:url('". (types_render_field("imagen-banner", array("raw"=>"false", "url"=>"true"))) ."')\">"; ?> 
                <div class="container-fluid">
                    <?php echo "<h1>". $theTitle . "</h1>" ?>
                           <?php get_template_part( 'partials/-reserve-button', 'page' ); ?>  
                </div>
            </div>                     
     </section>
        
     <section class="content">
            <div id="promociones-home" class="extended">
                <div class="container-fluid">
                    <h1>PROMOCIONES</h1>
                    <div class="col-xs-10 detail"> 
                        <p></p>
                    </div>
                    <div class="promociones">
                        <?php getPromocionesHome($theTitle); ?>
                    </div>
                </div>
            </div>            
</section>

<section class="content" id="nuestraFlota">
    <hr style="border-bottom: 5px solid #0073bb;"> 
</section>
    
    <section class="content">
            <div id="barcos-content" class="extended" ng-app="naviera" ng-controller="navieraController">
                <div class="container-fluid">
                    <h1 >NUESTRA FLOTA</h1>
                    <p class="multi-line"><?php getPageContent(); ?>
                    </p>
                    <div id="barcos-lista">
                        <div class="barco-detalle" ng-repeat="barco in paginatedBarcos">
                            <div class="imagen-crucero" >
                                <img ng-src="{{barco.imagen}}"/>
                            </div>
                            <div class="crucero-detalle">
                                <h4>{{barco.nombre}}<sup>&#174;</sup></h4>
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
               angular.module('naviera', ['ui.bootstrap']);
                  angular.module('naviera').controller('navieraController', function ($scope) {   
                      
                  $scope.barcoss = [];       
                  <?php echo getListaBarcos($theTitle); ?>
                      
                  $scope.paginatedBarcos = {};
                  $scope.filteredBarcos = $scope.barcoss;     
                  
                  $scope.totalItems = $scope.bigCount;
                  $scope.currentPage = 1;
                  $scope.itemsPage = 5;
                  $scope.maxSize = 5;
                      
                  $scope.firstTime =true;
                      
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
                        
                        if ($scope.firstTime == true){ 
                            $scope.firstTime = false;
                        }
                      else{
                        document.getElementById('nuestraFlota').scrollIntoView();
                      }
                  });   
    
                });

        
        </script>