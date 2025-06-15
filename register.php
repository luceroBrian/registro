<?php
 
    if (isset($_POST['enviar'])) {
        if (!empty($_POST['email']) && !empty($_POST['name'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $header = "From:  noreply@gmail.com " . "\r\n";
            $header.= "Reply-To : noreply@gmail.com" . "\r\n";
            $header.= "X-Mailer: PHP/" . phpversion();
            $mail = @mail($email,$header);
            if ($mail) {
                echo "enviado";
            }
        }
    }