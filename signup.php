<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="style.css">
        
        </head>
            <body>
            
            <?php include 'header.php';?>
            <div class = "signupMain">
                <form id="signupForm">
                    <div class="form-control">
                        <label for="username">First Name:</label>
                        <input type="text" id="username" name="username" required>
                    </div>

                    <div class="form-control">
                        <label for="username">Last Name:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
       
      
                    <div class="form-control">
                        <label for="username">Email:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
  
                    <div class="form-control">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <div class="button">
                        <button type="submit"><a href="MainPage.html">Sign Up</a></button>
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