<?php
/*
 Template Name: Pagina Detalles de Novedad
*/
?>

<?php get_template_part( 'header', 'page' ); ?>

    <section class="content container-fluid">
            <div id="novedad-content" class="small-container">
                <div id="novedad-portada">
                    <img id = "imagen-portada" src="/img/novedades/novedad-grande.png">
                </div>
                <div id ="novedad-titulo">
                    <h1>BAHAMAS EMPEZANDO $109 USD</h1>
                </div>
                <div id ="novedad-contenido">
                    <p class="multi-line">Consectetur adipiscing elit. Maecenas gravida massa est, non cursus augue facilisis sagittis. Etiam vel nisi orci. Praesent interdum lorem in malesuada malesuada.  Phasellus sagittis odio gravida tempus hendrerit. Vestibulum dignissim nulla nec mattis ultrices. Vestibulum sodales feugiat orci.</p>
                </div>
                <div id ="detalles-titulo">
                    <h2>DETALLES NOVEDAD</h2>
                </div>
                <div id ="detalles-novedad">
                    <p class="multi-line">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida massa est, non cursus augue facilisis sagittis. Etiam vel nisi orci. Praesent interdum lorem in malesuada malesuada. Phasellus sagittis odio gravida tempus hendrerit. Vestibulum dignissim nulla nec mattis ultrices. Vestibulum sodales feugiat orci, non rutrum ex. Nunc ornare pretium dignissim. Sed at dui congue, finibus elit et, dictum justo. Phasellus et ultricies enim. Sed volutpat volutpat neque id efficitur. Donec eget est sagittis, finibus ligula tempus, venenatis nisi. In auctor ullamcorper nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Quisque fermentum, turpis id placerat sollicitudin, erat leo faucibus massa, quis lacinia augue lectus eget turpis. Vivamus ornare mattis porttitor.
                        
• Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida massa est, non cursus augue facilisis sagittis.

• Donec eget est sagittis, finibus ligula tempus, venenatis nisi. In auctor ullamcorper nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus.

• Cras in sapien sed nisi maximus faucibus. Sed et commodo nulla. Maecenas ac bibendum nunc. Donec sollicitudin purus vel luctus fermentum.

• Aliquam erat volutpat. Quisque fermentum, turpis id placerat sollicitudin, erat leo faucibus massa, quis lacinia augue lectus eget turpis. Vivamus ornare mattis porttitor.

• Cras in sapien sed nisi maximus faucibus. Sed et commodo nulla. Maecenas ac bibendum nunceget turpis. 
                    </p>
                </div>
                <div id ="comprar-novedad">
                    <a class ="btn-primary" href="/reservaciones">
                                    COMPRA <strong>ESTA NOVEDAD</strong>
                        </a>
                </div>
                     
            </div>
    </section>
</div>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>