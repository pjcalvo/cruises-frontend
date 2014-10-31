(function () {
	angular.module('destinosApp', [])
             .controller('destinosController', function($scope) {
                    $scope.destino='';
                    $scope.printConsole = function($string) {
                         console.log($scope.destino);
                         if ($scope.destino == ''){
                             $scope.destino = $string;
                         }
                        else{
                            $scope.destino = '';}
                    };
                            
             });
}());
