
<?php
    $con = mysqli_connect("localhost", "root", "", "movie_booking");

    if(!$con)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['old_email']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['new_password']))
    {
        $old_email = $_POST['old_email'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $new_password = $_POST['new_password'];

        
        $q = "UPDATE account SET uname='$username', email='$email', password='$new_password' WHERE email='$old_email'";

        if (mysqli_query($con, $q)) {
            echo "<script>alert('Information updated successfully');</script>";
        } else {
            echo "<script>alert('Error updating information');</script>";
        }

        mysqli_close($con);

    
        echo "<script>window.location.href='admin.php';</script>";
    } 
    else
    {
        echo "Invalid request.";
    }
?>
