<?php

/**
 * Created by PhpStorm.
 * User: Rizkan
 * Date: 9/23/2017
 * Time: 12:01 AM
 */

if (isset($_POST['contact_name'])) {
    $name = $_POST['contact_name'];
    $phone = $_POST['contact_phone'];

    $message = $_POST['contact_message'];
    $email = $_POST['contact_email'];
    $to = "info@yssfoundation.com, secretary@yssfoundation.com, rizkan@rizcreation.com";
    $from = $email;
    $s = 'Contact form YSS Foundation Website';
    $m = '<strong>Name: </strong>' . $name . '<br /> <strong>E-mail: </strong>' . $email . '<br /><strong>Phone:</strong>' . $phone . '<br/> <strong>Message: </strong>' . $message . '<br/>';
    $h .= 'Content-type: text/html; charset=UTF-8' . PHP_EOL;
    $h .= "from: $from\n";
    $h .= "MIME-Version: 1.1\n";
    $h .= "X-Mailer: PHP/" . phpversion() . PHP_EOL;

    if (mail($to, $s, $m, $h)) {
        echo "success";
    } else {
        echo "there is a problem";
    }

}
?>