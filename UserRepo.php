<?php
    include_once('DatabaseConnection.php');

    class UserRepo{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function insertUser($user){
            $conn = $this->connection;

            $username = $user->getUsername();
            $password = $user->getPassword();
            $role = $user->getRole();
            $name = $user->getName();
            $surname = $user->getSurname();
            $email = $user->getEmail();

            $sql = "INSERT INTO user(username , password, role, name, surname, email) VALUES (?,?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$username, $password, $role, $name, $surname, $email]);

            echo "<script>alert('User is added!')</script>";
        }

        public function getAllUsers(){
            $conn = $this->connection;

            $sql = "SELECT * FROM user";
            $statement = $conn->query($sql);

            $Users = $statement->fetchAll();
            return $Users;
        }


        public function editUser($id, $username, $password, $role, $name, $surname, $email){
            $conn = $this->connection;
            $sql = "UPDATE user SET username=?, password=?, role=?, name=?, surname=?, email=? WHERE id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$username, $password, $role, $name, $surname, $email, $id]);

            echo "<script>alert('Updated successfully!')</script>";

        }

        function deleteUser($id){
            $conn = $this->connection;

            $sql = "DELETE FROM user WHERE id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        function getUserById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM user WHERE id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $User=$statement->fetch();

            return $User;
        }

    }

?>
