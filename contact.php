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

</head>

<body>

<?php include 'sub/main-menu.php'; ?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <h1>Contact Us</h1>
            <p>P.O. Box 1424<br>Columbia, TN 38402-1424</p>
            <p>Toll Free: <a href="tel:866-544-2232">866-544-2232</a></p>
            <p>Email: <a href="mailto:health@nefb.org">health@nefb.org</a></p>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="side-column">
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
    </div>
</main>

<div class="container">
    <div class="row">
        <form id="contact-form" action="sub/mail.php" method="POST" role="form" novalidate>
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
            <button type="submit" value="Send" name="send" class="btn btn-primary g-recaptcha" data-sitekey="6LfXMyYqAAAAAPFPvfnnzDR3Bor8nBHD55MXMWPX" ata-callback="onSubmit">Submit</button> <!--Add class for reCAPTCHA: g-recaptcha data-sitekey="6LfXMyYqAAAAAPFPvfnnzDR3Bor8nBHD55MXMWPX" -->
            <span class="output_message"></span>
        </form>
    </div>
</div>

<?php include 'sub/components/call-to-action-jumbotron.php'; ?>

<?php include 'sub/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function () {
    $('#contact-form').on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        var form = $(this);

        // Serialize form data
        var formData = form.serialize();

        // Get the reCAPTCHA response token
        var recaptchaResponse = grecaptcha.getResponse();

        if (recaptchaResponse.length === 0) {
            $('.output_message').html('Please complete the reCAPTCHA.');
            return;
        }

        // Add the reCAPTCHA response to the form data
        formData += '&g-recaptcha-response=' + recaptchaResponse;

        // Send form data via Ajax
        $.ajax({
            url: form.attr('action'), // Use the form's action attribute value
            type: 'POST',
            data: formData,
            success: function (response) {
                if (response.success) {
                    $('.output_message').html('<span class="success">Your message has been sent!</span>');
                    form[0].reset(); // Clear the form on success
                } else {
                    $('.output_message').html('<span class="error">Error: ' + response.message + '</span>');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('.output_message').html('<span class="error">An error occurred. Please try again later.</span>');
            }
        });
    });
});
</script>

</body>
</html>