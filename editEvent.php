
<?php
include 'EventRepo.php';
$id = $_GET['id'];

$eventRepo = new EventRepo();
$event = $eventRepo->getEventById($id);
?>

<!DOCTYPE html>
<html>
<body>
    <h3>Edit Event</h3>
    <form action="<?php echo $SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="title"  value="<?php echo $event['title']?>"> <br> <br>
        <input type="date" name="date"  value="<?php echo $event['date']?>"> <br> <br>
        <input type="text" name="location"  value="<?php echo $event['location']?>"> <br> <br>
        <input type="text" name="description"  value="<?php echo $event['description']?>"> <br> <br>
        <input type="text" name="image"  value="<?php echo $event['image']?>"> <br> <br>
        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $event['id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    $eventRepo->editEvent($id,$title,$date,$location,$description,$image);
    header("location:admin.php");
}

?>