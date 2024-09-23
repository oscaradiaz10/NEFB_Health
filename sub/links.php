<!--  FAVICON  -->
<link rel="icon" type="image/png" sizes="16x16"  href="../media/favicon.png">

<!--  MAIN CSS  -->
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/tables.css">

<!-- jQuery  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--  BOOTSTRAP 5  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<!--  GOOGLE FONTS  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3TTWEPMEWD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3TTWEPMEWD');
</script>

<!-- Search Field -->
<script>
        document.getElementById('searchInput').addEventListener('input', function () {
            const searchTerm = this.value.toLowerCase();
            const paragraphs = document.querySelectorAll('#content p');
            const searchResults = document.getElementById('searchResults');
            
            // Clear previous results
            searchResults.innerHTML = '';

            paragraphs.forEach(paragraph => {
                if (paragraph.textContent.toLowerCase().includes(searchTerm)) {
                    // Create a new result element
                    const resultItem = document.createElement('div');
                    resultItem.classList.add('alert', 'alert-info'); // Bootstrap styling
                    resultItem.textContent = paragraph.textContent;

                    // Append the result to the results div
                    searchResults.appendChild(resultItem);
                }
            });

            // If no results are found, show a message
            if (searchResults.innerHTML === '') {
                searchResults.innerHTML = '<p class="alert alert-warning">No results found.</p>';
            }
        });
    </script>