<?php
$submit=false;
if (isset($_POST['fname'])) {
    $server = "localhost";
    $username = "id21434822_admin";
    $password = "King@100";
    $database = "id21434822_contact";
    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn) {
        die("Connection is failed due to " . mysqli_connect_error());
    }

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['sub'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `contact` (`First Name`, `Last Name`, `Email ID`, `Subject`, `Description`, `Date and Time`) VALUES ('$fname', '$lname', '$email', '$subject', '$desc', current_timestamp());";


    //echo $sql;

    if ($conn->query($sql) == true) {
        //echo "Submitted Successfully";
        $submit=true;
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }

    $conn->close();
}
?>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->

<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Contact US</title>-->
<!--    <link rel="stylesheet" href="style.css">-->
<!--</head>-->

<!--<body class="contacthead" style="background-color: blanchedalmond; font-weight: bold;">-->
<!--    <div class="container2">-->
<!--        <h1 style="text-align: center; background-color: rgb(154, 164, 228);"><u>Contact US</u></h1>-->
<!--        <center>-->
<!--            <form class="contact" action="" method="POST">-->
                <!-- <label for="name">Your Name</label> -->
<!--                <input type="text" name="name" id="name" placeholder="Name" required>-->
                <!-- <label for="email">Email ID</label> -->
<!--                <input type="email" name="email" id="email" placeholder="Email ID">-->
<!--                <br>-->

                <!-- <label for="subject">Subject:</label> -->
<!--                <input type="text" name="sub" id="subject" placeholder="Subject">-->
<!--                <br>-->

                <!-- <label for="desp">Description</label> -->
<!--                <textarea name="desc" id="desp" cols="30" rows="10" placeholder="Description"></textarea>-->

<!--                <button type="submit">SUBMIT</button>-->
<!--            </form>-->
<!--        </center>-->
<!--    </div>-->
<!--</body>-->

<!--</html>-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iphone 15 Ultra</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <div class="heading">
        <h1 style="font-size: 60px; margin: 40.2px 0px;">World Of Apple <img class="apple" height="60px" width="52px"
                style="margin: 0 0 18px 0;" src="images/applelogo.png" alt=""> </h1>
    </div>
    <hr>
    <nav class="navbar" style="font-size: 19.2px; font-family: 'Times New Roman', Times, serif;">
        <a href="http://appleblogs.me/appleblogs">Home</a></li>
        <a href="http://appleblogs.me/appleblogs">Products</a></li>
        <a href="contact.php">Contact Us</a></li>
        <form style="font-size: 16px;" class="headsearch" action="https://www.amazon.in/s">
            <input type="text" name="k" id="search" placeholder="Search">
            <button style="height: 28px;" type="submit">Search Amazon</button>
        </form>
    </nav>
    <hr>
    <div class="container">
        <?php
        if ($submit == true) {
            echo "<p style='text-align: center; font-size: x-large; font-style: italic; color: forestgreen; font-weight: 700;'>Form Submitted Successfully</p>";
        }
        ?>
        <form action="contact.php" method="post" class="row g-3">
            <div class="col-md-6">
                <label for="fname" class="form-label">First Name:</label>
                <input type="text" name="fname" id="fname" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="label" class="form-label">Last Name:</label>
                <input type="text" name="lname" id="lname" class="form-control" required>
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email ID:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="col-md-12">
                <label for="sub" class="form-label">Subject:</label>
                <input type="text" name="sub" id="sub" class="form-control" required>
            </div>
            <div class="col-md-12">
                <label for="desc" class="form-label">Description</label>
                <textarea name="desc" id="desc" cols="120" rows="4" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-lg">Submit</button>
        </form>
    </div>
    <footer id="foot">

        <span class="copy">2023 World Of Apple &copy;</span>
    </footer>


    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"-->
    <!--    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"-->
    <!--    crossorigin="anonymous"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"-->
    <!--    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"-->
    <!--    crossorigin="anonymous"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"-->
    <!--    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" -->

</body>

</html>