<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEFB Health Plans - Contact Us</title>

    <?php include 'sub/links.php'; ?>

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
        <form class="row gy-5" id="contactForm" action="https://formsubmit.co/8372cfadbfb9604f54c7bfb407ba1c5d" method="POST" role="form">
            <!-- Honeypot -->
            <input type="text" name="_honey" style="display: none;">

            <!-- Disable Captcha -->
            <input type="hidden" name="_captcha" value="true">

            <!-- Subject Line -->
            <input type="hidden" name="_subject" value="New Message from NEFB Health Website!">

            <!-- Auto response -->
            <input type="hidden" name="_autoresponse" value="Thank you for sending your message. We will reply to your message as soon as we can.">

            <div class="col-lg-5 col-sm-12">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="firstName" placeholder="First Name" required data-error="First name is required" name="First&nbsp;Name">
                    <label for="firstName">First Name</label>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" required data-error="Last name is required" name="Last&nbsp;Name">
                    <label for="lastName">Last Name</label>
                </div>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="zipCode" placeholder="Zip Code" required data-error="Zip code is required" name="Zip&nbsp;Code">
                    <label for="zipCode">Zip Code</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number" required data-error="Phone number is required" name="Phone&nbsp;Number">
                    <label for="phoneNumber">Phone Number</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="emailAddress" placeholder="Email Address" required data-error="Email address is required" name="Email&nbsp;Address">
                    <label for="emailAddress">Email Address</label>
                </div>
            </div>

            <div class="col-lg-12">
                <label for="client" class="form-label">Are you a new client?</label>
                <div class="mb-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="clientYes" value="Yes" name="Are&nbsp;you&nbsp;a&nbsp;new&nbsp;client?">
                        <label class="form-check-label" for="clientYes" style="color: black;">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="clientNo" value="No" name="Are&nbsp;you&nbsp;a&nbsp;new&nbsp;client?">
                        <label class="form-check-label" for="clientNo" style="color: black;">No</label>
                    </div>
                </div>
            </div>
                
            <div class="col-lg-12">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Please answer the question" id="whatIsYourQuestion" name="What&nbsp;is&nbsp;your&nbsp;question?" required style="height: 140px"></textarea>
                    <label for="whatIsYourQuestion">How can we help you?</label>
                </div>
            </div>
            <div class="col-lg-3">
                <!-- <input type="hidden" name="_cc" value="health@nefb.org"> -->
                <input type="hidden" name="_template" value="table">
                <button type="submit" value="Send" name="send" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php include 'sub/components/call-to-action-jumbotron.php'; ?>

<?php include 'sub/footer.php'; ?>

</body>
</html>