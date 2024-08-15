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
    <div class="row gx-5">
        <div class="col-lg-8">
            <h1>Quote / Apply</h1>
            <p>What are you shopping for today? We have a plan you need at a cost you can afford.</p>
            <h2>Individual and Family Plans</h2>
            <p>Our plans have a broad range of coverage plans to suit just about everyone's particular health care needs for level of coverage, deductibles, co-pays, out-of-pocket payments, preventative health benefits and more.</p>
            <div class="alert alert-info" role="alert">
            <strong>NOTICE:</strong> Online forms will be available October 1, 2024
            </div>
            <button type="button" class="btn btn-primary" disabled>
                <a href="#" target="_blank">Get a Quote/Apply Now</a>
            </button>
            
            <hr>

            <h2>Dental Vision</h2>
            <p>Nebraska Farm Bureau Health Plans has bundled dental and vision coverage, exclusively for Farm Bureau members, in one affordable, convenient plan for individuals or families.</p>
            <button type="button" class="btn btn-primary" disabled>
                <a href="#" target="_blank">Get a Quote/Apply Now</a>
            </button>
        </div>
        <div class="col-lg-4 col-sm-12 agent-cto">
            <h3>Find an Agent</h3>
            <p>Farm Bureau Financial Services agents are equipped and ready to provide you a variety of health care coverage options.</p>
            <button type="button" class="btn btn-primary">
                <a href="https://www.fbfs.com/find-an-agent" target="_blank">Find an Agent</a>
            </button>
        </div>
    </div>
</main>

<?php include 'sub/components/call-to-action-jumbotron.php'; ?>

<?php include 'sub/footer.php'; ?>

</body>
</html>