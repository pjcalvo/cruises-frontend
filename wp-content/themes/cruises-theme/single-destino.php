<?php
/*
 Template Name: Pagina Detalles de Destino
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
    <section class="content container-fluid">
<div id="destino-content" class="small-container">

                    <?php getDestinoDetalles(); ?>
                    
                    
                         <div class="form-row">
                             <div class="form-field float-left field-300">
                                    <p>NOMBRE DE CLIENTE</p>
                                    <input class="text-field flat" type="text" id="names"  name="names" placeholder="John Smith" required/>    
                                </div>
                        </div>     
                        <div class="form-row">
                             <div class="form-field float-left field-300">
                                    <p>FECHA DE SALIDA DEL CRUCERO</p>
                                    <input class="text-field flat" type= "date" id="fechasalida" name="salida" placeholder="mm/dd/aaaa"/>    
                             </div>
                        </div>
                        <div class="form-row">
                            <div class="form-field float-left field-300">
                                    <p>TIPO DE HABITACIÓN DEL CRUCERO</p>
                                    <input class="text-field flat" type= "text" id="habitacion" name="habitacion" placeholder="Habitación"/>    
                             </div>
                        </div>   
                         <div class="form-row">
                             <div class="form-field float-left field-100">
                                    <p>CANTIDAD DE PASAJEROS</p>
                                    <input class="text-field field-300 flat" type= "numeric" name="adultos" id="adultos" placeholder="Adultos"/>  
                                    <input class="text-field field-300 flat" type= "numeric" name="menores" id="menores" placeholder="Menores"/>    
                                     
                             </div>
                        </div>
                        <div class="form-row">
                             <div class="form-field float-left field-300">
                                    <p>CORREO ELECTRÓNICO</p>
                                    <input class="text-field flat" type= "text" id="email" name="email" placeholder="Correo Electrónico" required/>    
                             </div>
                             <div class="form-field float-left field-300">
                                    <p>TELÉFONO</p>
                                    <input class="text-field flat" type= "text" id="telefono" name="telefono" placeholder="Teléfono" required/>    
                             </div>
                        </div>
                        <div class="form-row">
                             <div class="form-field float-left field-300">
                                    <p>PAÍS</p>
                                    <input class="text-field flat" type= "text" id="pais" name= "pais" placeholder="País"/>    
                             </div>
                            <div class="form-field float-left field-300">
                                    <p>APARTADO POSTAL</p>
                                    <input class="text-field flat" type= "text" id="postal" name= "postal" placeholder="Apartado Postal"/>    
                             </div>
                        </div>
                        <div class="form-row">
                             <div class="form-field comment-field">
                                    <p>COMENTARIOS</p>
                                    <textarea  cols="40" rows="5" class="text-field" id="comentarios" name="comentarios" placeholder="Por favor indicar toda la información que usted necesita" required></textarea>    
                             </div>
                        </div>
                         <div class="form-row">
                             <div class="form-field button-field center-field">
                                    <input class="text-field btn-submit" type="submit" id="" value="ENVIAR SOLICITUD"/>    
                                </div>
                        </div>
                        <?php include "libs/reserve-mail.php"?>
                    </form>
                    
                </div>
                     
            </div>                   
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>