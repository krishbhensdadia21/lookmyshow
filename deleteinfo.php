
<?php
    $con = mysqli_connect("localhost", "root", "", "movie_booking");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['email']))
    {
        $email = $_POST['email'];
        $q = "DELETE FROM account WHERE email='$email'";

        if (mysqli_query($con, $q)) {
            echo "<script>alert('User deleted successfully');</script>";
        } else {
            echo "<script>alert('Error deleting user');</script>";
        }
    }

    mysqli_close($con);

    // Redirect back to the admin page
    header("Location: admin.php");
exit();
?>
