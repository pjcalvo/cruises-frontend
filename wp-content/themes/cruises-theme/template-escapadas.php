<?php
/*
 Template Name: Pagina Escapadas
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
    <section class="content">
            <div id="escapadas-hero" class="extended sub-hero">
                <div class="container-fluid">
                    <h1>ESCAPADAS</h1>
                          <?php get_template_part( 'partials/-reserve-button', 'page' ); ?>  
                </div>
            </div>                     
     </section>
        

    <section class="content">
            <div id="escapadas-content" class="extended world-map">
                <div class="container-fluid">
                    <h2>LAS VENTAJAS DE ESCAPARSE EN CRUCERO</h2>
                    <div id="ventajas-text"><?php getPageContent(); ?></div>
                    <div id="destinos-collage">
                        <div class="columna-baja columna col-xs-4">
                            <img class = "imagen-collage" src="/img/escapadas/collage1.jpg"/>
                            <img class = "imagen-collage" src="/img/escapadas/collage2.jpg"/>
                            </div>
                        <div class="columna col-xs-4">
                            <img class = "imagen-collage" src="/img/escapadas/collage3.jpg"/>
                            <img class = "imagen-collage" src="/img/escapadas/collage4.jpg"/>
                            </div>
                        <div class="columna-baja columna col-xs-4">
                            <img     class = "imagen-collage" src="/img/escapadas/collage5.jpg"/>
                            <div id="collage-text">
                                <h2>LAS MEJORES</h2>
                                <h1><strong>ESCAPADAS</strong></h1>
                                       <?php get_template_part( 'partials/-reserve-button', 'page' ); ?>  
                            </div>
                        </div>
                    </div>
                   
                </div>
                
            </div>                     
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>