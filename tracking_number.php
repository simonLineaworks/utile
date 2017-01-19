<?php

$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * 
FROM  `wp_postmeta` 
WHERE  `meta_key` LIKE  'tracking_number'
ORDER BY  `meta_id` DESC 
LIMIT 0 , 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo   $row["meta_key"]. " " . $row["meta_value"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>