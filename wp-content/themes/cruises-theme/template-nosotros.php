<?php
/*
 Template Name: Pagina Nosotros
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
    <section class="content">
            <div id="nosotros-hero" class="extended sub-hero">
                <div class="container-fluid">
                    <div class ="right">
                        <h1>NOSOTROS</h1>
                        <a class ="btn-primary" href="">
                                    APROVECHA <strong>RESERVA AHORA</strong>
                        </a>
                    </div>            
                </div>
            </div>                     
     </section>
        

    <section class="content">
            <div id="nosotros-content" class="extended">
                <div class="container-fluid">
                    <h1>NOSOTROS</h1>
                    <p id="nosotros-info">Nosotros GSA Representaciones S.A. es una empresa con base en la ciudad de San José, Costa Rica. 
                        Actualmente se destaca por ser una de las compañías de representaciones turísticas más exitosas en la región de Centroamérica y el caribe. 
                        Las marcas representadas por GSA Representaciones son las mejores y lideres en su ámbito. 
                        <br><br>
                        Compañías representadas por GSA Representaciones incluyen navieras, líneas aéreas, entre otras áreas. 
                        En el área de navieras, GSA Representaciones es el representante de 
                        Royal Caribbean Internacional y Celebrity Cruises para Centroamérica, incluyendo la marca AZAMARA.
                        <br><br>
                        En el área de líneas aéreas, GSA Representaciones representa a singapore Airlines en Centroamérica y United Airlines para Costa Rica.
                    </p>                                      
                </div>
            </div>                     
     </section>
    <section class="content">
            <div id="servicios-content" class="extended">
                <div class="container-fluid">
                    <h1>SERVICIOS QUE OFRECEMOS:</h1>
                    <p>Venta de paquetes turísticos y tiquetes alrededor del mundo, reservaciones de hoteles y cruceros, alquiler de autos. 
                    </p>
                    <ul id="lista-servicios">
                        <li class="servicio col-xs-2">
                            <img src="/img/icons/icon-especialidades.png" alt="Imagen">
                            <p class="nombre-servicio">ESPECIALIDADES</p>
                        </li>
                        <li class="servicio col-xs-2">
                             <img src="/img/icons/icon-mayoristas.png" alt="Imagen">
                            <p class="nombre-servicio">MAYORISTAS</p>                            
                        </li>
                        <li class="servicio col-xs-2">
                             <img src="/img/icons/icon-naviera.png" alt="Imagen">
                            <p class="nombre-servicio">NAVIERA</p>                            
                        </li>
                        <li class="servicio col-xs-2">
                             <img src="/img/icons/icon-rentacar.png" alt="Imagen">
                            <p class="nombre-servicio">RENT A CAR</p>                            
                        </li>
                        <li class="servicio col-xs-2">
                             <img src="/img/icons/icon-lineasaereas.png" alt="Imagen">
                            <p class="nombre-servicio">LINEAS AÉREAS</p>                          
                        </li>
                        <li class="servicio col-xs-2">
                             <img src="/img/icons/icon-otros.png" alt="Imagen">
                            <p class="nombre-servicio">OTROS</p>                        
                        </li>
                        
                    </ul>
                </div>
            </div>                     
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php get_template_part( 'partials/-reserve', 'page' ); ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>