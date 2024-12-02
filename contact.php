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

<div class="container mt-5">
    <form id="contactForm" class="needs-validation" novalidate>
        <!-- First Row -->
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="form-floating">
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                    <label for="firstName">First Name</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating">
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                    <label for="lastName" class="form-label">Last Name</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating">
                <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Zip Code" required>
                <label for="zipCode" class="form-label">Zip Code</label>
                </div>
            </div>
        </div>
        <!-- Second Row -->
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
                    <label for="phoneNumber" class="form-label">Phone Number</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                    <label for="email" class="form-label">Email Address</label>
                </div>
            </div>
        </div>
        <!-- Third Row -->
        <div class="row mb-5">
            <label class="form-label">Are you a new client?</label>
            <div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="newClientYes" name="newClient" value="Yes" required>
                    <label for="newClientYes" class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="newClientNo" name="newClient" value="No" required>
                    <label for="newClientNo" class="form-check-label">No</label>
                </div>
            </div>
        </div>
        <!-- Fourth Row -->
        <div class="mb-5">
            <div class="form-floating">
                <textarea class="form-control" id="helpText" name="helpText" rows="4" placeholder="How can we help you?" style="height: 100px;"></textarea>
                <label for="helpText" class="form-label">How can we help you?</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
    <div id="formResponse" class="mt-3"></div>
</div>

<?php include 'sub/components/call-to-action-jumbotron.php'; ?>

<?php include 'sub/footer.php'; ?>

<script>
    // Client-side validation and AJAX submission
    $(document).ready(function () {
        $('#contactForm').on('submit', function (e) {
            e.preventDefault();
            if (!this.checkValidity()) {
                this.classList.add('was-validated');
                return;
            }
            $.ajax({
                url: 'process_form',
                type: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    $('#formResponse').html('<div class="alert alert-success">Your message was submitted successfully! We will get back to you as soon as possible.</div>');
                    $('#contactForm')[0].reset();
                },
                error: function () {
                    $('#formResponse').html('<div class="alert alert-danger">An error occurred. Please try again later.</div>');
                }
            });
        });
    });
</script>

</body>
</html>