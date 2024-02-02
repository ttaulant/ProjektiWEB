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
<html>
    <head>
        <title>News</title>
        <link rel="stylesheet" href="style.css">
    </head>

        <body class="news-body">

        <?php include 'header.php';?>
        <h3><?php echo "Username: ".$_SESSION['username']."<br>" ?></h3>
        <h3><?php echo "Login Time: ".$_SESSION['loginTime']."<br>"?></h3>

    <?php
        }
    ?>    <div class="news-container">
            <article class="news-article">
                <img src="Photos/news1.jpg" alt="Event Photo">
                <h2>Introducing Our Paws and Claws Café!</h2>
                <p>Embark on a delightful journey with your furry friends at our newly 
                  unveiled café. A haven where animal enthusiasts and their beloved 
                  companions come together to enjoy a unique dining experience. Savor delicious treats for both pets and owners, 
                  surrounded by a cozy and pet-friendly atmosphere. Join us in creating cherished moments and fostering a community of animal lovers.
                   Welcome to a cafe where tails wag and hearts connect!</p>
            </article>

            <article class="news-article">
                <img src="Photos/news2.jpg" alt="Event Photo">
                <h2>Most Visitors In A Month</h2>
                <p>In the past month, our animal events have hit an all-time high with a remarkable turnout of 
                  enthusiastic pet owners and their furry companions. From lively pet parades to engaging workshops, 
                  the energy and passion were simply unbeatable. A heartfelt thank you to our dedicated community for making each event a roaring success. 
                  Here's to more memorable gatherings, shared smiles, and the joy of celebrating our love for animals!</p>
            </article>

            <article class="news-article">
                <img src="Photos/news3.jpg" alt="Event Photo">
                <h2>Opportunity Knocks: Join Our Animal-loving Team!</h2>
                <p>We're on the lookout for passionate individuals to join our growing family at. If you have a heart for animals and a 
                  flair for exceptional service, here's your chance to be a part of something special. Explore exciting career opportunities, 
                  unleash your potential, and make a difference in the lives of pets and their owners. Don't miss out – take the leap and join us on 
                  this rewarding journey!</p>
            </article>
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