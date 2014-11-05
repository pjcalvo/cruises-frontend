<?php
/*
 Template Name: Pagina Barcos
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
    <section class="content">
            <div id="barcos-hero" class="extended sub-hero">
                <div class="container-fluid">
                    <h1>BARCOS</h1>
                    <a class ="btn-primary" href="">
                                APROVECHA <strong>RESERVA AHORA</strong>
                    </a>
                </div>
            </div>                     
     </section>
        

    <section class="content">
            <div id="barcos-content" class="extended">
                <div class="container-fluid">
                    <h1>NUESTRA FLOTA</h1>
                    <p>La belleza del destino no será lo único que te sorprenda en este viaje: ¡quedarás maravillado con el propio barco! 
                    Los cruceros de Royal Caribbean son los más innovadores y emocionantes de la industria del turismo. 
                    La experiencia a bordo es increíble, desde las paredes de escalada en cada barco hasta los elegantes comedores principales 
                    y relajantes spas. Y el servicio que recibas será igualmente sorprendente gracias a nuestra atención Gold Anchor Service ©, 
                    disponible en todos los barcos. 
                    </p>
                    <div id="barcos-categorias">
                        <h3>NUESTROS CRUCEROS</h3>
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdown-barcos" data-toggle="dropdown">
                            Todos
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-barcos">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Todos</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Azamara</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Celebrity Cruises</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Royal Caribbean</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Pullmantur</a></li>
                          </ul>
                        </div>
                    </div>
                    <div id="barcos-lista">
                        <div class="barco-detalle">
                            <div class="imagen-crucero">
                                <img src="../img/novedades/novedad-1.png"/>
                            </div>
                            <div class="crucero-detalle">
                                <h4> ADVENTURE <span>of the </span>Seas</h4>
                                <p>Hemos llevado los viajes en crucero a otro nivel. Disfruta de características únicas, como una pista de patinaje sobre hielo, 
                                    el bulevar comercial Royal Promenade y una pared de escalada. Y eso es sólo el comienzo. Cómo logramos reunir todas estas 
                                    innovadoras ideas en un sólo barco? Simple. Construimos un barco más grande: el Adventure of the Seas, de 138.000 toneladas y 
                                    capacidad para 3.114 huéspedes. Las innovaciones en este y otros barcos de la Clase Voyager ofrecen más espacio para cada húsped, 
                                    además de camarotes mejorados, más opciones para cenar e instalaciones recreativas excepcionales.
                                </p>
                                <a class ="btn-primary" href="">
                                    LEER MAS
                                </a>
                            </div>
                        </div>
                        <div class="barco-detalle">
                            <div class="imagen-crucero">
                                <img src="../img/novedades/novedad-1.png"/>
                            </div>
                            <div class="crucero-detalle">
                                <h4> ADVENTURE <span>of the </span>Seas</h4>
                                <p>Hemos llevado los viajes en crucero a otro nivel. Disfruta de características únicas, como una pista de patinaje sobre hielo, 
                                    el bulevar comercial Royal Promenade y una pared de escalada. Y eso es sólo el comienzo. Cómo logramos reunir todas estas 
                                    innovadoras ideas en un sólo barco? Simple. Construimos un barco más grande: el Adventure of the Seas, de 138.000 toneladas y 
                                    capacidad para 3.114 huéspedes. Las innovaciones en este y otros barcos de la Clase Voyager ofrecen más espacio para cada húsped, 
                                    además de camarotes mejorados, más opciones para cenar e instalaciones recreativas excepcionales.
                                </p>
                                <a class ="btn-primary" href="">
                                    LEER MAS
                                </a>
                            </div>
                        </div>
                        <div class="barco-detalle">
                            <div class="imagen-crucero">
                                <img src="../img/novedades/novedad-1.png"/>
                            </div>
                            <div class="crucero-detalle">
                                <h4> ADVENTURE <span>of the </span>Seas</h4>
                                <p>Hemos llevado los viajes en crucero a otro nivel. Disfruta de características únicas, como una pista de patinaje sobre hielo, 
                                    el bulevar comercial Royal Promenade y una pared de escalada. Y eso es sólo el comienzo. Cómo logramos reunir todas estas 
                                    innovadoras ideas en un sólo barco? Simple. Construimos un barco más grande: el Adventure of the Seas, de 138.000 toneladas y 
                                    capacidad para 3.114 huéspedes. Las innovaciones en este y otros barcos de la Clase Voyager ofrecen más espacio para cada húsped, 
                                    además de camarotes mejorados, más opciones para cenar e instalaciones recreativas excepcionales.
                                </p>
                                <a class ="btn-primary" href="">
                                    LEER MAS
                                </a>
                            </div>
                        </div>
                        <div class="pagination">
                             <a class ="btn-pag btn-back" href= "">
                                Atrás
                            </a>
                            <a class ="btn-pag active" href= "">
                                1
                            </a>
                             <a class ="btn-pag" href= "">
                                2
                            </a>
                            <a class ="btn-pag btn-forward" href= "">
                                Adelante
                            </a>
                        </div>
                    </div>
                </div>
            </div>                     
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php get_template_part( 'partials/-reserve', 'page' ); ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>