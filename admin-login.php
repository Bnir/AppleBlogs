<?php
$submit = false;
$fail = false;
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];

    if (($username == 'admin') && ($password == 'KING')) {
        // echo 'success';
        header('Location: //blogstech.000webhostapp.com/adm-03-pan-el-04-29-30-01-02020290-04-05-06---0003.php');
        $submit = true;
    } else {
        // echo 'WRONG DETAILS ENTERED';
        $fail = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Of Apple</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="heading">
        <h1 style="font-size: 60px;">World Of Apple <img class="apple" style="margin: 0 0 18px 0;" src="" alt=""> </h1>
    </div>
    <hr>

    <nav class="navbar">
        <a href="index.html">Home</a></li>
        <a href="products.html">Products</a></li>
        <a href="https://blogstech.000webhostapp.com/contact.php">Contact Us</a></li>

        <form class="headsearch" action="https://www.amazon.in/s">
            <input type="text" name="k" id="search" placeholder="Search">
            <button type="submit">Search Amazon</button>
        </form>
    </nav>
    <hr>
    <h2 class="text-center mt-5" style="color:aqua; font-weight: 700;">Admin Login</h2>
    <div class="container border" style="padding: 30px; border-radius: 10px; margin-bottom:40px;">
        <form action="admin-login.php" method="post" class="row g-3">
            <div class="col-md-12">
                <label for="username" class="form-label" style="font-size: 20px;">Username:</label>
                <input class="form-control" type="text" name="username" id="username">
            </div>
            <div class="col-md-12">
                <label for="pass" class="form-label" style="font-size: 20px;">Password:</label>
                <input class="form-control" type="password" name="pass" id="pass">
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
        <?php
        // if (isset($_POST['$username'])) {
        if ($fail == true) {
            echo '<p class="text-center" style="font-size: large; margin-top: 20px; color: red; font-weight: bold;">Invalid Credintials, Please try again<p>';
        }
        ?>
    </div>
    <footer id="foot">
        </div>
        <span class="copy">2023 World Of Apple &copy;</span>
    </footer>

</body>

</html>