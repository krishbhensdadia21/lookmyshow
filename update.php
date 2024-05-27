<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie Booking - Home</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="dtemp">
            <div id="dheader">
                <header align="left">
                    <img src="img/look-removebg-preview.png" height="115px" width="180px">
                </header>
            </div>

            <div id="dnav">
                <br>
                <br>
                <nav>
                    <a href="admin.php"><span style="text-decoration-line: underline;">Admin</a>
                </nav>
            </div>

            <div id="dsearch">
                <br><br>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="search" id="Search" placeholder="Search Movies">
            </div>
        </div>
        <hr color="black">

        <?php
            $con = mysqli_connect("localhost", "root", "", "movie_booking");

            if(!$con)
            {
                die("Connection failed: " . mysqli_connect_error());
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']))
            {
                $email = $_POST['email'];
                $q = "SELECT * FROM account WHERE email='$email'";
                $rs = mysqli_query($con, $q);
                $row = mysqli_fetch_assoc($rs);

                if ($row)
                {
                    $username = $row['uname'];
                    $old_email = $row['email'];
                    $password = $row['password'];

                    echo "<form action='process.php' method='post'>
                            <table border=1 align=center cellpadding=10>
                                <tr>
                                    <td colspan=2 align=center bgcolor=lightgreen>Username</td>
                                </tr>
                                <tr>
                                    <td>Old Username:</td>
                                    <td><input type='text' name='old_username' value='$username' readonly></td>
                                </tr>
                                <tr>
                                    <td>Enter new username:</td>
                                    <td><input type='text' name='username' required></td>
                                </tr>
                                <tr>
                                    <td colspan=2 align=center bgcolor=lightblue>Email</td>
                                </tr>
                                <tr>
                                    <td>Old Email:</td>
                                    <td><input type='text' name='old_email' value='$email' readonly></td>
                                </tr>
                                <tr>
                                    <td>Enter new email:</td>
                                    <td><input type='email' name='email' required></td>
                                </tr>
                                <tr>
                                    <td colspan=2 align=center bgcolor=yellow>Password</td>
                                </tr>
                                <tr>
                                    <td>Old Password:</td>
                                    <td><input type='text' name='old_password' value='$password' readonly></td>
                                </tr>
                                <tr>
                                    <td>Enter new password:</td>
                                    <td><input type='password' name='new_password'  required></td>
                                </tr>
                                <tr>
                                    <td colspan=2 align=center><button type='submit' id=adupdate>Update</button></td>
                                </tr>
                            </table>
                        </form>";
                }
                else
                {
                    echo "User not found.";
                }

                mysqli_close($con);
            }
            else
            {
                echo "Invalid request.";
            }
        ?>
    </body>
</html>