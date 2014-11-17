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
                    <a class ="btn-primary" href="">
                                APROVECHA <strong>RESERVA AHORA</strong>
                    </a>
                </div>
            </div>                     
     </section>
        

    <section class="content">
            <div id="escapadas-content" class="extended world-map">
                <div class="container-fluid">
                    <h1>ESCAPADAS</h1>
                    <p>LA MEJOR MANERA DE DESCONECTAR</p>
                    <p>Sólo dispones de 4 ó 5 noches para hacer una escapada y lo que menos te apetece es conducir durante horas o quedar atrapado en largas caravanas? No pierdas más los nervios.
                        <br>
                        En 2009, aparca tu coche y déjate llevar en crucero corto de Royal Caribbean. 
                    </p>
                    <div id="destinos-collage">
                        <div class="columna-baja columna col-xs-4">
                            <img class = "imagen-collage" src="/img/escapadas/collage1.png"/>
                            <img class = "imagen-collage" src="/img/escapadas/collage2.png"/>
                            </div>
                        <div class="columna col-xs-4">
                            <img class = "imagen-collage" src="/img/escapadas/collage3.png"/>
                            <img class = "imagen-collage" src="/img/escapadas/collage4.png"/>
                            </div>
                        <div class="columna-baja columna col-xs-4">
                            <img class = "imagen-collage" src="/img/escapadas/collage5.png"/>
                            <div id="collage-text">
                                <h2>LAS MEJORES</h2>
                                <h1><strong>ESCAPADAS</strong></h1>
                                <a class ="btn-primary" href="">
                                    APROVECHA <strong>RESERVA AHORA</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h2>LAS VENTAJAS DE ESCAPARSE EN CRUCERO</h2>
                    <p id="ventajas-text">Si todavía no has navegado en crucero, una escapada es una muy buena oportunidad para probarlo durante 3, 4 ó 5 noches. La experiencia de navegar es inolvidable y más en nuestros sorprendentes barcos. Lo mejor de todo, es que cada día podrás visitar un puerto de escala o un país diferente sin necesidad de conducir un solo kilómetro ni hacer y deshacer las maletas
                        <br>Te exponemos una selección de itinerarios máás abajo para que puedas elegir ahora mismo tu próxima escapada. ¡Déjate llevar con Royal Caribbean!</p>
                </div>
                
            </div>                     
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php get_template_part( 'partials/-reserve', 'page' ); ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>