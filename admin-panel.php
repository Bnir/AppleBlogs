<?php
require_once("Other files/Fetch-db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Of Apple</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="heading">
        <h1 style="font-size: 56px;">World Of Apple <img class="apple" src="images/applelogo.png" style="margin-bottom:12px;" alt=""> </h1>
    </div>
    <hr>

    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="https://blogstech.000webhostapp.com/contact.php">Contact Us</a>
        <a style="color:chartreuse;" href="https://blogstech.000webhostapp.com/admin-login.php">Admin Login</a>


        <form class="headsearch" action="https://www.amazon.in/s">
            <input type="text" name="k" id="search" placeholder="Search">
            <button type="submit">Search Amazon</button>
        </form>
    </nav>
    <hr>

    <!-- <marquee behavior="scrolling" direction="right" style="background-color: orangered; margin-bottom: 0px;"><B>WEBSITE
            UNDER DEVELOPMENT, CONTACT US PAGE MIGHT NOT WORK</B></marquee> -->

    <div class="container-fluid" style="margin-bottom:80px; scale:0.95;">
            <h1 style="background-color:#162235; border-radius:8px" class="text-center">Database</h1>

        <table class="table table-striped text-center" style="background-color: aliceblue; border-radius:8px">
                <thead>
                <tr>
                    <th>Serial No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email ID</th>
                    <th>Subject</th>
                    <th>Description</th>
                    <th>Date and Time</th>
                </tr>
            </thead>
            <?php

            while ($row = mysqli_fetch_assoc($data)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row['Sno']; ?>
                    </td>
                    <td>
                        <?php echo $row['First Name']; ?>
                    </td>
                    <td>
                        <?php echo $row['Last Name']; ?>
                    </td>
                    <td>
                        <?php echo $row['Email ID']; ?>
                    </td>
                    <td>
                        <?php echo $row['Subject']; ?>
                    </td>
                    <td>
                        <?php echo $row['Description']; ?>
                    </td>
                    <td>
                        <?php echo $row['Date and Time']; ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
    <footer id="foot" style="margin-top:40px;">
        <!-- <div>
            <nav>
                <ul class="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
            </nav>
        </div> -->
        <span class="copy">2023 World Of Apple &copy;</span>
    </footer>

</body>

</html>