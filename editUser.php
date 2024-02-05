
<?php
include 'UserRepo.php';
$id = $_GET['id'];

$userRepo = new UserRepo();
$user = $userRepo->getUserById($id);
?>

<!DOCTYPE html>
<html>
<body>
    <h3>Edit User</h3>
    <form method="POST">
        <input type="text" name="name"  value="<?php echo $user['name']?>"> <br> <br>
        <input type="text" name="surname"  value="<?php echo $user['surname']?>"> <br> <br>
        <input type="email" name="email"  value="<?php echo $user['email']?>"> <br> <br>
        <input type="text" name="username"  value="<?php echo $user['username']?>"> <br> <br>
        <input type="password" name="password"  value="<?php echo $user['password']?>"> <br> <br>
        <input type="text" name="role"  value="<?php echo $user['role']?>"> <br> <br>
        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    $userRepo->editUser($id,$username,$password,$role,$name, $surname, $email);
    header("location:admin.php");
}

?>