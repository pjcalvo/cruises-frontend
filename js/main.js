(function () {
	angular.module('destinosApp', [])
             .controller('destinosController', function($scope) {
                    $scope.destino='';
                    $scope.printConsole = function($string) {
                         console.log($scope.destino);
                         if ($scope.destino === $string){
                             $scope.destino = '';     
                         }
                        else {
                            $scope.destino = $string;                            
                        }
                    };
                            
             });
    
    var myCenter=new google.maps.LatLng(9.931453, -84.048678);

            function initialize()
            {
            var mapProp = {
              center:new google.maps.LatLng(9.932169, -84.051929) ,
              zoom:17,
              scrollwheel: false,
              mapTypeId:google.maps.MapTypeId.ROADMAP
              };

            var map=new google.maps.Map(document.getElementById("contactMap"),mapProp);

            var marker=new google.maps.Marker({
              position:myCenter,
              });

            marker.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);


}());