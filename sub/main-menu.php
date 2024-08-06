<nav class="navbar navbar-expand-xl navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="../index.php">
            <img src="../media/Logos/NEFBHP_Horizontal_Color.svg" width="290" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-stacked" id="navbarNav">
            <!-- First list of links -->
            <ul class="secondary-nav d-flex">
                <li class="nav-item">
                    <a class="sec-nav-link" href="../forms.php">Forms</a>
                </li>
                <li class="nav-item">
                    <a class="sec-nav-link" href="../find-a-provider.php">Find a Provider</a>
                </li>
                <li class="nav-item">
                    <a class="sec-nav-link" href="#">Pay Your Premium</a>
                </li>
                <li class="nav-item">
                    <a class="sec-nav-link" href="../online-portal.php">Online Portal</a>
                </li>
                <li class="nav-item">
                    <a class="sec-nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="sec-nav-link" href="#"><i class="bi bi-facebook"></i></a>
                </li>
            </ul>
          
            <!-- Second list of links and search form -->
            <ul class="navbar-nav d-flex ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/quote-apply.php">Quote/Apply</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/individual-family-plans.php">Individual & Family</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/why-us.php">Why Us?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/education.php">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/wellness.php">Wellness</a>
                </li>
                <!-- <li class="nav-item">
                    Search form 
                    <form class="d-flex ms-auto">
                        <input type="text" class="form-control me-2" id="search" placeholder="Search..." aria-label="Search" style="width: 140px;">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        <div id="result" class="mt-3"></div>
                    </form>
                </li>-->
            </ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function(){
        $('#search').on('input', function(){
            var query = $(this).val();
            if (query.length > 0) {
                $.ajax({
                    url: 'search.php',
                    method: 'POST',
                    data: { query: query },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            } else {
                $('#result').html('');
            }
        });
    });
</script>