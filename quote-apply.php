<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEFB Health Plans - Quote & Apply</title>

    <?php include 'sub/links.php'; ?>
 
</head>

<body>
<!--  POPOVERS -->
<script>
var popover = new bootstrap.Popover(document.querySelector('.popover-dismiss'), {
  trigger: 'focus'
})
</script>

<?php include 'sub/main-menu.php'; ?>

<main class="container">
    <div class="row">
        <div class="col-lg-8 col-sm-12">
            <h1>Quote / Apply</h1>
            <p>What are you shopping for today? We have a plan you need at a cost you can afford.</p>
            <h2>Individual and Family Plans</h2>
            <p>Our plans have a broad range of coverage plans to suit just about everyone's particular health care needs for level of coverage, deductibles, co-pays, out-of-pocket payments, preventative health benefits and more.</p>
            <div class="alert alert-info" role="alert">
                <strong>NOTICE:</strong> Online form will be available October 1, 2024
            </div>
            <button type="button" class="btn btn-primary" disabled>
                <a href="#" target="_blank">Get a Quote/Apply Now</a>
            </button>
            
            <hr>

            <h2>Dental Vision</h2>
            <p>Nebraska Farm Bureau Health Plans has bundled dental and vision coverage, exclusively for Farm Bureau members, in one affordable, convenient plan for individuals or families.</p>
            <div class="alert alert-info" role="alert">
                <strong>NOTICE:</strong> Online form will be available October 1, 2024
            </div>
            <button type="button" class="btn btn-primary" disabled>
                <a href="#" target="_blank">Get a Quote/Apply Now</a>
            </button>
            <hr/>
            <h3>Questions?</h3>
            <p>We're here to help! Call us toll-free at <a href="tel:866-544-2232">866-544-2232</a> or contact your local Farm Bureau Financial Services agent.</p>
        </div>
        <div class="col-lg-4 col-sm-12">
            <?php include 'sub/components/call-to-action-agent.php'; ?>
        </div>
    </div>
</main>

<?php include 'sub/footer.php'; ?>

</body>
</html>