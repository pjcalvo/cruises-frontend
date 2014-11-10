<?php
/*
 Template Name: Pagina Detalles de Barco
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
                  
                  $scope.totalItems = 12;
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
<div ng-app="barco" ng-controller="barco-controller">    
    <section class="content">
            <div id="barco-hero" class="small-container">
                <div id="galeria-portada">
                    <img id = "imagen-portada" src="{{heroImage}}">
                </div>
                <div id= "todas-fotos">
                    <div class="imagenes-galeria left">
                        <div class="right">
                        <p>FOTOS INTERNAS</p>
                            <ul class="lista-fotos" >
                                <li ng-class="{active: heroImage == imagen.src}" class="item-foto" ng-repeat="imagen in imagenesInterior">
                                    <img ng-click="setHeroImage(imagen.src)" class="imagen-thumbnail" src="{{imagen.src}}">
                                </li>
                        
                            </ul>
                        </div>
                    </div>
                    <div class="imagenes-galeria right">
                        <p>FOTOS EXTERNAS</p>
                        <ul class="lista-fotos">
                            <li class="item-foto" ng-class="{active: heroImage == imagen.src}" ng-repeat="imagen in imagenesExterior">
                                <img ng-click= "setHeroImage(imagen.src)" class="imagen-thumbnail" src="{{imagen.src}}">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    <section class="content">
            <div id="barco-content" class="container-fluid">
               <div class="small-container">
                   <h1>{{name}}</h1>
                   <p>{{detalle}}</p>
                </div>
                <hr/>
                <h3 class="small-container">ESCOGE ENTRE NUESTROS DESTINOS</h3>
                <div id="lista-destinos-barco" class="small-container">
                    <div class="item-destino-barco col-xs-6">
                        <img src="/wp-content/uploads/2014/10/uruguay-300x188.png">
                        <h4>ROMA</h4>
                        <a class ="btn-primary" href="">
                                <strong>RESERVACIÓN</strong>
                        </a>
                        <a class ="btn-primary" href="">
                                <strong>DETALLES</strong>
                        </a>
                    </div>
                    <div class="item-destino-barco  col-xs-6">
                        <img src="/wp-content/uploads/2014/10/uruguay-300x188.png">
                        <h4>ROMA</h4>
                        <a class ="btn-primary" href="">
                                <strong>RESERVACIÓN</strong>
                        </a>
                        <a class ="btn-primary" href="">
                                <strong>DETALLES</strong>
                        </a>
                    </div>
                    <hr>
                    <div class="item-destino-barco  col-xs-6">
                        <img src="/wp-content/uploads/2014/10/uruguay-300x188.png">
                        <h4>ROMA</h4>
                        <a class ="btn-primary" href="">
                                <strong>RESERVACIÓN</strong>
                        </a>
                        <a class ="btn-primary" href="">
                                <strong>DETALLES</strong>
                        </a>
                    </div>
                    <hr>
                    <div >
                        Here goes the pagination component
                    </div>
                </div>
            </div>                     
     </section>
</div>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php get_template_part( 'partials/-reserve', 'page' ); ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>