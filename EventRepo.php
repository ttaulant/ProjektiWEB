<?php
    include_once('DatabaseConnection.php');

    class EventRepo{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }
       
        public function insertEvent($event){
            $conn = $this->connection;

            $title = $event->getTitle();
            $date = $event->getDate();
            $location = $event->getLocation();
            $description = $event->getDescription();
            $image = $event->getImage();

            $sql = "INSERT INTO event(title, date, location, description, image) VALUES (?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$title, $date, $location, $description, $image]);

            echo "<script>alert('Event is added!')</script>";
        }

        public function getAllEvents(){
            $conn = $this->connection;

            $sql = "SELECT * FROM event";
            $statement = $conn->query($sql);

            $Events = $statement->fetchAll();
            return $Events;
        }


        public function editEvent($id, $title, $date, $location, $description, $image){
            $conn = $this->connection;
            $sql = "UPDATE event SET title=?, date=?, location=?, description=?, image=? WHERE id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$title, $date, $location, $description, $image, $id]);

            echo "<script>alert('Updated successfully!')</script>";

        }

        function deleteEvent($id){
            $conn = $this->connection;

            $sql = "DELETE FROM event WHERE id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        function getEventById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM event WHERE id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $Event=$statement->fetch();

            return $Event;
        }

    }

?>