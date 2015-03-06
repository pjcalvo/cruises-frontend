<?php
    require 'PHPMailerAutoload.php';
    if(isset($_POST["submit"])){
        // Checking For Blank Fields..
        if($_POST["ename"]==""||$_POST["email"]==""||$_POST["esubject"]==""){
            echo "Fill All Fields..";
        }else{
            // Check if the "Sender's Email" input field is filled out
            $email=$_POST['email'];
            // Sanitize E-mail Address
            $email =filter_var($email, FILTER_SANITIZE_EMAIL);
            // Validate E-mail Address
            $email= filter_var($email, FILTER_VALIDATE_EMAIL);
            if (!$email){
                echo "Invalid Sender's Email";
            }
            else{    
                $name = $_POST['ename'];
                $subject = "ViajeCrucero - Mensaje de Contacto";             
                $message = $_POST['esubject'];
                // Message lines s                // Message lines should not exceed 70 characters (PHP rule), so wrap it should not exceed 70 characters (PHP rule), so wrap it
                $message = ('Mensaje de: ' . nombre . ': ' . $message, 70);
                $message = $mensaje . "\n Email: " . $email;
                $message = $mensaje . "\n Telefono: " . $telefono;
                $message = $mensaje . "\n Destino: " . $destino;
                $message = $mensaje . "\n Fecha de Salida: " . $fechadesalida;
                $message = $mensaje . "\n Fecha de Regreso: " . $fechaderegreso;
                $message = $mensaje . "\n Fecha de Regreso: " . $fechaderegreso;
                $message = $mensaje . "\n Cantidad de Adultos: " . $cantidaddeadultos;
                $message = $mensaje . "\n Cantidad de Menores: " . $cantidaddemenores;
                
                $message = $mensaje . "\n\n Comentarios: " . $comentarios;  
                
                
                
                $mail = new PHPMailer;

                //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'pjcalvov@gmail.com';                 // SMTP username
                $mail->Password = 'skaman89';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to

                $mail->From = $email;
                $mail->FromName = $name;
                $mail->addAddress('pjcalvo@yahoo.com');     // Add a recipient           // Name is optional

                $mail->WordWrap = 70;                                 // Set word wrap to 50 characters

                $mail->Subject = $subject;
                $mail->Body    = $message;

                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }
                            }
                        }
                    }
?>