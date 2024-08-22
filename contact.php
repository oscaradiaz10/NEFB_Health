<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEFB Health Plans - Contact Us</title>

    <?php include 'sub/links.php'; ?>

<!-- Gcaptcha -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function onSubmit(token) {
        document.getElementById("contact-form").submit();
    }
</script>

<script>
$(document).ready(function() {
    $('#contact-form').on('submit', function() {
        $('.output_message').text('Sending...'); 

        var formData = $(this); // Create a FormData object
        $.ajax({
            url: form.attr('sub/mail.php'), // Form action URL
            method: form.attr('method'),
            data: form.serialize(),
            success: function(response) {
                if (response == 'success') {
                    $('.output_message').html('<div class="alert alert-success" role="alert">Thank you for your message. We will get back to you soon!</div>');
                } else {
                    $('.output_message').html('<div class="alert alert-warning" role="alert">There was an error with your submission. Please try again.</div>');
                }
            },
            error: function(xhr, status, error) {
                $('.output_message').html('<div class="alert alert-danger" role="alert">There was an error processing your request. Please try again later.</div>');
            }
        });
    });
});
</script>

</head>

<body>

<?php include 'sub/main-menu.php'; ?>

<main class="container">
    <div class="row gx-5">
        <div class="col-lg-8">
            <h1>Contact Us</h1>
            <p>P.O. Box 1424<br>Columbia, TN 38402-1424</p>
            <p>Toll Free: <a href="tel:866-544-2232">866-544-2232</a></p>
            <p>Email: <a href="mailto:health@nefb.org">health@nefb.org</a></p>
        </div>
        <div class="col-lg-4 col-sm-12">
            <h3>Additional Information</h3>
            <ul class="side-column-list">
                <li><a href="faq.php"><i class="bi bi-arrow-bar-right"></i> FAQ</a></li>
                <li><a href="https://ne.fbiris.com/Order" target="_blank"><i class="bi bi-arrow-bar-right"></i> Farm Bureau Membership</a></li>
            </ul>
            <hr>
            <h3>Find an Agent</h3>
            <p>Farm Bureau Financial Services agents are equipped and ready to provide you a variety of health care coverage options.</p>
            <button type="button" class="btn btn-primary">
                <a href="https://www.fbfs.com/find-an-agent" target="_blank">Find an Agent</a>
            </button>
        </div>
    </div>
</main>

<div class="container">
    <div class="row">
        <form id="contact-form" action="sub/mail.php" method="POST">
            <div class="row gy-5">
                <div class="col-lg-5 col-sm-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="firstName" placeholder="First Name" required data-error="First name is required" name="firstName">
                        <label for="firstName">First Name</label>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="lastName" placeholder="Last Name" required data-error="Last name is required" name="lastName">
                        <label for="lastName">Last Name</label>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="zipCode" placeholder="Zip Code" required data-error="Zip code is required" name="zipCode">
                        <label for="zipCode">Zip Code</label>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number" required data-error="Phone number is required" name="phoneNumber">
                        <label for="phoneNumber">Phone Number</label>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="emailAddress" placeholder="Email Address" required data-error="Email address is required" name="emailAddress">
                        <label for="emailAddress">Email Address</label>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-floating mb-3">
                        <fieldset class="row mb-3">
                            <label for="gridRadios" class="col-form-label col-sm-2 pt-0">Are you a:</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="New Client">
                                    <label class="form-check-label" for="gridRadios1">New Client</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Existing Client">
                                    <label class="form-check-label" for="gridRadios2">Existing Client</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Please answer the question" id="whatIsYourQuestion" name="whatIsYourQuestion" required style="height: 140px"></textarea>
                        <label for="whatIsYourQuestion">How can we help you?</label>
                    </div>
                </div>
            </div>
            <button type="submit" value="Send" name="send" class="btn btn-primary g-recaptcha" data-sitekey="6LfXMyYqAAAAAPFPvfnnzDR3Bor8nBHD55MXMWPX" data-callback="onSubmit">Submit</button>
            <span class="output_message"></span>
        </form>
    </div>
</div>

<?php include 'sub/components/call-to-action-jumbotron.php'; ?>

<?php include 'sub/footer.php'; ?>

</body>
</html>