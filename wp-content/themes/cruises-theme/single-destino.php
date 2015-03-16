<?php
/*
 Template Name: Pagina Detalles de Destino
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
    <section class="content container-fluid">
<div id="destino-content" class="small-container">

                    <?php getDestinoDetalles(); ?>
                    
                    <form id= "form-fields">
                         <div class="form-row">
                             <div class="form-field float-left field-300">
                                    <p>NUMERO DE PERSONAS</p>
                                    <input class="text-field flat" type="text" id="names" placeholder="John Smith" required/>    
                                </div>
                        </div>     
                        <div class="form-row">
                             <div class="form-field float-left field-300">
                                    <p>FECHA DE SALIDA DEL CRUCERO</p>
                                    <input class="text-field flat" type= "date" id="fechasalida" placeholder="mm/dd/aaaa"/>    
                             </div>
                        </div>
                        <div class="form-row">
                            <div class="form-field float-left field-300">
                                    <p>TIPO DE HABITACION DEL CRUCERO</p>
                                    <input class="text-field flat" type= "text" id="fechasalida" placeholder="Habitacion"/>    
                             </div>
                        </div>
                        <div class="form-field float-left field-300">
                                <p>NOMBRE DEL CLIENTE</p>
                                <input class="text-field flat" type= "text" id="fechasalida" placeholder="Nombre del Cliente"/>    
                         </div>
                         <div class="form-row">
                             <div class="form-field float-left field-100">
                                    <p>NOMBRE DE PASAJEROS</p>
                                    <input class="text-field field-300 flat" type= "text" id="fechasalida" placeholder="Nombre Pasajero 1"/>  
                                    <input class="text-field field-300 flat" type= "text" id="fechasalida" placeholder="Nombre Pasajero 2"/>    
                                    <input class="text-field field-300 flat" type= "text" id="fechasalida" placeholder="Nombre Pasajero 3"/>    
                             </div>
                        </div>
                        <div class="form-row">
                             <div class="form-field float-left field-300">
                                    <p>CORREO ELECTRONICO</p>
                                    <input class="text-field flat" type= "text" id="fechasalida" placeholder="Correo Electronico"/>    
                             </div>
                             <div class="form-field float-left field-300">
                                    <p>TELEFONO</p>
                                    <input class="text-field flat" type= "text" id="fechasalida" placeholder="Telefono"/>    
                             </div>
                             <div class="form-field float-left field-300">
                                    <p>FAX</p>
                                    <input class="text-field flat" type= "text" id="fechasalida" placeholder="Fax"/>    
                             </div>
                        </div>
                        <div class="form-row">
                             <div class="form-field float-left field-300">
                                    <p>PAIS</p>
                                    <input class="text-field flat" type= "text" id="fechasalida" placeholder="Pais"/>    
                             </div>
                            <div class="form-field float-left field-300">
                                    <p>APARTADO POSTAL</p>
                                    <input class="text-field flat" type= "text" id="fechasalida" placeholder="Apartado Postal"/>    
                             </div>
                        </div>
                        <div class="form-row">
                             <div class="form-field comment-field">
                                    <p>COMENTARIOS</p>
                                    <textarea  cols="40" rows="5" class="text-field" id="comentarios" placeholder="Comentarios" required></textarea>    
                             </div>
                        </div>
                         <div class="form-row">
                             <div class="form-field button-field center-field">
                                    <input class="text-field btn-submit" type="submit" id="fecharegreso" value="ENVIAR SOLICITUD"/>    
                                </div>
                        </div>
                        
                    </form>
                    
                </div>
                     
            </div>                   
     </section>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>