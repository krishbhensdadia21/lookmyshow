<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
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

        <center>
            <div id="dadmin">
                <h2>User Information</h2>
                    <?php
                        $con=mysqli_connect("localhost","root","");
                        $db=mysqli_select_db($con,"movie_booking");
                        $q="select * from account";
                        $rs=mysqli_query($con,$q);
                        $n=mysqli_num_rows($rs);
                    
                        echo "<table border=1 cellpadding=14>";
                        echo "<tr>
                                    <td>Username
                                    <td align=center>Email
                                    <td>Password
                                    <td>Actions
                                ";
                    
                        for($i=1;$i<=$n;$i++)
                        {
                            $row=mysqli_fetch_row($rs);
                            echo "<tr>
                                    <td>$row[0]
                                    <td>$row[1]
                                    <td>$row[2]
                                    <td>
                                        <form action='deleteinfo.php' method='post' style='display:inline;'>
                                            <input type='hidden' name='email' value='$row[1]'>
                                            <button type='submit' id='delete'>Delete</button>
                                        </form>
                                    

                                   
                                        <form action='update.php' method='post' style='display:inline;'>
                                        <input type='hidden' name='email' value='$row[1]'>
                                        <button type='submit' id='update'>Update Details</button>
                                    </td>
                                </form>
                                </tr>";
                        }
                    ?>
            </div>
        </center>
    </body>
</html>