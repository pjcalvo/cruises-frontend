<?php
/*
 Template Name: Pagina Contactenos
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
    <section class="content">
            <div id="contactenos-hero" class="extended sub-hero">
                <div class="container-fluid">
                    <h1>CONTACTENOS</h1>
                    <a class ="btn-primary" href="">
                                APROVECHA <strong>RESERVA AHORA</strong>
                    </a>
                </div>
            </div>                     
     </section>
        

    <section class="content"  >
            <div id="contactenos-content" class="extended">
                <div class="container-fluid">
                    <h1>?Cómo podemos ayudarte?</h1>
                    <p>Nuestra meta es darte el mejor servicio posible en todo nuestro quehacer. De esta manera, si no puedes encontrar la respuesta 
                        a una pregunta en nuestro sitio web y deseas hablar con un Especialista en cucero de
                        Royal Caribbean o un Representante de Royal Caribbean en tu país, por el motivo que sea, tendremos mucho gusto en ayudarte. 
                    </p>                                      
                </div>
            </div>                     
     </section>

<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php get_template_part( 'partials/-reserve', 'page' ); ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>