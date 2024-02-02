<?php
include_once 'UserRepo.php';
$id = $_GET['id'];

$userRepo = new UserRepo();
$userRepo->deleteUser($id);

header("location:admin.php");
?>