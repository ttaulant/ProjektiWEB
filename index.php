<?php
  session_start();
  $hide="";
  if(!isset($_SESSION['username']))
    header("location:login.php");
  else{
    if($_SESSION['role'] == "admin")
      $hide = "";
    else
      $hide = "hide";

  include "DatabaseConnection.php";
  include_once "EventRepo.php";

  $eventRepo = new EventRepo();
  $events = $eventRepo->getAllEvents();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Event</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <?php include 'header.php';?>

    <h3><?php echo "Username: ".$_SESSION['username']."<br>" ?></h3>
    <h3><?php echo "Login Time: ".$_SESSION['loginTime']."<br>"?></h3>

    <?php
        }
    ?>
        
    <div class="container">

    <?php foreach($events as $event) { ?>
        <div class="event-card">
            <img src=<?php echo "Photos/".$event['image']?> alt="Event 1">
            <h2><?php echo $event['title']?></h2>
            <p class="event-details"><?php echo "Date: ".$event['date']?></p>
            <p class="event-details"><?php echo "Location: ".$event['location']?> </p>
            <p class="event-details"><?php echo "Description: ".$event['description']?></p>
        </div>

    <?php
        }
    ?>
        
    </div>

    <div class="footer">
    <footer>
       <div class="Socials">
        <h2>Our Socials</h2>
        <a href="https://twitter.com/AnimalPlanet"><img src="Photos/twitter.png" alt="X" style="height: 40px; width: 40px;"></a> 
        <br>
        <a href="https://www.instagram.com/animalplanet/"><img src="Photos/instagram.png" alt="ig" style="height: 40px; width: 40px;"></a>
        <br> 
        <a href="https://www.pinterest.com/animalonplanet/"><img src="Photos/pinterest.png" alt="Pinterest" style="height: 40px;width: 40px"></a>       
       </div>
    </footer>
    </div>


</body>
</html>
