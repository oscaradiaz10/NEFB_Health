<?php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Google reCAPTCHA secret key
    $secretKey = '6LfXMyYqAAAAAPFPvfnnzDR3Bor8nBHD55MXMWPX';

    // Verify reCAPTCHA response
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $recaptchaResponse;
    $response = file_get_contents($verifyUrl);
    $responseData = json_decode($response);

    if (!$responseData->success) {
        echo json_encode(['success' => false, 'message' => 'reCAPTCHA verification failed.']);
        exit;
    }

    // Validate form fields
    $firstName = strip_tags(trim($_POST['firstName']));
    $lastName = strip_tags(trim($_POST['lastName']));
    $zipCode = strip_tags(trim($_POST['zipCode']));
    $phoneNumber = strip_tags(trim($_POST['phoneNumber']));
    $emailAddress = filter_var(trim($_POST['emailAddress']), FILTER_SANITIZE_EMAIL);
    $question = strip_tags(trim($_POST['whatIsYourQuestion']));
    $clientStatus = $_POST['gridRadios'];

    if (empty($firstName) || empty($lastName) || empty($zipCode) || empty($phoneNumber) || !filter_var($emailAddress, FILTER_VALIDATE_EMAIL) || empty($question)) {
        echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
        exit;
    }

    // Prepare the email
    $to = 'oscard@nefb.org'; // Change this to your email address
    $subject = 'New Contact Form Submission';
    $message = "First Name: $firstName\nLast Name: $lastName\nZip Code: $zipCode\nPhone Number: $phoneNumber\nEmail Address: $emailAddress\nClient Status: $clientStatus\nQuestion: $question";
    $headers = "From: $emailAddress\r\nReply-To: $emailAddress\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'An error occurred while sending the email.']);
    }
}

    // $message = "
    //     <html>
    //     <head>
    //     <style>
    //         body { font-family: Arial, sans-serif; line-height: 1.6; }
    //         .container { width: 90%; margin: 0 auto; padding: 20px; border: 1px solid rgb(230, 230, 230); border-radius: 15px; background-color: rgb(200, 200, 200); }
    //         .header { background-color: rgb(171, 42, 61); color: white; padding: 10px; text-align: left; border-radius: 10px 10px 0 0; }
    //         .content { padding: 20px; }
    //         .content p { margin: 0 0 10px; }
    //     </style>
    //     </head>
    //     <body>
    //         <div class='container'>
    //             <div class='header'>
    //                 <img src='https://nefbhp.com/media/Logos/NEFBHP_Horizontal_Color.svg' width='210px' alt='NEFBHP Logo'>
    //             </div>
    //             <div class='content'>
    //                 <p><strong>Name:</strong> $firstName $lastName</p>
    //                 <p><strong>Phone Number:</strong> $phoneNumber</p>
    //                 <p><strong>Zip code:</strong> $zipCode</p>
    //                 <p><strong>Email Address:</strong> $emailAddress</p>
    //                 <p><strong>Are you a:</strong> $clientType</p>
    //                 <p><strong>What is your question?</strong><br />$question</p>
    //             </div>
    //         </div>
    //     </body>
    //     </html>
    // ";
?>