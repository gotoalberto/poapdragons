<?php
    require_once 'mailphp/Email.php';
    use Snipworks\Smtp\Email;

    $mail = new Email('smtp.poapsdragons.quest', 587);
    $mail->setProtocol(Email::TLS);
    $mail->setLogin('hello@poapsdragons.quest', 'poapdragons');
    $mail->addTo('0x48cE54230F30B5003D39544875055D7ae663d8f8@mail3.me', 'POAPs & Dragons');
    $mail->setFrom('hello@poapsdragons.quest', 'POAPs & Dragons');
    $mail->setSubject('Contact Form');
    $mail->setHtmlMessage('Name: '.$_POST["name"].'<br/><br/>'.'Email: '.$_POST["email"].'<br/><br/>'.'Reason:'.$_POST["reason"].'<br/><br/>'.'Message:<br/><br/>'.$_POST["message"]);

    $mail->send();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    header('HTTP/1.1 301 Moved Permanently');
    header('Location: https://poapsdragons.quest');
?>