<?php
class Event{
    private $Id;
    private $Title;
    private $Date;
    private $Location;
    private $Description;
    private $Image;

    public function __construct($title, $date, $location, $desc, $image){
        $this->Title=$title;
        $this->Date=$date;
        $this->Location=$location;
        $this->Description=$desc;
        $this->Image=$image;
    }
    
    public function getTitle(){
        return $this->Title;
    }
    public function setTitle($title){
        $this->Title = $title;
    }

    public function getDate(){
        return $this->Date;
    }
    public function setDate($date){
        $this->Date = $date;
    }

    public function getLocation(){
        return $this->Location;
    }
    public function setLocation($location){
        $this->Location = $location;
    }

    public function getDescription(){
        return $this->Description;
    }
    public function setDescription($desc){
        $this->Description = $desc;
    }

    public function getImage(){
        return $this->Image;
    }
    public function setImage($image){
        $this->Image = $image;
    }

    public function __toString(){
        return "Title: ".$this->Title." and Date: ".$this->Date;
    }
}
?>