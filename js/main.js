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

var windowHeight = 0;
var windowWidth = 0;

function adjustSliderHeight(){
    var w = window,
        d = document,
        e = d.documentElement,
        g = d.getElementsByTagName('body')[0],
        y = w.innerHeight|| e.clientHeight|| g.clientHeight,
        x = w.innerWidth;
    
    if (x < 400){
        y = 900;
    
    }
    else{
    
        if (y > 875) {
            if (x < 980)   {
                y = 900;
            } 

           windowHeight = y;
        }
        else
        { 
            y = 875;
        }
    }
        
     
    windowWidth = x;
    
    y = y - 181; 

    var myElements = document.querySelectorAll('#carousel-hero');
       
    for (var i = 0; i < myElements.length; i++) {
         
        if (windowWidth <= 980 ){
            myElements[i].style.height = y + "px";
        }
        else{
            myElements[i].style.height = y  + "px";
        }
        
    }
}

window.onload = adjustSliderHeight();

$( window ).resize(function() {
    adjustSliderHeight();
});


var scrollY = 2;
var distance = 50;
var speed = 20;

function autoScrollTo(el) {
    
    var targetY = document.getElementById(el).offsetTop;
    var bodyHeight = document.body.offsetHeight;
    var yPos = currentY + window.innerHeight;
    var animator = setTimeout('autoScrollTo(\'' + el + '\')', 24);
    if (yPos > bodyHeight) {
        clearTimeout(animator);
    } else {
        if (targetY -currentY > 0) {
            if (targetY - currentY < distance){
                scrollY = targetY;
            }
            else{
                scrollY = currentY + distance;
            }
            window.scroll(0, scrollY);
        } else { 
            clearTimeout(animator);
        }
    }
} 

function resetScroller(el) {
    var currentY = window.pageYOffset;
    var targetY = document.getElementById(el).offsetTop;
    var animator = setTimeout('resetScroller(\'' + el + '\')', speed);
    if (currentY > targetY) {
        scrollY = currentY - distance;
        window.scroll(0, scrollY);
    } else { 
        clearTimeout(animator);
    }
}