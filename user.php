<?php
class User{
    private $Id;
    private $Username;
    private $Password;
    private $Role;

    public function __construct($username, $password, $role, $name, $surname, $email ){
        $this->Name = $name;
        $this->Surname = $surname;
        $this->Email = $email;
        $this->Username = $username;
        $this->Password = $password;
        $this->Role = $role;
    }

    public function getUsername(){
        return  $this->Username;
    }
    public function setUsername($username){
        $this->Username = $username;
    }

    public function getPassword(){
        return $this->Password;
    }
    public function setPassword($password){
        $this->Password = $password;
    }

    public function getRole(){
            return $this->Role;
    }
    public function setRole($role){
        $this->Role = $role;
    }

    public function getName(){
            return  $this->Name;
    }
    public function setName($name){
        $this->Name = $name;
    }

    public function getSurname(){
        return $this->Surname;
    }
    public function setSurname($surname){
        $this->Surname = $surname;
    }

    public function getEmail(){
            return $this->Email;
    }
    public function setEmail($email){
        $this->Email = $email;
    }

    public function __toString(){
        return " User: " .this->Username;
    }
}
?>
