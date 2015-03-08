        <!--footer-->
        <?php get_template_part( 'partials/-reservaciones', 'page' ); ?>
        <?php get_template_part( 'partials/-reserve', 'page' ); ?>
		<footer>
			<div class="upper-footer extended">
                <div class="container-fluid">
                    <div class="footer-content col-xs-5">
                        <img src="/img/icons/icon-location.png">
                        <p>100 Este, 25 Sur</br>
                    Banco Popular Contiguo Banco Cathay</br>
                    San Pedro de Montes de Oca San José</br>
                    Costa Rica
                        </p> 
                    </div>
                    <div class="footer-content col-xs-4">
                        <img src="/img/icons/icon-phone.png">
                        <p>(506) 2234-1818</br></br></p> 
                        <img src="/img/icons/icon-email.png">
<a href="mailto:info@crucero.com?Subject=Consulta%20a%20ViajeCrucero" target="_top"><p>info@crucero.com</p></a> 
                    </div>
                    <div class="footer-content col-xs-3">
                        <img src="/img/icons/icon-phone2.png">
                        <p>(506) 2283-7878</br></br></p>
                        <ul>Siganos en:
                            <li><a class="facebook" href="http://facebook.com"></a></li>
                            <li class="twitter"><a href="http://twitter.com"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bottom-footer extended">
                <div class="companies-area container-fluid">
                    <ul>
                        <li class="company1">
                            <a href=""></a>
                        </li>
                        <li class="company2">
                            <a href=""></a>
                        </li>
                        <li class="company3">
                            <a href=""></a>
                        </li>
                        <li class="company4">
                            <a href=""></a>
                        </li>            
                    </ul>
                </div>
            </div>
		</footer>
	</body>

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
                                                              
                                        if($scope.selectedDate == 'undefined' ||  $scope.selectedDate == '0001-01-01' || $scope.selectedDate == ''  || fecha.fecha == $scope.selectedDate){

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
        

            <script>
            $('.carousel-news').carousel({
                interval: 1000
            });
            $('.carousel-hero').carousel({
                interval: 3000
            });
            
        </script>

        <script src="/js/scripts.min.js"></script>
</html>