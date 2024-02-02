<?php
include_once 'user.php';
include_once 'UserRepo.php';

if (isset($_POST['submitbtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    $user = new User($username,$password,$role,$name,$surname,$email);

    $userRepo = new UserRepo();
    $userRepo->insertUser($user);
    header("location:admin.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action="<?php echo $SERVER['PHP_SELF']?>" method="POST">  
            Name: <input type="text" name="name" ><br>
            Surname: <input type="text" name="surname" ><br>
            Email: <input type="text" name="email" ><br>
            Username: <input type="text" name="username" ><br>
            Password: <input type="password" name="password" ><br>
            Role: <input type="text" name="role" ><br>
            <input type="submit" name="submitbtn" value="Submit">
        </form>
    </body>
</html>