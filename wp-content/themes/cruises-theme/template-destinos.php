<?php
/*
 Template Name: Pagina Destinos
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
    <section class="content">
            <div id="destinos-hero" class="extended sub-hero">
                <div class="container-fluid">
                    <h1>DESTINOS</h1>
                           <?php get_template_part( 'partials/-reserve-button', 'page' ); ?>  
                </div>
            </div>                     
     </section>
        

    <section class="content" ng-app="destinosApp" ng-strict-di>
            <div  ng-controller="destinosController"  id="destinos-content" class="extended">
                <div class="container-fluid">
                    <h1>DESTINOS</h1>
                    <p class="multi-line"><?php getPageContent(); ?> 
                    </p>                                      
                </div>
                <div  id= "destinos-buttons" class="container-fluid">
                     <?php getDestinosRegiones(); ?>
                </div>
                <div id= "destinos-images" class="container-fluid">
                    <?php getDestinosDestinos(); ?>
                    
                </div>
            </div>                     
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php get_template_part( 'partials/-reserve', 'page' ); ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>