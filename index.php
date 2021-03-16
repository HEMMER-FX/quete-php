<?php 
$messageSecret = "0@sn9sirppa@#?ia'jgtvryko1";
    $keyNumber = strlen($messageSecret)/2;
    $keyNumber = substr($messageSecret, 5, $keyNumber);
    $keyNumber = str_replace('@#?', ' ', $keyNumber);
    $messageSecret = strrev($keyNumber);
    echo $messageSecret;

    $messageSecret = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
    $keyNumber = strlen($messageSecret)/2;
    $keyNumber = substr($messageSecret, 5, $keyNumber);
    $keyNumber = str_replace('@#?', ' ', $keyNumber);
    $messageSecret = strrev($keyNumber);
    echo $messageSecret;

    $messageSecret = "aopi?sgnirts@#?sedhtg+p9l!";
    $keyNumber = strlen($messageSecret)/2;
    $keyNumber = substr($messageSecret, 5, $keyNumber);
    $keyNumber = str_replace('@#?', ' ', $keyNumber);
    $messageSecret = strrev($keyNumber);
    echo $messageSecret;
?>
