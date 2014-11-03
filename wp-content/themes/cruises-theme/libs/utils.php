<?php

function populatePeopleAmount($amount, $people){
    
    $count = 0;
    while ($count <= $amount){
        echo ' <li><a ng-click="';
        if ($people == 'adults') {
            echo 'updateAdults('; }
        else {
            echo 'updateChildren(';            }
        echo $count . ')">' . $count .  '</a></li>';
        $count = $count +1;
    }
    
}

?>