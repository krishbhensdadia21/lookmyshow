<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
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
                    <a href="aboutus.php"><span style="text-decoration-line: underline;">Register</a>
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
                <p style="font-size: x-large;">Login</p>
                <form action="loginto.php" method="post">
                <p>
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="demail" name="email" placeholder="Email" required>
                </p>

                <br>
                <p>
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="dpwd" name="pass" placeholder="Password" required>
                </p>

                <p>
                    <button type="submit" id="next" value="Submit">Submit</button>
                </p>

                <p>Create an account <a href="Account(SS).php"><span style="text-decoration-line: underline;">now</span></a></p>
                </form>
            </div>
        </center>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
    </body>
</html>