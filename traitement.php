<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/PHPMailer.php';

if (isset($_POST['submitContact'])) {
    $nom_complet = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $sujet = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $redirect_page = htmlspecialchars($_POST['redirect']); // Get the redirect page

    // Create an instance; passing 'true' enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                      // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                 // Enable SMTP authentication
        $mail->Username   = 'contact.ajmc@gmail.com';              // SMTP username
        $mail->Password   = 'rvwnzjzobwvmiidg';                    // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
        $mail->Port       = 587;                                  // TCP port to connect to

        //Recipients
        $mail->setFrom('contact.ajmc@gmail.com', 'Service de Contact');
        $mail->addAddress('assoc.jmc@gmail.com');               // Add a recipient

        // Email content
        $mail->isHTML(true); 
        $mail->Subject = 'Nouveau message - Formulaire de contact AJMC';
        $mail->Body    = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Nouveau message - Formulaire de contact AJMC</title>
            <style>
                body { font-family: Arial, sans-serif; margin: 0; padding: 0; color: #333; }
                .container { width: 80%; margin: auto; padding: 20px; background-color: #f4f4f4; }
                .header { background-color: #053529; padding: 10px; text-align: center; color: #fff; }
                .header h1 { margin: 0; }
                .content { padding: 20px; background-color: #fff; border: 1px solid #ddd; border-radius: 5px; }
                .content h3 { margin-top: 0; color: #053529; }
                .content h4 { margin: 10px 0; }
                .footer { padding: 10px; background-color: #f4f4f4; text-align: center; font-size: 0.9em; color: #666; }
                .btn { display: inline-block; padding: 5px 10px; margin: 10px; text-decoration: none; color: #fff; background-color: #053529; border-radius: 5px; }
                .btn:hover { background-color: #053529; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h1>Nouveau message - Formulaire de contact AJMC</h1>
                </div>
                <div class="content">
                    <h3>Les informations de l\'expéditeur :</h3>
                    <h4>Nom Complet : '.$nom_complet.'</h4>
                    <h4>Email : '.$email.'</h4>
                    <h4>Sujet : '.$sujet.'</h4>
                    <h4>Message : </h4>
                    <p style="font-size: 28px">'.$message.'</p>
                    <p>Pour répondre au message <a href="mailto:'.$email.'?subject=Re: '.$sujet.'" class="btn"><span style="color: white">Cliquez içi</span></a></p>
                </div>
                <div class="footer">
                    <p>58 mail des Charmilles, 10000 Troyes</p>
                </div>
            </div>
        </body>
        </html>';

        // Send email and redirect based on the result
        if ($mail->send()) {
            header("Location: $redirect_page?status=success");
        } else {
            header("Location: $redirect_page?status=error");
        }
        exit();
    } catch (Exception $e) {
        // Redirect in case of error
        header("Location: $redirect_page?status=error");
        exit();
    }
} else {
    // Redirect if the form is not submitted
    header('Location: index.php');
    exit();
}
?>
