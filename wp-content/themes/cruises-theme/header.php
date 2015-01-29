<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>GSA - Cruceros </title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/main.min.css">

		<!--[if lt IE 9]>
			<script src="js/vendor/respond.js"></script>
			<script src="js/vendor/html5shiv.js"></script>
		<![endif]-->
        
        
        <!--javscript-->
        <script
                src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
        </script>
        <script src="/js/vendor/angular.js"></script>
        <script src="/js/vendor/jquery-1.11.1.js"></script>
        <script src="/js/vendor/bootstrap.js"></script>
        <script src="/js/vendor/ui-bootstrap-tpls-0.11.2.js"></script>


        <script>
            angular.module('contactApp', [])
             .controller('contactController', function($scope) {
                    $scope.adults='3';
                    $scope.children='0';
                
                    $scope.updateAdults = function($adultsupdate) {
                         console.log($adultsupdate);
                         $scope.adults = $adultsupdate;
                        
                    };
                    
                    $scope.updateChildren = function($childrenupdate) {
                         console.log($childrenupdate);
                         $scope.children = $childrenupdate;
                        
                    };
                            
             });         
        </script>
        
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
                      
                      
                  $scope.filterBarcos = function(empresa) {
                    
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
        
        <script>
                  angular.module('itinerarios', ['ui.bootstrap']);
                  angular.module('itinerarios').controller('itinerarioController', function ($scope) {   
                      
                  $scope.itinerarioss = [];
                  $scope.barcos = [];
                  $scope.selectedBarco = "Todos";             
                  $scope.barcos.push({"nombre":"Todos"});               
                  <?php getItinerariosBarcos(); ?>
                  
                  $scope.destinos = [];
                  $scope.selectedDestino = "Todos";             
                  $scope.destinos.push({"nombre":"Todos"});               
                  <?php getItinerariosDestinos(); ?>
                      
                  $scope.selectedDate = "0001-01-01";
                      
                 <?php getListaItinerarios(); ?>
                      
                  $scope.paginatedItinerarios = {};
                  $scope.filteredItinerarios = $scope.itinerarioss;     
                  
                  $scope.totalItems = 3;
                  $scope.currentPage = 1;
                  $scope.itemsPage = 12;
                  $scope.maxSize = 5;   
                  
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
                                                              
                                        if($scope.selectedDate == 'undefined'  || $scope.selectedDate == ''  || fecha.fecha == $scope.selectedDate){

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
   
                      
                      
               $scope.filterbyBarcos = function(clickedBarco) {
                    $scope.selectedBarco = clickedBarco;
                    $scope.getFilteredItinerarios();
                       
                };
                      
                $scope.filterbyDestinos = function(clickedDestino) {
                    $scope.selectedDestino = clickedDestino;
                    $scope.getFilteredItinerarios();
                };
                      
                      
                $scope.filterbyDate = function() {
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
        
        <!--<script>
            
            $(window).scroll(function () {
                if( $(window).scrollTop() > 0   ){
                    $('header').addClass('posi');
                
                
            }else if ($(window).scrollTop() <= 0){
                    $('header').removeClass('posi');
            }}
            );
        
        </script>-->
        
	</head>
	<body>
		<header>
            <div class="fixed-header">
			<div class="container-fluid top-head">
                    <ul>
						<li><img src="/img/logo-cruceros.png" alt="Cruseros"></li>
					</ul>
                    <p class="countries">Costa Rica - Nicaragua - Honduras - El Salvador - Belice - IR</p>
			</div>			
				<div id= "menu-header" class="header-container extended">
                    <div class="container-fluid navbar-container">
                    <?php
                        if (has_nav_menu('primary_navigation')) : wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'menu'));
                        endif;
                    ?>
					<!--<ul>
						<li><a href="#">INICIO</a></li>
						<li><a href="#">NOSOTROS</a></li>
						<li><a href="#">BARCOS</a></li>
						<li><a href="#">DESTINOS</a></li>
						<li><a href="#">ESPECIALES</a></li>
                        <li><a href="#">ESCAPADAS</a></li>
                        <li><a href="#">CONTÁCTENOS</a></li>
					</ul>-->
				</div>
			</div>
            </div>
		</header>