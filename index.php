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
        
        <div class="event-card">
            <img src="Photos/event1.jpg" alt="Event 1">
            <h2>First Event</h2>
            <p class="event-details">Date: October 15, 2023</p>
            <p class="event-details">Location: L&V Park </p>
            <p class="event-details">Description: Turtles are fascinating reptiles known for their distinctive bony shells, slow-moving nature, and aquatic or terrestrial habitats.</p>
        </div>

        
        <div class="event-card">
            <img src="Photos/event2.jpg" alt="Event 2">
            <h2>Second Event</h2>
            <p class="event-details">Date: November 5, 2023</p>
            <p class="event-details">Location: Wildlife Sanctuary</p>
            <p class="event-details">Zebras are distinctive African mammals known for their black and white striped coats, making them easily recognizable in the wild.</p>
        </div>

        
        <div class="event-card">
            <img src="Photos/event3.jpg" alt="Event 3">
            <h2>Third Event</h2>
            <p class="event-details">Date: December 10, 2023</p>
            <p class="event-details">Location: Aviary Garden</p>
            <p class="event-details">Flying birds are avian species capable of soaring through the air using their wings, allowing them to travel and forage for food efficiently.</p>
        </div>


        <div class="event-card">
            <img src="Photos/event4.jpg" alt="Event 4">
            <h2>Fourth Event</h2>
            <p class="event-details">Date: June 17, 2024</p>
            <p class="event-details">Location: Wildlife Sanctuary</p>
            <p class="event-details">The bongo is a rare forest antelope with distinctive reddish-brown color and unique spiral horns, typically found in African woodlands.</p>
        </div>
        

        <div class="event-card">
            <img src="Photos/event5.jpg" alt="Event 5">
            <h2>Fifth Event</h2>
            <p class="event-details">Date: October 30, 2024</p>
            <p class="event-details">Location: L&V Park, 305 Section</p>
            <p class="event-details">A unforgetable event awaits us,on this years Halloween, it will be very scary.</p>
        </div>

        <div class="event-card">
            <img src="Photos/event6.jpg" alt="Event 6">
            <h2>Sixth Event</h2>
            <p class="event-details">Date: April 24, 2025</p>
            <p class="event-details">Location: L&V Community Park</p>
            <p class="event-details">On this event, we bring together our cats, socialize them with their feline friends, and ensure that even their human companions have a good time.</p>
        </div>

        <div class="event-card">
            <img src="Photos/event7.jpg" alt="Event 7">
            <h2>Seventh Event - Dog Training</h2>
            <p class="event-details">Date: May 28, 2025</p>
            <p class="event-details">Location: Training Camp</p>
            <p class="event-details">Every dog needs to be trained, and while training to have fun to.</p>
        </div>

          <div class="event-card">
            <img src="Photos/event8.jpg" alt="Event 8">
            <h2>Eighth Event</h2>
            <p class="event-details">Date: June 1, 2025</p>
            <p class="event-details">Location: L&V Child's Park</p>
            <p class="event-details">On this event we will take care of our beautiful toodlers,to make sure sure they have a great time.</p>
        </div>

        <div class="event-card">
            <img src="Photos/mainevent.jpg" alt="Main Event">
            <h2>Main Event</h2>
            <p class="event-details">Date: July 4, 2025</p>
            <p class="event-details">Location: L&V Main Park</p>
            <p class="event-details">Everything beauties and "beasts" all in one place. Come join us to the main event on July 4.</p>
        </div>
        
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
