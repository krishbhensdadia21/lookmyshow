
<?php
    // Enable error reporting for debugging
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mname = $_POST["mname"];
        $memail = $_POST["memail"];
        $mpassword = $_POST["mpassword"];
        $showtime = $_POST["showtime"];
        $seat_number = $_POST["seat_number"];
        $ticket = $_POST["ticket"];

        include("db.php");

        // Prevent SQL Injection
        $mname = mysqli_real_escape_string($con, $mname);
        $memail = mysqli_real_escape_string($con, $memail);
        $mpassword = mysqli_real_escape_string($con, $mpassword);
        $showtime = mysqli_real_escape_string($con, $showtime);
        $seat_number = mysqli_real_escape_string($con, $seat_number);
        $ticket = mysqli_real_escape_string($con, $ticket);

        $query = "INSERT INTO bookings (name, email, password, showtime, seat_number, tickets) 
                  VALUES ('$mname', '$memail', '$mpassword', '$showtime', '$seat_number', '$ticket')";
        
        if (mysqli_query($con, $query)) {
            echo "<script>alert('Booking successful!');</script>";
        } else {
            echo "<script>alert('Error in booking. Please try again.');</script>";
        }

        // Make sure no output is sent before this
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Invalid request.');</script>";
    }
?>
