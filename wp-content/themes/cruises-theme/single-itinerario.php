<?php
/*
 Template Name: Pagina Detalles de Itinerario
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
    <section class="content">
            <div id="itinerario-hero" class="small-container">
                
                <img id = "imagen-portada" src="/img/itinerario/caribe.png">
                <h1>CARIBE SUR</h1>
            </div>
    </section>

    <section class="content">
            <div id="itinerario-content" class="container-fluid">
               <div class="small-container">
                   <h1>CARIBE SUR, CRUCERO DE 7 NOCHES</h1>
                   <p class="">Nadie conoce el Caribe mejor que nosotros. Después de todo, es nuestro segundo nombre. Cuando se trata de playas hermosas y brillantes aguas azules, el Caribe realmente se encuentra en un nivel superior. Durante tus vacaciones en crucero viviras muchas aventuras.</p>
                   <a class ="btn-primary" href="/reservaciones/">
                                    RESERVAR <strong>AHORA</strong>
                    </a>
                </div>           
        </div>
     </section>
     <section class="content">
         <div id="itinerario-dias" class="extended">
             <div id= "circle">
             
             </div>
            <div class="small-container">
                <div id="itinerario-dias">
                    <div class="itinerario-row title-row">
                        <div class="itinerario-content">Dia</div>
                        <div class="itinerario-content">Lugar</div>
                        <div class="itinerario-content">Fecha Salida</div>
                        <div class="itinerario-content">Fecha Llegada</div>                        
                    </div>
                    <div class="itinerario-row">
                        <div class="itinerario-content">Dia 1</div>
                        <div class="itinerario-content">San Jose</div>
                        <div class="itinerario-content">13pm</div>
                        <div class="itinerario-content">12am</div>                        
                    </div>
                    
                </div>
            </div>
         
         </div>
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>