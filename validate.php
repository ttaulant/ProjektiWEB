<?php

include_once('connection.php');

function test_input($data){

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM user");
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach($users as $user) {
         
        if(($user['username'] == $username) && 
            ($user['password'] == $password)) {
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['role'] = $user['role'];
                $_SESSION['loginTime'] = date("H:i:s");
                header("location: index.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            header("location: login.php");
        }
    }
}
