<?php
include_once 'user.php';
include_once 'UserRepo.php';

if (isset($_POST['submitbtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = "user";
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    $user = new User($username,$password,$role,$name,$surname,$email);

    $userRepo = new UserRepo();
    $userRepo->insertUser($user);
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="style.css">
        
        </head>
            <body>

            <div class = "signupMain">
                <form id="signupForm" action="<?php echo $SERVER['PHP_SELF']?>" method="POST">
                    <div class="form-control">
                        <label for="name">First Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-control">
                        <label for="surname">Last Name:</label>
                        <input type="text" id="surname" name="surname" required>
                    </div>
                    <div class="form-control">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-control">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <div class="button">
                        <input type="submit" name="submitbtn" value="Sign Up">
                    </div>
                </form>
                </div>
                    <p class="error" id="error"></p>

                <script>
                    document.getElementById("loginForm").addEventListener("submit"), function(event){
                        event.preventDefault();
  
                        var username = document.getElementById("username").value;
                        var password = document.getElementById("password").value;
  
                            if(username == "" || password == "") {
                            document.getElementById("error").innerHTML = "Both fields are required";
                            } else {
                            document.getElementById("error").innerHTML = "";
                            }
                        };
                </script>

            </body>
</html>