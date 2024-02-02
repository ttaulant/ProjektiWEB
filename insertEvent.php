<?php
include_once 'event.php';
include_once 'EventRepo.php';

if (isset($_POST['submitbtn'])) {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    $event = new Event($title, $date, $location, $description, $image);

    $eventRepo = new EventRepo();
    $eventRepo->insertEvent($event);
    header("location:admin.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action="<?php echo $SERVER['PHP_SELF']?>" method="POST">  
            Title: <input type="text" name="title" ><br>
            Date: <input type="date" name="date" ><br>
            Location: <input type="text" name="location" ><br>
            Description: <input type="text" name="description" ><br>
            Image: <input type="text" name="image" ><br>
            <input type="submit" name="submitbtn" value="Submit">
        </form>
    </body>
</html>