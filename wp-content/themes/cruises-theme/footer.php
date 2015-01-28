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
                        <p>infos@cruceros.com</p>  
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
            $('.carousel-news').carousel({
                interval: 1000
            });
            $('.carousel-hero').carousel({
                interval: 3000
            });
            
        </script>

        <script src="/js/scripts.min.js"></script>
</html>