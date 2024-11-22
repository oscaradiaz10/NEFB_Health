<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEFB Health Plans - Agents</title>

    <?php include 'sub/links.php'; ?>

</head>

<body>

<?php include 'sub/main-menu.php'; ?>

<div class="container">
    <h1>API Integration Example</h1>
    <form id="api-form">
        <div class="form-group">
            <label for="zipCode">ZIP Code</label>
            <input type="text" class="form-control" id="zipCode" required>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <div id="api-data"></div>
</div>

<?php include 'sub/components/call-to-action-jumbotron.php'; ?>

<?php include 'sub/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    $('#api-form').on('submit', function(event) {
        event.preventDefault();

        const apiKey = 'b7e04136-c5bb-4f5a-8a90-7f4b889a17d9'; // Replace with your actual API key
        const zipCode = $('#zipCode').val();
        const onlyHealthBenefitCertified = true;

        const apiUrl = `https://q-ebexternal.fbfs.com/fbfsservices/api/agents/search/ByLocation?zipCode=${zipCode}&onlyHealthBenefitCertified=${onlyHealthBenefitCertified}`;

        $.ajax({
            url: apiUrl,
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${apiKey}`
            },
            success: function(data) {
                $('#api-data').html('<pre>' + JSON.stringify(data, null, 2) + '</pre>');
            },
            error: function() {
                $('#api-data').html('<p>Error fetching data.</p>');
            }
        });
    });
});
</script>

</body>
</html>