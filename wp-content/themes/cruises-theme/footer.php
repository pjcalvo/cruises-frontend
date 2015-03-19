        <!--footer-->
        <?php get_template_part( 'partials/-reservaciones', 'page' ); ?>
        <?php get_template_part( 'partials/-reserve', 'page' ); ?>
		<footer>
			<div class="upper-footer extended">
                <div class="container-fluid">
                    <div class="footer-content col-xs-5">
                        <img src="/img/icons/icon-location.png">
                        <p>100 Este, 25 Sur</br>
                     del Banco Popular Contiguo Banco Cathay,</br>
                    San Pedro de Montes de Oca, San José,</br>
                    Costa Rica.
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
                            <li><a class="facebook" href="https://www.facebook.com/RoyalCaribbeanCentroamerica"></a></li>
                            <li class="twitter"><a href="http://twitter.com/royalcari"></a></li>
                            <li class="instagram"><a href="http://instagram.com/royalcari_centroamerica/"></a></li>                        
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
            $('.carousel-news').carousel({
                interval: 1000
            });
            $('.carousel-hero').carousel({
                interval: 3000
            });
            
        </script>

        <script src="/js/scripts.min.js"></script>
</html>