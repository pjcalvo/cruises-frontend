<?php
/*
 Template Name: Pagina Detalle Naviera
*/
?>

<?php 
    get_template_part( 'header-scripts', 'page' ); 
    $theTitle = get_the_title();
?>
    <header>
            <div class="fixed-header">
			     <div class="container-fluid">
                    <?php echo "<img class=\"col-xs-3\" src=\"" .(types_render_field("logo-naviera", array("raw"=>"false", "url"=>"true"))) . "\">"?>
                     <div class="banner-reserve"><?php get_template_part( 'partials/-reserve-button-short', 'page' ); ?></div>
                     <img class= "gsa-logo-naviera" src="/img/logo-gsa.png">
			     </div>			
				 <div id= "menu-header" class="header-container extended">
                    <div class="container-fluid navbar-container">
                    <?php
                        if (has_nav_menu('primary_navigation')) : wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'menu'));
                        endif;
                    ?>
				</div>
			</div>
        </div>
    </header>
    
    <section class="content">
            <?php echo "<h4 class=\"text-center\">" . $theTitle . "</h4>";?>
     </section>

    <section class="content extended">       
            <div class="container-fluid">      
        <div id="carousel-hero-naviera" class="carousel slide carousel-custom" data-ride="carousel">
                    
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <a class="col-xs-12 carousel-control" role="button">
                    </a>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner heigh100">
                   
                      <?php getPromocionesSlider($theTitle); ?>
                   
                  </div>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-hero-naviera" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-hero-naviera" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div> <!-- Carousel -->
            </div>
      </section> 

<section class="content">
    <hr class="hr-blue-no-margin"> 
</section>
        
     <section class="content">
            <div id="promociones-home" class="extended promociones-naviera">
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
    <hr class="hr-blue-no-margin"> 
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
                  $scope.itemsPage = 3;
                  $scope.maxSize = 10;
                      
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