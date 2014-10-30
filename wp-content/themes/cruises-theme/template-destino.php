<?php
/*
 Template Name: Pagina Detalles de Destino
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
    <section class="content">
            <div id="destinos-hero" class="extended">
                <div class="container-fluid">
                    <h1>DESTINOS</h1>
                    <a class ="btn-primary" href="">
                                APROVECHA <strong>RESERVA AHORA</strong>
                    </a>
                </div>
            </div>                     
     </section>

    <section class="content">
            <div id="destino-content" class="extended">
               Hola esta es la nueva pagina de destino
            </div>                     
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php get_template_part( 'partials/-reserve', 'page' ); ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>