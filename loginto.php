<?php
    $con=mysqli_connect("localhost","root","");

    $db=mysqli_select_db($con,"movie_booking");

    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $q = "SELECT * FROM account WHERE email='$email' AND password='$pass'";
    $ans=mysqli_query($con,$q);

    if (mysqli_num_rows($ans)>0)
    {
        header("Location: index.php"); 
        exit();
    }
    else
    {
        echo "<html>
                <body>
                    <script>
                        alert('Invalid information');
                        window.location.href = 'login.php';
                    </script>
                </body>
             </html>";
    }
?>