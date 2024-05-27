<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lookmyshow</title>
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
                <a href="index.php"><span style="text-decoration-line: underline;">Home</span></a>
                <a href="booking.php">Booking</a>
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
        <h2>Now Showing</h2>
        <div id="movie-list">
            <div class="movie-card">
                <img src="img/movie1.jpg" alt="Movie 1" class="movie-img">
                <div class="movie-info">
                    <h3>Movie 1</h3>
                    <p>Kingdom of the Planet of Apes</p>
                    <p>Showtimes: 10:00 AM, 1:00 PM, 4:00 PM</p>
                    <a href="booking.php?title=Movie+1&description=Kingdom of the Planet of Apes&showtimes=10:00+AM,1:00+PM,4:00+PM" class="btn">Book Now</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="img/movie2.jpg" alt="Movie 2" class="movie-img">
                <div class="movie-info">
                    <h3>Movie 2</h3>
                    <p>Maidaan</p>
                    <p>Showtimes: 11:00 AM, 2:00 PM, 5:00 PM</p>
                    <a href="booking.php?title=Movie+2&description=Maidaan&showtimes=11:00+AM,2:00+PM,5:00+PM" class="btn">Book Now</a>
                </div>
            </div>

            <div class="movie-card">
                <img src="img/movie3.jpg" alt="Movie 3" class="movie-img">
                <div class="movie-info">
                    <h3>Movie 3</h3>
                    <p>Srikanth</p>
                    <p>Showtimes: 1:00 PM, 2:00 PM, 5:00 PM</p>
                    <a href="booking.php?title=Movie+1&description=Srikanth&showtimes=10:00+AM,1:00+PM,4:00+PM" class="btn">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
