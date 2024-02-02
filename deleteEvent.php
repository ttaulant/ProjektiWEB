<?php
include_once 'EventRepo.php';
$id = $_GET['id'];

$eventRepo = new EventRepo();
$eventRepo->deleteEvent($id);

header("location:admin.php");
?>