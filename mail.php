<?php
// Enable error reporting for debugging (remove in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Google reCAPTCHA secret key (replace with your actual secret key)
$secretKey = '6LfXMyYqAAAAAPFPvfnnzDR3Bor8nBHD55MXMWPX';

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Get the reCAPTCHA response token from the form submission
    $recaptchaResponse = $_POST['recaptcha_response'];

    // Verify reCAPTCHA with Google's API
    $recaptchaURL = 'https://www.google.com/recaptcha/api/siteverify';
    $response = file_get_contents($recaptchaURL . '?secret=' . $secretKey . '&response=' . $recaptchaResponse);
    $responseKeys = json_decode($response, true);

    // Check if reCAPTCHA validation was successful
    if (isset($responseKeys['success']) && $responseKeys['success'] === true) {
    
        // Sanitize form inputs
        $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
        $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
        $zipCode = filter_input(INPUT_POST, 'zipCode', FILTER_SANITIZE_STRING);
        $phoneNumber = filter_input(INPUT_POST, 'phoneNumber', FILTER_SANITIZE_STRING);
        $emailAddress = filter_input(INPUT_POST, 'emailAddress', FILTER_VALIDATE_EMAIL);
        $clientType = filter_input(INPUT_POST, 'gridRadios', FILTER_SANITIZE_STRING);
        $question = filter_input(INPUT_POST, 'whatIsYourQuestion', FILTER_SANITIZE_STRING);

        if (!$firstName || !$lastName || !$emailAddress || !$zipCode || !$phoneNumber || !$clientType || !$question) {
            echo json_encode(['status' => 'error', 'message' => 'Missing or invalid input.']);
            exit;
        }

    // Email setup
    $to = "oscard@nefb.org"; // Replace with your email
    $subject = "New Message from NEFBHP Website";
    $headers = "From: $emailAddress\r\n";
    $message = "
        <html>
        <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; }
            .container { width: 90%; margin: 0 auto; padding: 20px; border: 1px solid rgb(230, 230, 230); border-radius: 15px; background-color: rgb(200, 200, 200); }
            .header { background-color: rgb(171, 42, 61); color: white; padding: 10px; text-align: left; border-radius: 10px 10px 0 0; }
            .content { padding: 20px; }
            .content p { margin: 0 0 10px; }
        </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <img src='https://nefbhp.com/media/Logos/NEFBHP_Horizontal_Color.svg' width='210px' alt='NEFBHP Logo'>
                </div>
                <div class='content'>
                    <p><strong>Name:</strong> $firstName $lastName</p>
                    <p><strong>Phone Number:</strong> $phoneNumber</p>
                    <p><strong>Zip code:</strong> $zipCode</p>
                    <p><strong>Email Address:</strong> $emailAddress</p>
                    <p><strong>Are you a:</strong> $clientType</p>
                    <p><strong>What is your question?</strong><br />$question</p>
                </div>
            </div>
        </body>
        </html>
    ";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Message sent successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to send the message. Please try again later.']);
    }

} else {
    // reCAPTCHA validation failed
    echo json_encode(['status' => 'error', 'message' => 'reCAPTCHA validation failed.']);
}

} else {
// If not a POST request, return an error
echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>