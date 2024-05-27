<?php
    $con=mysqli_connect("localhost","root","");

    if($con)
    {
        echo "Successfully connected";
    }

    else
    {
        echo "<br>Not connected properly...";
    }

    $db=mysqli_select_db($con,"movie_booking");

    $uname=$_GET['uname'];
    $email=$_GET['email'];
    $pass=$_GET['pass'];

    $q="insert into account values('$uname','$email','$pass')";
    $ans=mysqli_query($con,$q);

    if($ans)
    {
        header("Location: index.php");
        exit();
    }

    mysqli_close($con);
?>