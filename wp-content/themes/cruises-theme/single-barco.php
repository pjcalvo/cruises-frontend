<?php
/*
 Template Name: Pagina Detalles de Barco
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
 
<div ng-app="barco" ng-controller="barco-controller">
    <section class="content">
            <div id="barco-hero" class="small-container">
                <div id="galeria-portada">
                    <img id = "imagen-portada" ng-src="{{heroImage}}">
                </div>
                <div id= "todas-fotos">
                    <div class="imagenes-galeria left-float">
                        <div>
                        <p class="right-float">FOTOS INTERNAS</p>
                            <ul class="lista-fotos right-float" >
                                <li ng-class="{active: heroImage == imagen.src}" class="item-foto" ng-repeat="imagen in imagenesInterior">
                                    <img ng-click="setHeroImage(imagen.src)" class="imagen-thumbnail" ng-src="{{imagen.src}}">
                                </li>
                        
                            </ul>
                        </div>
                    </div>
                    <div class="imagenes-galeria right-float">
                        <p>FOTOS EXTERNAS</p>
                        <ul class="lista-fotos">
                            <li class="item-foto" ng-class="{active: heroImage == imagen.src}" ng-repeat="imagen in imagenesExterior">
                                <img ng-click= "setHeroImage(imagen.src)" class="imagen-thumbnail" ng-src="{{imagen.src}}">
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
                   <p class="multi-line" ng-bind="detalle"></p>
                </div>
                <hr/>
                <h3 class="small-container">ESCOGE ENTRE NUESTROS DESTINOS</h3>
                <div id="lista-destinos-barco" class="small-container">
                    <div class="item-destino-barco col-xs-6" ng-repeat = "destino in paginatedDestinos">
                        
                        <img ng-src="{{destino.imagen}}">
                        <h4>{{destino.nombre}}</h4>
                        <a class ="btn-primary" href="" data-toggle="modal" data-target="#myModal">
                                <strong>RESERVACIÓN</strong>
                        </a>
                        <a class ="btn-primary" href="{{destino.link}}">
                                <strong>DETALLES</strong>
                        </a>
                    </div>
                </div>
                <hr>
                <div id ="pagination-barco" class="small-container">
                    <pagination direction-links="false" 
                            boundary-links="true" 
                            total-items="totalItems"
                            items-per-page="itemsPage"
                            ng-model="currentPage"></pagination>
                </div>    
            </div>                     
     </section>
</div>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>
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
