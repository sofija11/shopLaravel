<?php

namespace App\Services;



class MailerService {

    public function mailerToAdministrator($name, $subject, $message, $email, $mail) {
        //Server settings
        $mail->SMTPDebug = 0;

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';

        $mail->SMTPAuth = true;
        $mail->Username = 'svitorovic06@gmail.com';
        $mail->Password = 'jakasifra65';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom( $email, 'User Question');
        $mail->addAddress('svitorovic06@gmail.com');

        $mail->isHTML(true);
        // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->send();
    }
}