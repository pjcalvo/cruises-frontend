<?php
/*
 Template Name: Pagina Destinos
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
            <div id="destinos-content" class="extended">
                <div class="container-fluid">
                    <h1>DESTINOS</h1>
                    <p>Visitamos más de 100 puertos de escala, en algunos de los lugares más sobrecogedores y de ensueño del mundo. 
                        Desde la belleza escarpada de Alaska, Canadá y Nueva Inglaterra hasta el encanto de Europa y los exuberantes paisajes de México, 
                        Hawái, el Caribe, el Canal de Panamá, Bermudas y Las Bahamas.
                        <br><br>
                        Nuestras excursiones por la costa te llevarán a aventuras que sólo has soñado. En nieve y arena. Por aire y mar. 
                        En las montañas y los fiordos. Y si quieres lo mejor de los dos mundos, tenemos nuestros Cruisetours, una combinación entre unas sorprendentes 
                        vacaciones en crucero y un tour en tierra a los lugares donde el barco no puede ir. 
                    </p>                                      
                </div>
                <div id= "destinos-buttons" class="container-fluid">
                     <a class ="btn-secondary active">
                         ALASKA
                    </a>
                     <a class ="btn-secondary">
                         AMERICA
                    </a>
                     <a class ="btn-secondary">
                         EUROPA
                    </a>
                     <a class ="btn-secondary">
                         ASIA
                    </a>
                     <a class ="btn-secondary">
                         CARIBE
                    </a>
                </div>
            </div>                     
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php get_template_part( 'partials/-reserve', 'page' ); ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>