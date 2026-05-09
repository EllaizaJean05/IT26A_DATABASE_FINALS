<?php

session_start();
include 'db_conn.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_assoc($result);

    if($password == $row['password']){

        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['name'] = $row['name'];

        header("Location: dashboard.php");
        exit();

    } else {

        echo "Incorrect Password";

    }

} else {

    echo "User Not Found";

}

?>