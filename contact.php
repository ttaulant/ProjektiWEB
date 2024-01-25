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
        <title>CONTACT US</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <?php include 'header.php';?>
    <h3><?php echo "Username: ".$_SESSION['username']."<br>" ?></h3>
    <h3><?php echo "Login Time: ".$_SESSION['loginTime']."<br>"?></h3>

    <?php
        }
    ?>
        <div class="contactContainer">
            <form id="contactForm">
                <label>Name:</label>
                <input type="text" id="name">
                <div class="error-message" id="nameError"></div>

                <label>Lastname:</label>
                <input type="text" id="lastname">
                <div class="error-message" id="lastnameError"></div>
            
                <label>Email:</label>
                <input type="text" id="email">
                <div class="error-message" id="emailError"></div>

                <label>Subject:</label>
                <textarea id="subject" name="subject" placeholder="Write something here..." style="height: 200px"></textarea>

            
                <button type="button" onclick="validateForm()">Submit</button>
            </form>
            <script>
                let nameRegex = /^[A-Z][a-z]{3,8}$/;
                let lastnameRegex = /^[A-Z][a-z]{3,8}$/;
                let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
            
                function validateForm(){
                    let nameInput = document.getElementById('name');
                    let nameError = document.getElementById('nameError');
                    let lastnameInput = document.getElementById('lastname');
                    let lastnameError = document.getElementById('lastnameerror');
                    let emailInput = document.getElementById('email');
                    let emailError = document.getElementById('emailError');
            
                    nameError.innerText = '';
                    lastname.innerText = ' ';
                    emailError.innerText = '';
            
                    if(!nameRegex.test(nameInput.value)){
                        nameError.innerText = 'invalid name';
                        return;
                    }
                    if(!lastnameRegex.test(lastnameInput.value)){
                        lastnameError.innerTest = 'invalid last name';
                        return;
                    }
                    if(!emailRegex.test(emailInput.value)){
                        emailError.innerText = 'invalid email';
                        return;
                    }
            
                    alert('form submitted succesfully!');
                }
            </script>
        </div>
    </body>
</html>