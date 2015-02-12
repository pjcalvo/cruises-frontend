<?php
/*
 Template Name: Pagina Detalles de Promocion
*/
?>

<?php get_template_part( 'header', 'page' ); ?>

    <section class="content container-fluid">
            <div id="novedad-content" class="small-container">
                <div id="novedad-portada">
                   <img id = "imagen-portada" src="
                        <?php echo types_render_field("imagen", array('output'=>'raw')); ?>
                    ">
                </div>
                <div id ="novedad-titulo">
                    <h1><?php the_Title(); ?></h1>
                </div>
                <div id ="novedad-contenido">
                    <p class="multi-line"><strong></strong></p>
                </div>
                <div id ="detalles-titulo">
                    <h2>DETALLES DE LA PROMOCIÓN</h2>
                </div>
                <div id ="detalles-novedad">
                    <p class="multi-line">
                       <?php echo types_render_field("detalles", array("output"=>"string")) ?> 
                    </p>
                </div>
                <div id ="comprar-novedad">
                        <?php get_template_part( 'partials/-reserve-button', 'page' ); ?>  
                </div>
                     
            </div>
    </section>
</div>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>