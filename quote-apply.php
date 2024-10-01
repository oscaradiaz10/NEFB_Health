<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta property="og:title" content="NEFB Health Plans | Health Coverage is Complicated - Let Us Help You!">
    <meta property="og:image" content="media/Logos/NEFBHP_Horizontal_Color.png">
    <meta property="og:description" content="Since 1917, Nebraska Farm Bureau has been trusted for its dedication to enhancing the quality of life throughout the state. Nebraska Farm Bureau Health Plans are an extension of that trust, service and membership value.">

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

<div class="bg-image d-flex justify-content-center align-items-center single-hero" style="background-image: url('media/WebIMG1.jpg'); width:100%; background-size: cover;">
    <h1 class="headline">Quote / Apply</h1>
</div>

<main class="container">
    <div class="row">
        <div class="col-lg-8 col-sm-12">
            <h2>What are you shopping for today?</h2>
            <p>We have a plan you need at a cost you can afford.</p>
            <h2>Individual and Family Plans</h2>
            <p>Our plans have a broad range of coverage plans to suit just about everyone's particular health care needs for level of coverage, deductibles, co-pays, out-of-pocket payments, preventative health benefits and more.</p>
            <button type="button" class="btn btn-primary">
                <a href="https://fbhp.my.site.com/shopper/s/?state=NE" target="_blank">Get a Quote/Apply Now</a>
            </button>
            <hr>
            <h2>Dental Vision</h2>
            <p>Nebraska Farm Bureau Health Plans has bundled dental and vision coverage, exclusively for Farm Bureau members, in one affordable, convenient plan for individuals or families.</p>
            <button type="button" class="btn btn-primary">
                <a href="https://fbhp.my.site.com/shopper/s/?state=NE" target="_blank">Get a Quote/Apply Now</a>
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