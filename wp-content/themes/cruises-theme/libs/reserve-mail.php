<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){  
        
        $emailSubject = 'Viaje Crucero: Mensaje de Reserva';
        $webMaster = 'pjcalvo@yahoo.com';

        $nombreField = $_POST ['names'];
        $salidaField = $_POST['salida'];
        $habitacionField = $_POST['habitacion'];
        $adultosField = $_POST['adultos'];
        $menoresField = $_POST['menores']; 
        $emailField = $_POST['email'];
        $telefonoField = $_POST['telefono'];
        $paisField = $_POST['pais'];
        $postalField = $_POST['postal'];
        $destinoField = $_POST['destiny'];
        $comentariosField = $_POST ['comentarios'];

        $body = 'Destino Solicitado: ' .  $destinoField . "\r\n" .
             ' Fecha Salida: ' .  $salidaField . "\r\n" .
             ' Cantidad de Adultos: ' .  $adultosField . "\r\n" .
             ' Cantidad de Menores: ' .  $menoresField . "\r\n\r\n" .
             ' Habitacion: ' .  $habitacionField . "\r\n\r\n" .
             ' Nombre: ' .  $nombreField . "\r\n" .
             ' Email: ' . $emailField  . "\r\n" .
             ' Telefono: ' .  $telefonoField . "\r\n" .
             ' Pais: ' .  $paisField . "\r\n" .
             ' Postal: ' .  $postalField . "\r\n" .   
             ' Comentarios: ' .  $comentariosField;

        $headers = ' From: ' . $emailField;

        $success = mail($webMaster, $emailSubject, $body, $headers);

        echo '<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
        echo '<div class="modal-dialog">';
        echo '<div class="modal-content">';
        echo '<div class="modal-header">';
            echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            echo '<p class=" modal-title modal-text">Su email ha sido enviado!!!</p>';
        echo '</div>';
        echo '<div class="modal-body">';
            echo ' <p class="modal-text">Su mensaje de reserva ha sido enviado. Nos contactaremos con usted con brevedad.</p>';
        echo '</div>';
        echo ' </div><!-- /.modal-content -->';
        echo '</div><!-- /.modal-dialog -->';
        echo '</div><!-- /.modal -->';
        
        echo '<script type="text/javascript">';
        echo "$('#myModal').modal('show');";
        echo '</script>';
    }
?>