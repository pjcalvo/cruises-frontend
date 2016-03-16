<?php
/*
 Template Name: Pagina Contactenos
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
    <section class="content">
            <div id="contactenos-hero" class="extended sub-hero">
                <div class="container-fluid">
                    <h1>CONTÁCTENOS</h1>
                           <?php get_template_part( 'partials/-reserve-button', 'page' ); ?>  
                </div>
            </div>                     
    </section>

    <section class="content">
            <div id="contactenos-content" class="extended">
                <div class="container-fluid">
                    <h1>¿CÓMO PODEMOS AYUDARTE?</h1>
                    <p class="multi-line"><?php getPageContent(); ?> 
                    </p>
                    <form id="form-consulta" class="container-fluid" ng-app="contactApp" ng-strict-di action="#" method="post">
                        <div id="form-fields" ng-controller="contactController">
                            <div class="form-field">
                                <p>NOMBRE Y APELLIDO</p>
                                <input class="text-field" type="text" id="names" name="names" placeholder="John Smith" required/>    
                            </div>
                            <div class="form-field right-field">
                                <p>EMAIL</p>
                                <input class="text-field" type="email" id="email" name="email" placeholder="name@email.com" 
                                       x-moz-errormessage="Formato del email es incorrecto" title="Formato del email es incorrecto" required/>    
                            </div>
                            <div class="form-field">
                                <p>TELÉFONO</p>
                                <input class="text-field" type="text" id="telefono" name="telefono" placeholder="0000-0000"/>    
                            </div>
                            <div class="form-field right-field">
                                <p>DESTINO</p>
                                <input class="text-field" type="text" id="destino" name="destiny" placeholder="Bahamas"/>    
                            </div>
                            <div class="form-field">
                                <p>FECHA DE SALIDA</p>
                                <input class="text-field" type= "date" id="fechasalida" name="salida" placeholder="mm/dd/aaaa"/>    
                            </div>
                            <div class="form-field right-field">
                                <p>FECHA DE REGRESO</p>
                                <input class="text-field" type="date" id="fecharegreso"  name="regreso" placeholder="mm/dd/aaaa"/>    
                            </div>
                            <div class="form-field small-field">
                                 <input class="text-field" type="text" id="adultos"  name="adultos" value="{{adults}}" hidden/>        
                                  <p>ADULTOS (18+)</p>
                                  <div class="btn-group">
                                  <button type="button" class="btn btn-default custom-dropdown custom-field">{{adults}}</button>
                                  <button type="button" class="btn btn-default dropdown-toggle custom-dropdown custom-caret" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                    <?php populatePeopleAmount(6, 'adults'); ?>
                                  </ul>
                                </div>
                            </div>
                            <div class="form-field small-field">
                                  <input class="text-field" type="text" id="menores"  name="menores" value="{{children}}" hidden/>  
                                  <p>MENORES (0-17)</p>
                                  <div class="btn-group">
                                  <button type="button"  class="btn btn-default custom-dropdown custom-field">{{children}}</button>
                                  <button type="button" class="btn btn-default dropdown-toggle custom-dropdown custom-caret" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                    <?php populatePeopleAmount(6, 'children'); ?>                                 
                                  </ul>
                                </div>
                            </div>
                            <div class="form-field comment-field">
                                <p>COMENTARIOS</p>
                                <textarea  cols="40" rows="5" class="text-field" id="comentarios" name="comentarios" placeholder="Comentarios"></textarea>    
                            </div>
                            
                             <div class="form-field button-field center-field">
                                <input class="text-field btn-submit" type="submit" id="" value="ENVIAR CONSULTA"/>    
                            </div>
                            <?php include "libs/contact-mail.php"?>
                        </div>
                    </form>
                </div>
            </div>                     
     </section>
    <section class="content">
        
            <div id="googlemap-title" class="extended">
                <p>LOCALIZA <strong>NUESTRA OFICINA</strong></p>
            </div>
            <div id="contactMap" class ="extended">
            
            </div>
    </section>
    <section class="content">
            <div id="nosotros-content" class="extended">
                <div class="container-fluid">
                    <h1>NOSOTROS</h1>
                    <p id="nosotros-info" class="multi-line">
                        <?php getPageContent(); ?>
                    </p>
                    <img id="gsa-logo" src="/img/logo-gsa-cuadrado.png"/>
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
                             <img src="/img/icons/icon-naviera.png" alt="Imagen">
                            <p class="nombre-servicio">CRUCERO</p>                            
                        </li>
                        
                    </ul>
                </div>
            </div>                     
     </section>  

    


<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>