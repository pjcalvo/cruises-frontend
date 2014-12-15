<?php
function getNovedadesByEmpresa($empresa, $count) {

     // The Query
    $args = array(
        'post_type' => 'novedad',
        'empresa'    => $empresa,
    );
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
        
        $iterator = 0;
        
        while ( $the_query->have_posts() and $iterator < $count) {
            $iterator = $iterator + 1;
            $the_query->the_post();
            echo '<div class="novedad-detail col-xs-3" id="novedad-' . get_the_ID() . '">';
            echo '<img src="' .types_render_field("imagen", array("output"=>"raw")) . '"/>';
            echo '<h2>' .types_render_field("destino", array("output"=>"string")) . '</h2>';
            echo '<h3>EMPEZANDO</h3>';
            echo '<h4>' .types_render_field("precio", array("output"=>"string")) . '</h4>';
            echo '</div>';
         }                          
    } 
    else {
        echo '<h2>No hay novedades para este proveedor</h2>';
    }
                                /* Restore original Post Data */
                                
}

function getPromocionesHome() {

     // The Query
    $args = array(
        'post_type' => 'promocion',
        'posts_per_page'=>3
    );
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
        
        while ( $the_query->have_posts()) {
            $the_query->the_post();
            echo '<div class="promocion" id="promocion-' . get_the_ID() . '">';
            echo '<img src="' .types_render_field("imagen", array("output"=>"raw")) . '"/>';
            echo '<h2>' .types_render_field("promocion", array("output"=>"string")) . '</h2>';
            echo '<div class="detail promo">';
            echo '<p>' .types_render_field("detalles", array("output"=>"string")) . '</p>';
            echo '</div>';
            echo '<a class ="btn-primary" href="' . get_permalink() . ' ">';
            echo '<strong>LEER MAS</strong>';
            echo '</a> </div>';
         }                          
    } 
    else {
        echo '<h2>No hay novedadgunes para este proveedor</h2>';
    }
                                /* Restore original Post Data */
                                
}

function getNoticiasHome() {

     // The Query
    $args = array(
        'post_type' => 'noticia',
        'posts_per_page'=>10);
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
        
        $iterator =0;        
        
        while ( $the_query->have_posts()) {
            $the_query->the_post();
            $iterator = $iterator +1;
            
            echo '<div class="item ';  
            if($iterator == 1) echo 'active';  
            echo ' slide' . $iterator . ' heigh100">';
            echo '<div class="carousel-caption container-fluid">';
            
            echo '<div class="logo-area">' ;    
            
            $terms = get_the_terms( get_the_ID(), 'empresa' );
            $slug = '';
            
            foreach ( $terms as $term ) {
		          $slug = $term->slug;
	           }
            
            switch ($slug) {
                case 'royal':
                    echo '<img src="/img/icons/icon-royal.png" alt="Logo Royal"/>';
                    break;
                case 'celebrity':
                    echo '<img src="/img/icons/icon-celebrity.png" alt="Logo Celebrity"/>';
                    break;
                 case 'azamara':
                    echo '<img src="/img/icons/icon-azamara.png" alt="Logo Azamara"/>';
                    break;
                 case 'pullmantur':
                    echo '<img src="/img/icons/icon-pullmantur.png" alt="Logo Pullmantur"/>';
                    break;
                default:
                    echo 'No Image';
            };
            echo '</div>';
            echo '<div class="content-area">';
            echo '<h2>' . get_the_Title() . '</h2>';
            echo '<p>' . get_the_content() . '</p>';
            echo '</div> </div> </div>';
           
         }                          
    } 
    else {
        echo '<h2>No hay noticias nuevas</h2>';
    }
                                /* Restore original Post Data */
                                
}

function getDestinosRegiones() {   
     // The Query
    
    $terms = get_terms('region');
    foreach ($terms as $term) {
        echo '<a ng-class="{active: destino == \''.$term->name .'\'}" ng-click="printConsole(\'' .$term->name . '\')" class ="btn-secondary">';
        echo $term->name;
        echo '</a>';
    }
                                
}

function getDestinosDestinos() {

     // The Query
    $args = array(
        'post_type' => 'destino',
        'posts_per_page'=>-1
        
    );
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
        
        while ( $the_query->have_posts()) {
            $the_query->the_post();
            
            $terms = get_the_terms( get_the_ID(), 'region' );
            $slug = '';
            
            foreach ( $terms as $term ) {
		          $slug = $term->name;
	        }
            
            echo '<div ng-show = "destino== \'\' || destino==\'' . $slug .'\'" class = "col-xs-1 col-sm-4" id="destino-' . get_the_ID() . '">';
            echo '<a href="' . get_permalink() . '"><img class="destino-thumbnail" src = "' .types_render_field("imagen", array("output"=>"raw")) . '" alt="Destino"></a>';
            echo '<h3 class="destino-name">'. get_the_Title() .'</h3>';
            echo '</div>';
         }                          
    } 
                            /* Restore original Post Data */
                                
}

