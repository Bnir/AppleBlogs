<?php
$server = "localhost";
$username = "id21434822_admin";
$password = "King@100";
$database = "id21434822_contact";
$conn = mysqli_connect($server, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo "" . mysqli_connect_error();
} else {
    // echo "Connected Successfully";
}

$query = "SELECT * FROM contact";
$data = mysqli_query($conn, $query);

?>