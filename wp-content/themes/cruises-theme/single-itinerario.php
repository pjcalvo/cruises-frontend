<?php
/*
 Template Name: Pagina Detalles de Itinerario
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
 <script>
                 
                  angular.module('barco', ['ui.bootstrap']);
                  angular.module('barco').controller('barco-controller', function ($scope) {   
                      
                  $scope.destinoss = []; 
                  $scope.destinosCount = 0;
                  $scope.imagesInterior = [];
                  $scope.imagesExterior = [];
                  $scope.name ="";
                  $scope.detalle ="";                                
                      
                  <?php getDatosBarco(); ?>      
                                       
                  $scope.paginatedDestinos = [];     
                  
                  $scope.currentPage = 1;
                  $scope.itemsPage = 6;
                  $scope.maxSize = 0;
                      
                      
                  $scope.setHeroImage = function($imagen) {
                      $scope.heroImage = $imagen;                     
                  };
                      
                  $scope.setPage = function (pageNo) {
                    $scope.currentPage = pageNo;
                  };
                      
                  $scope.$watch('currentPage + filteredBarcos', function() {
                        var begin = (($scope.currentPage - 1) * $scope.itemsPage)
                        , end = begin + $scope.itemsPage;

                        $scope.paginatedDestinos = $scope.destinoss.slice(begin, end);
                  });    
                

    
                });

        
    </script>
    <section class="content">
            <div id="itinerario-hero" class="small-container">
                
                <img id = "imagen-portada" src="/img/itinerario/caribe.png">
                <h1>CARIBE SUR</h1>
            </div>
    </section>

    <section class="content">
            <div id="itinerario-content" class="container-fluid">
               <div class="small-container">
                   <h1>CARIBE SUR, CRUCERO DE 7 NOCHES</h1>
                   <p class="">Nadie conoce el Caribe mejor que nosotros. Después de todo, es nuestro segundo nombre. Cuando se trata de playas hermosas y brillantes aguas azules, el Caribe realmente se encuentra en un nivel superior. Durante tus vacaciones en crucero viviras muchas aventuras.</p>
                   <a class ="btn-primary" href="/reservaciones/">
                                    RESERVAR <strong>AHORA</strong>
                    </a>
                </div>           
        </div>
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>