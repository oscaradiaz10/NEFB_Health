<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Sanitize and validate input
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $phoneNumber = filter_input(INPUT_POST, 'phoneNumber');
    $emailAddress = filter_input(INPUT_POST, 'emailAddress');
    $zipCode = filter_input(INPUT_POST, 'zipCode');    
    $gridRadios = isset($_POST['gridRadios']) ? $_POST['gridRadios'] : 'None';
    $whatIsYourQuestion = filter_input(INPUT_POST, 'whatIsYourQuestion');

    //Email details
    $to = "oscard@nefb.org";
    $subject = "New Message from " . $firstName . " " . $lastName;
    $headers = "From: " . $emailAddress . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    //Construct email message
    $body = "
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
                    <p><strong>Email Address:</strong> $emailAddress</p>
                    <p><strong>Zip code:</strong> $zipCode</p>
                    <p><strong>Are you a:</strong> $gridRadios</p>
                    <p><strong>What is your question?</strong><br />$whatIsYourQuestion</p>
                </div>
            </div>
        </body>
        </html>";

    //Send email
    $send_email = mail($to, $subject, $body, $headers);
        
    echo ($send_email) ? 'success' : 'error';
}


// if (isset($_REQUEST['firstName'],$_REQUEST['emailAddress'])) {

//     // Sanitize and validate input
//     $firstName =  $_REQUEST['firstName'];
//     $lastName =  $_REQUEST['lastName'];
//     $phoneNumber =  $_REQUEST['phoneNumber'];
//     $emailAddress =  $_REQUEST['emailAddress'];
//     $zipCode =  $_REQUEST['zipCode'];
//     $gridRadios =  $_REQUEST['gridRadios'];
//     $whatIsYourQuestion =  $_REQUEST['whatIsYourQuestion'];

//     // Email details
//     $to = "oscard@nefb.org"; // Replace with your email address
//     $subject = "NEFBH Website - New Message form " . $firstName . " " . $lastName;
//     $headers = "From: ".$firstName." <".$emailAddress."> \r\n";
//     $headers .= "MIME-Version: 1.0" . "\r\n";
//     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//     // Construct email message
//     $body = "
//         <html>
//         <head>
//         <style>
//             body { font-family: Arial, sans-serif; line-height: 1.6; }
//             .container { width: 90%; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 15px; background-color: #f7f7f7; }
//             .header { background-color: #007bff; color: white; padding: 10px; text-align: left; border-radius: 10px 10px 0 0; }
//             .content { padding: 20px; }
//             .content p { margin: 0 0 10px; }
//         </style>
//         </head>
//         <body>
//             <div class='container'>
//                 <div class='header'>
//                     <h2>Contact Form Submission</h2>
//                 </div>
//                 <div class='content'>
//                     <p><strong>Name:</strong> $firstName $lastName</p>
//                     <p><strong>Phone Number:</strong> $phoneNumber</p>
//                     <p><strong>Email Address:</strong> $emailAddress</p>
//                     <p><strong>Zip code:</strong> $zipCode</p>
//                     <p><strong>Client Type:</strong> $gridRadios</p>
//                     <p><strong>Question:</strong><br />$whatIsYourQuestion</p>
//                 </div>
//             </div>
//         </body>
//         </html>";

//     // Send email
//     $send_email = mail($to, $subject, $body, $headers);

//     // Return response
//     echo ($send_email) ? 'success' : 'error';
// }
?>