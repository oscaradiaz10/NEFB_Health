<?php
//error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection settings
$host = "ns1.bluehost.com";
$user = "kohyhymy_NEFB-HP-db";
$password = "3L3dd4!ThDKt94";
$dbname = "kohyhymy_Search";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if (isset($_POST['query'])) {
    $query = $conn->real_escape_string($_POST['query']);
    $sql = "SELECT * FROM your_table_name WHERE your_column_name LIKE '%$query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="list-group-item">' . $row['your_column_name'] . '</div>';
        }
    } else {
        echo '<div class="list-group-item">No results found</div>';
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEFB Health Plans - Search Results</title>

    <?php include 'sub/links.php'; ?>

</head>

<body>

<main class="container">
<div class="container mt-5">
        <h1>Search Results for "<?php echo htmlspecialchars($query); ?>"</h1>
        <ul class="list-group">
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<li class='list-group-item'>" . $row['your_column'] . "</li>";
                }
            } else {
                echo "<li class='list-group-item'>No results found</li>";
            }
            $conn->close();
            ?>
        </ul>
    </div>
</main>

<?php include 'sub/footer.php'; ?>

</body>
</html>
