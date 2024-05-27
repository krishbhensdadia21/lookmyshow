<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Logout</title>
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
                    <a href="index.php">Home</a>
                    <a href="booking.php">Booking</a>
                    <a href="aboutus.php">Aboutus</a>
                    <a href="account.php">Register</a>
                    <a href="logout.php"><span style="text-decoration-line: underline;">Logout</a>
                </nav>
            </div>

            <div id="dsearch">
                <br><br>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="search" id="Search" placeholder="Search Movies">
            </div>
        </div>
        <hr color="black">

        <?php
            echo "<h1>Hey, user! See you soon</h1>";
        ?>

        <form action="login.php">
            <button type="submit" id="logout" value="Log-Out">Log-Out</button>
        </form>
    </body>
</html>