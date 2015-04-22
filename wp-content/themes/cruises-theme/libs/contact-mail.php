<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){  
        
        $emailSubject = 'Viaje Crucero: Mensaje de Contacto';
        $webMaster = 'pjcalvo@yahoo.com';

        $nombreField = $_POST ['names'];
        $emailField = $_POST['email'];
        $telefonoField = $_POST['telefono'];
        $destinoField = $_POST['destiny'];
        $salidaField = $_POST['salida'];
        $regresoField = $_POST['regreso'];
        $adultosField = $_POST['adultos'];
        $menoresField = $_POST['menores'];    
        $comentariosField = $_POST ['comentarios'];

        $body = 'Nombre: ' .  $nombreField . "\r\n" .
             ' Email: ' . $emailField  . "\r\n" .
             ' Telefono: ' .  $telefonoField . "\r\n" .
             ' Destino: ' .  $destinoField . "\r\n" .
             ' Salida: ' .  $salidaField . "\r\n" .
             ' Regreso: ' .  $regresoField . "\r\n" .
             ' Menores: ' .  $menoresField . "\r\n" .
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
            echo ' <p class="modal-text">Su mensaje ha sido enviado. Nos contactaremos con usted con brevedad.</p>';
        echo '</div>';
        echo ' </div><!-- /.modal-content -->';
        echo '</div><!-- /.modal-dialog -->';
        echo '</div><!-- /.modal -->';
        
        echo '<script type="text/javascript">';
        echo "$('#myModal').modal('show');";
        echo '</script>';
    }
?>