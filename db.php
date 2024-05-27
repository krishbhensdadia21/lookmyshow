
<?php
    $con = mysqli_connect("localhost", "root", "", "movie_booking");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
