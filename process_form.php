<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = "health@nefb.org";
    $subject = "New Online Message from nefbhealth.com";
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $zipCode = htmlspecialchars($_POST['zipCode']);
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $newClient = htmlspecialchars($_POST['newClient']);
    $helpText = htmlspecialchars($_POST['helpText']);

    if (!$email) {
        http_response_code(400);
        echo "Invalid email address.";
        exit;
    }

    // Construct an HTML email
    $message = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; padding: 25px; background-color: rgba(228, 237, 238, .5 ); border-radius: 15px;}
            h2 { color: #043536; }
            p { margin: 5px 0; }
            .label {font-weight: bold; color: #555; }
            .value {color: #000; }
        </style>
    </head>
    <body>
        <h2>You have a new message from NEFBHealth.com</h2>
        <p><span class='label'>Name:</span> <span class='value'>$firstName $lastName</span></p>
        <p><span class='label'>Zip Code:</span> <span class='value'>$zipCode</span></p>
        <p><span class='label'>Phone Number:</span> <span class='value'>$phoneNumber</span></p>
        <p><span class='label'>Email:</span> <span class='value'>$email</span></p>
        <p><span class='label'>New Client:</span> <span class='value'>$newClient</span></p>
        <p><span class='label'>Message:</span> <span class='value'>$helpText</span></p>
    </body>
    </html>
    ";

    // Set content-type for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo "Message sent successfully.";
    } else {
        http_response_code(500);
        echo "Failed to send the message.";
    }
} else {
    http_response_code(403);
    echo "Invalid request method.";
}
?>