<!DOCTYPE html>
<html>
    <head>

        <title>Log In</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>

        <?php include 'header.php';?>

        <div class="loginMain">
            <form id="loginForm" action="validate.php" method="post">
                
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <button id="loginButton" type="submit" name="login">Log  In</button>
                    <p>You don't have an account?</p>
                    <a href="signup.php">Sign Up</a>

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