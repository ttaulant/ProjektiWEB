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
        <title>About Us</title>
        <link rel="stylesheet" href="style.css">
    </head>
        <body>

        <?php include 'header.php';?>

        <h3><?php echo "Username: ".$_SESSION['username']."<br>" ?></h3>
    <h3><?php echo "Login Time: ".$_SESSION['loginTime']."<br>"?></h3>

    <?php
        }
    ?>
            <div class="slideshow-container">

   
            <div class="mySlides fade">
                <div class="numbertext">1 / 10</div>
                <img src="Photos/foto1.jpg" style="width:100%">
                <div class="text">Your best buddy!!!!</div>
            </div>
  
            <div class="mySlides fade">
                <div class="numbertext">2 / 10</div>
                <img src="Photos/foto2.jpg" style="width:100%">
                <div class="text">Kids having a good time</div>
            </div>
  
            <div class="mySlides fade">
                <div class="numbertext">3 / 10</div>
                <img src="Photos/foto3.jpg" style="width:100%">
                <div class="text">Staying informed</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 10</div>
                <img src="Photos/foto4.jpg" style="width:100%">
                <div class="text">Just chilling</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 10</div>
                <img src="Photos/foto5.jpg" style="width:100%">
                <div class="text">Quality time in our spaces</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 10</div>
                <img src="Photos/foto6.jpg" style="width:100%">
                <div class="text">Improvising</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">7 / 10</div>
                <img src="Photos/foto7.jpg" style="width:100%">
                <div class="text">All over the place</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">8 / 10</div>
                <img src="Photos/foto8.jpg" style="width:100%">
                <div class="text">A lot of fun space</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">9 / 10</div>
                <img src="Photos/foto9.jpg" style="width:100%">
                <div class="text">In action</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">10 / 10</div>
                <img src="Photos/foto10.jpg" style="width:100%">
                <div class="text">Best outdoor place</div>
            </div>

    
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
            </div>
            <br>
  
  
            <div style="text-align:center"> 
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
             <span class="dot" onclick="currentSlide(3)"></span>
            </div>


        <script>
            let slideIndex = 1;
                showSlides(slideIndex);


            function plusSlides(n) {
                showSlides(slideIndex += n);
            }


            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
            }

        </script>
    </body>
</html>    