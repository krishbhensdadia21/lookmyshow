<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account</title>
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
                    <a href="#">Home</a>
                    <a href="#">Booking</a>
                    <a href="#">Aboutus</a>
                    <a href="account.php"><span style="text-decoration-line: underline;">Register</a>
                    <a href="#">Logout</a>

                </nav>
            </div>

            <div id="dsearch">
                <br><br>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="search" id="Search" placeholder="Search Movies">
            </div>
        </div>
        <hr color="black">

        <center>
            <div id="dlogin">
                <p style="font-size: x-large;">Account</p>
                <form action="register.php" method="get">
                <p>
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" id="demail" name="uname" placeholder="Enter your username" required>
                </p>

                <br>

                <p>
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="demail" name="email" placeholder="Enter your email" required>
                </p>

                <br>
                <p>
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="dpwd" name="pass" placeholder="Enter your password" required>
                </p>

                <p>
                    <button type="submit" value="Submit">Create</button>
                </p>

                <p>Already have an account then  <a href="login.php"><span style="text-decoration-line: underline;">login</span></a></p>
                </form>
            </div>
        </center>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
    </body>
</html>