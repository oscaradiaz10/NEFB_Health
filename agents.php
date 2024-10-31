<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEFB Health Plans - Agents</title>

    <?php include 'sub/links.php'; ?>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

<?php include 'sub/main-menu.php'; ?>

<div class="container my-4">
    <h2>Find an Agent</h2>
    <form id="agentSearchForm">
        <div class="mb-3">
            <label for="state" class="form-label">State Abbreviation</label>
            <input type="text" class="form-control" id="state" required>
        </div>
        <div class="mb-3">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="text" class="form-control" id="latitude" required>
        </div>
        <div class="mb-3">
            <label for="longitude" class="form-label">Longitude</label>
            <input type="text" class="form-control" id="longitude" required>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    <div id="results" class="mt-4"></div>
</div>

<script>
    $(document).ready(function() {
        $('#agentSearchForm').on('submit', function(event) {
            event.preventDefault();

            // Get form data
            const usStateAbbreviation = $('#state').val();
            const latitude = $('#latitude').val();
            const longitude = $('#longitude').val();

            // Select the endpoint and API key
            const endpoint = 'https://t-ebexternal.fbfs.com/fbfsservices/api/agents/search/ByLocation'; // QA endpoint
            const apiKey = '4a0c931f-2ed6-4ae1-b1ee-955c2f5e4c3c'; // QA API key

            // Make the API call
            $.ajax({
                url: endpoint,
                method: 'GET',
                dataType: 'json',
                headers: {
                    'Authorization': apiKey // Pass the API key in the header
                },
                data: {
                    usStateAbbreviation: usStateAbbreviation,
                    latitude: latitude,
                    longitude: longitude,
                    onlyHealthBenefitCertified: true
                },
                success: function(data) {
                    console.log('API Response:', data); // Log response to troubleshoot
                    displayResults(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#results').html('<div class="alert alert-danger">Failed to fetch agent data. Please try again later.</div>');
                    console.error('Error fetching data:', textStatus, errorThrown);
                }
            });
        });

        // Function to display the results
        function displayResults(data) {
            const resultsContainer = $('#results');
            resultsContainer.empty(); // Clear previous results if any

            if (data.length > 0) {
                data.forEach(agent => {
                    resultsContainer.append(`
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">${agent.name}</h5>
                                <p class="card-text">Location: ${agent.location}</p>
                                <p class="card-text">Certification: ${agent.certification ? 'Certified' : 'Not Certified'}</p>
                            </div>
                        </div>
                    `);
                });
            } else {
                resultsContainer.html('<p>No agents found for the provided location and criteria.</p>');
            }
        }
    });
</script>

<?php include 'sub/components/call-to-action-jumbotron.php'; ?>

<?php include 'sub/footer.php'; ?>

</body>
</html>