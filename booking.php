<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking</title>
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
                    <a href="booking.php"><span style="text-decoration-line: underline;">Booking</span></a>
                    <a href="aboutus.php">Aboutus</a>
                    <a href="#">Register</a>
                    <a href="log_out.php">Logout</a>


                </nav>
            </div>

            <div id="dsearch">
                <br><br>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="search" id="Search" placeholder="Search Movies">
            </div>
        </div>
        <hr color="black">

        <div id="dcontent">
            <h2>Booking Page</h2>
            <div id="movie-details">
                <?php
                    if (isset($_GET['title']) && isset($_GET['description']) && isset($_GET['showtimes'])) {
                        $title = htmlspecialchars($_GET['title']);
                        $description = htmlspecialchars($_GET['description']);
                        $showtimes = htmlspecialchars($_GET['showtimes']);
                        
                        echo "<h3>$title</h3>
                        <p>$description</p>
                        <form action='process_booking.php' method='post'>
                            <table border='1' cellpadding='10'>
                                <tr>
                                    <td>Name:</td>
                                    <td><input type='text' name='mname' required></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><input type='email' name='memail' required></td>
                                </tr>
                                <tr>
                                    <td>Password:</td>
                                    <td><input type='password' name='mpassword' required></td>
                                </tr>
                                <tr>
                                    <td>Timings of Show:</td>
                                    <td>
                                        <select name='showtime' required>
                                            <option value=''>Select Showtime</option>
                                            <option value='10:00 AM<'>10:00 AM</option>
                                            <option value='11:00 AM<'>11:00 AM</option>
                                            <option value='1:00 PM'>1:00 PM</option>
                                            <option value='2:00 PM'>2:00 PM</option>
                                            <option value='4:00 PM'>4:00 PM</option>
                                            <option value='5:00 PM'>5:00 PM</option>

                                            ";
                                            echo "
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Seat Number:</td>
                                    <td>
                                        <select name='seat_number' required>
                                            <option value=''>Select Seat Number</option>
                                            <option value='A1'>A1</option>
                                            <option value='A2'>A2</option>
                                            <option value='A3'>A3</option>
                                            <option value='A4'>A4</option>
                                            <option value='A5'>A5</option>
                                            <option value='B1'>B1</option>
                                            <option value='B2'>B2</option>
                                            <option value='B3'>B3</option>
                                            <option value='B4'>B4</option>
                                            <option value='B5'>B5</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Total Tickets:</td>
                                    <td><input type='number' name='ticket' required>
                                <tr>
                                    <td colspan='2' align='center'>
                                        <button type='submit'>Book Now</button>
                                    </td>
                                </tr>
                            </table>
                        </form>";
                    }
                    else
                    {
                        echo "<p>Movie details not available.</p>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>
