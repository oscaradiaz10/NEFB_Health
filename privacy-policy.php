<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEFB Health Plans - FAQ</title>

    <?php include 'includes/links.php'; ?>
 
</head>

<body>

<?php 
    echo $_SERVER['REQUEST_URI'];
    include 'includes/main-menu.php';
?>

<main class="container">
    <div class="row gx-5">
        <div class="col-12">
            <h1>Terms & Conditions</h1>
        </div>
        <div class="col-12 agent-cto">
            <h3>Find an Agent</h3>
            <p>Farm Bureau Financial Services agents are equipped and ready to provide you a variety of health care coverage options.</p>
            <button type="button" class="btn btn-primary">
                <a href="https://www.fbfs.com/find-an-agent" target="_blank">Find an Agent</a>
            </button>
        </div>
    </div>
</main>

<?php include 'includes/components/call-to-action-jumbotron.php'; ?>

<?php include 'includes/footer.php'; ?>

</body>
</html>