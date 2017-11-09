<?php

class Movie
{
    private $name;
    private $descript = 'uneDescription';
    private $duration = 'uneDuree';
    private $releaseYear = 'uneAnnee';
    
    public function __construct($name = ""){
        $this->name = $name;
    }
    
    public function aMovieFunction(){
        echo "Name : $this->name\n";
        echo "Description : $this->descript\n";
        echo "Release year : $this->releaseYear\n";
        echo "Duration : $this->duration\n";
    } 
    
    public function getName(){
        return $this->name;
    }

    public function setName($name=""){
        $this->name = $name;
    }
    
    public function getDescript(){
        return $this->descript;
    }

    public function setDescript($descript=""){
        $this->descript = $descript;
    }
    public function getDuration(){
        return $this->duration;
    }

    public function setDuration($duration=""){
        $this->duration = $duration;
    }
    
    public function getReleaseYear(){
        return $this->releaseYear;
    }

    public function setReleaseYear($releaseYear=""){
        $this->releaseYear = $releaseYear;
    }
}




$movie = new Movie('Mohamed');

echo $movie->aMovieFunction();
echo $movie->getName();



