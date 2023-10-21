<?php
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($server, $username, $password);

    if (!$conn) {
        die("Connection is failed due to " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['sub'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `contact` (`Name`, `Email ID`, `Subject`, `Description`, `Date and Time`) VALUES ('$name', '$email', '$subject', '$desc', current_timestamp());";

    if ($conn->query($sql)) {
        echo "Submitted Successfully";
    } else
        echo "ERROR: " . $conn->error();

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="contacthead" style="background-color: blanchedalmond; font-weight: bold;">
    <h1 style="text-align: center; background-color: rgb(154, 164, 228);"><u>Contact US</u></h1>
    <form class="contact" action="contact.php" method="POST">
        <label for="name">Your Name</label>
        <input type="text" name="name" id="name" placeholder="Name" required>
        <label for="email">Email ID</label>
        <input type="email" name="email" id="email" placeholder="Email ID">
        <br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" placeholder="Subject">
        <br>

        <label for="desp">Description</label>
        <textarea name="Description" id="desp" cols="30" rows="10" placeholder="Description"></textarea>

        <button type="submit">SUBMIT</button>
    </form>
</body>

</html>