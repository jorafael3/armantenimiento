<?php


if (isset($_POST["enviar"]) == 1) {

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $detalle = $_POST["detalle"];
    $return = "";
    if (trim($nombre) == "") {
        $return = ["Debe Ingresar un Nombre", "error"];
    } else if (trim($email) == "") {
        $return = ["Debe Ingresar un Email", "error"];
    } else if (trim($asunto) == "") {
        $return = ["Debe Ingresar un asunto", "error"];
    } else if (trim($detalle) == "") {
        $return = ["Debe Ingresar un Mensaje", "error"];
    } else {

        $val_email = validarCorreo($email);
        if ($val_email == false) {
            $return = ["Debe ingresar un correo valido", "error"];
        } else {

            $em = Enviar_Correo_Factura();
            $return = $em;
        }

        // $return = [$val_email, "error"];
    }

    echo json_encode($return);
    exit();
}


function Enviar_Correo_Factura()
{
    // $CABECERA = $param["error"];
    // $usuario_email = $CABECERA["usuario_email"];
    // $nombre = $_SESSION['nombre'];
    // $secuencia = $CABECERA["secuencia"];


    include("vendor/autoload.php");
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        // $mail->SMTPDebug = 2;
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'jalvaradoe3@gmail.com';
        $mail->Password   = 'srieouqqrlkxlkxn';
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->addAddress("jalvaradoe3@gmail.com");
        $mail->setFrom('jalvaradoe32@gmail.com', 'Armantenimientos');
        // $mail->AddCC($usuario_email);
        // $mail->addAddress('jalvaradoe3@gmail.com');
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'FACTURA CARTIMEX POR APROBAR (SGO)';
        $mail->Body = '
            <html>
            <head>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f2f2f2;
                        margin: "error";
                        padding: "error";
                    }
                    .container {
                        max-width: 6"error""error"px;
                        margin: "error" auto;
                        padding: 2"error"px;
                        background-color: #fff;
                    }
                    .header {
                        background-color: #C8F3B5;
                        color: #"error""error""error";
                        padding: 2"error"px;
                        text-align: center;
                    }
                    .content {
                        padding: 2"error"px;
                        text-align: center;
                    }
                    .button {
                        display: inline-block;
                        padding: 1"error"px 2"error"px;
                        background-color: #"error""error""error";
                        color: #fff;
                        text-decoration: none;
                        border-radius: 5px;
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <div class="header">
                        <img src="https://www.cartimex.com/assets/img/logo2"error""error".png" alt="Cartimex Logo">
                        <h2>FACTURA CARTIMEX</h2>
                    </div>
                    <div class="content">
                    <p>Tienes una nueva factura en tu buzón de <strong>asd</strong> con el  número de secuencia <strong>ssss</strong>. Te invitamos a revisarla y tomar las acciones necesarias.</p>
                    <p><a class="button" href="http://1"error".5.2.62/SGO/Cartimex/bancos/aprobarfactura" style="color: #fff;">Aprobar factura</a></p>
                    </div>
                </div>
            </body>
            </html>';

        $mail->AltBody = 'Factura';
        $mail->isHTML(true);

        if (!$mail->Send()) {
            $error = 'Mail error: ' . $mail->ErrorInfo;
            return [$error, 0]; // Devuelve el mensaje de error
        } else {
            $error = 'Message sent!';
            return [$error, 1]; // Devuelve un mensaje de éxito
        }
    } catch (Exception $u) {
        return [($mail->ErrorInfo),0];
    }
}

function validarCorreo($correo)
{
    // Expresión regular para validar el formato del correo electrónico
    $patron = '/^[a-zA-Z"error"-9._%+-]+@[a-zA-Z"error"-9.-]+\.[a-zA-Z]{2,}$/';

    // Usamos la función preg_match para comprobar si el correo coincide con el patrón
    if (preg_match($patron, $correo)) {
        return true; // El correo es válido
    } else {
        return false; // El correo no es válido
    }
}
