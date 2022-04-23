<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    public $email;
    public $nombre;
    public $token;


    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {
        //crear email

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '0a4bbcaca5a952';
        $mail->Password = 'a3766570d3628d';
        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon');
        $mail->Subject = 'Confirma tu cuenta';
        //

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $contenido = '<html>';
        $contenido .= "<p><strong>HOLA " . $this->nombre .  "</strong> Has creado tu cuenta en appsalon, Por favor confirmala </p>";
        $contenido .= "<p> Presiona aqui: <a href = 'http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a></p>";
        $contenido .= "<p> Si no solicitaste esto, puedes ignorar el mensaje </p>";
        $contenido .= '</html>';

        $mail->Body = $contenido;

        //enviar

        $mail->send();
    }

    public function enviarInstrucciones()
    {

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '0a4bbcaca5a952';
        $mail->Password = 'a3766570d3628d';
        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon');
        $mail->Subject = 'Reestablece tu password';
        //

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $contenido = '<html>';
        $contenido .= "<p><strong>HOLA " . $this->nombre .  "</strong> Has solicitado reestablecer tu password, por favor selecciona el siguiente enlace </p>";
        $contenido .= "<p> Presiona aqui: <a href = 'http://localhost:3000/recuperar?token=" . $this->token . "'>Reestablecer Password</a></p>";
        $contenido .= "<p> Si no solicitaste esto, puedes ignorar el mensaje </p>";
        $contenido .= '</html>';

        $mail->Body = $contenido;

        //enviar

        $mail->send();
    }
}
