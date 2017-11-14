<?php
if (isset($_POST['send'])) {
    $to = 'janie.mobacker@live.se';
    $subject = 'Message from Portfolio!';
    $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
    $message .= 'Email: ' .$_POST['email'] . "\r\n\r\n";
    $message .= 'Message: ' .$_POST['meddelande'] . "\r\n\r\n";
    echo $message;
}

?>

<!DOCTYPE html>
    <html>
    <head>
         <title>Galleri</title>
    </head>
    <body>
        <h1>Thankyou</h1>
        <h1>oooops</h1>
    </body>
    </html>