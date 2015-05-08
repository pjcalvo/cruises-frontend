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
       <?php get_template_part( 'partials/-reserve-button', 'page' ); ?>  
                    </div>            
                </div>
            </div>                     
     </section>
        

    <section class="content">
            <div id="nosotros-content" class="extended">
                <div class="container-fluid">
                    <h1>NOSOTROS</h1>
                    <p id="nosotros-info" class="">
                        <?php getPageContent(); ?>
                    </p>                                      
                </div>
            </div>                     
     </section>
    <section class="content">
            <div id="servicios-content" class="extended">
                <div class="container-fluid">
                    <h1>SERVICIOS QUE OFRECEMOS:</h1>
                    <p>Venta de paquetes turísticos y cruceros alrededor del mundo, trabajando junto a las mejores empresas del mercado. 
                    </p>
                    <ul id="lista-servicios">
                        <li class="servicio col-xs-12">
                            <p class="nombre-servicio">CRUCEROS</p>                            
                        </li>
                        
                    </ul>
                </div>
            </div>                     
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>