function getEmpresasBarcos() {   
     // The Query
    
    $terms = get_terms('empresa');
    foreach ($terms as $term) {
        echo '<li role="presentation"><a role="menuitem" tabindex="-1" ng-click="filterBarcos(\''.$term->name .'\')">' . $term->name . '</a></li>';
    }
                                
}

function getListaBarcos() {

     // The Query
    $args = array(
        'post_type' => 'barco',
        'posts_per_page'=>-1
        
    );
    $the_query = new WP_Query( $args );
    
    $count = 0;

    // The Loop
    if ( $the_query->have_posts() ) {
        
        while ( $the_query->have_posts()) {
            $the_query->the_post();
            
            $terms = get_the_terms( get_the_ID(), 'empresa' );
            $clases = get_the_terms( get_the_ID(), 'clase' );
            $slug = '';
            $claseName = '';
            
            if ( $terms && ! is_wp_error( $terms ) ){
                foreach ( $terms as $term ) {
                      $slug = $term->name;
                }
            }
            
            if ( $clases && ! is_wp_error( $clases ) ){
                foreach ( $clases as $termino ) {
                      $claseName = $termino->name;
                }
            }
                
                $count = $count+1;
                echo '$scope.barcoss.push({"clase":"' . $claseName . '", "empresa":"' .$slug . '", "imagen":"' . types_render_field("imagen", array("output"=>"raw")) . '", "nombre":"' . get_the_Title() . '", "detalle" : "' . substr(preg_replace("/\r\n|\r|\n/",'\\n',get_the_content()),0, 450) . '...", "link": "'. get_permalink()  . '"});';
            
         }
        
            echo '$scope.bigCount = ' . $count .';';
        
        
    } 
                            /* Restore original Post Data */
                                
}

function getDatosBarco() {

    $postBarco = the_post();
    
    echo '$scope.imagenesInterior = [{src:"';
    echo types_render_field("interior",   array("output"=>"raw",'separator'=>'"},{src:"'));
    echo '"}];';
    
    echo '$scope.imagenesExterior = [{src:"';
    echo types_render_field("exterior",   array("output"=>"raw",'separator'=>'"},{src:"'));
    echo '"}];';
    
    echo '$scope.name = "' . get_the_Title() . '";';
    echo '$scope.detalle = "' . preg_replace("/\r\n|\r|\n/",'\\n',get_the_Content()) . '";';
    echo '$scope.heroImage = "'. types_render_field("imagen", array("output"=>"raw")) .'";';
    
    $count = 0;
    
    // Find connected pages
    $destinos = new WP_Query( array(
        'connected_type' => 'barco_to_destino',
        'connected_items' => get_queried_object(),
        'nopaging' => true,
        ) );
    
     while ( $destinos->have_posts()) {
         $destinos->the_post();
         
         echo '$scope.destinoss.push({"nombre":"' . $destino.get_the_title() . '", "imagen":"' .types_render_field("imagen", array("output"=>"raw")) . '", "link": "' . get_permalink() . '"});';
         
         $count = $count +1;
         
     }
    
    echo '$scope.totalItems = ' . $count .';';
    
                            /* Restore original Post Data */
                                
}

function getDestinoDetalles() {

    $postBarco = the_post();
    
    echo '<div id="novedad-portada">';
    echo '<img id = "imagen-portada" src="'. types_render_field("portada", array("output"=>"raw")).'">';
    echo '</div>';
    
    echo ' <div id ="destino-titulo">';
    echo ' <h1>'.get_the_Title().'</h1>';
    
    echo '<div id ="destino-contenido">';
    echo '<p class="multi-line">' . get_the_Content(). '</p>';
    echo '<hr/>';
    echo '</div>';
    
    echo '<div id ="paquete-contenido">';
    echo '<h2>TIPO DE PAQUETE</h2>';
    echo '<ul>';
    echo '<li>Cruceros</li>';
    echo '<li>'.get_the_Title().'</li>';
    echo '</ul>';
    
    }

function getPageContent() {

    $postBarco = the_post();
    
    echo get_the_Content();
 
    }
?>