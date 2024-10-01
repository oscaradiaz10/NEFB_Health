<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEFB Health Plans - Pay Your Premium</title>

    <?php include 'sub/links.php'; ?>
 
</head>

<body>

<?php include 'sub/main-menu.php'; ?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <p>Nebraska Farm Bureau Health Plans allows policy holders to pay their premiums online via the payment portal.</p>
            <button type="button" class="btn btn-primary popup" onclick="myFunction('myPopup')">Pay Premium
                <span class="popuptext" id="myPopup">Online payment will be available soon!</span>
                <!-- <a href="#" target="_blank">Pay Online</a> -->
            </button>
            <button type="button" class="btn btn-primary">
                <a href="media/Payment-Instructions.pdf" target="_blank">Payment Instructions</a>
            </button>
        </div>
        <div class="col-lg-4 col-sm-12">
            <?php include 'sub/components/call-to-action-agent.php'; ?>
        </div>
    </div>
</main>

<?php include 'sub/components/call-to-action-jumbotron.php'; ?>

<?php include 'sub/footer.php'; ?>

<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>

</body>
</html>