<?php

class Movies {

    public $title;
    public $genre;
    public $year;
    public $language;
    public $length;
    public $vote;

    function __construct($_title,$_genre,$_year,$_language,$_length,$_vote){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->language = $_language;
        $this->length = $_length;
        $this->vote = $_vote;
    }


    public function getTitle(){
        return $this->title;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function geYear(){
        return $this->year;
    }
    public function getLang(){
        return $this->language;
    }
    public function getLength(){
        return $this->length;
    }
    public function getVote(){
        return $this->vote;
    }
}

$f01 = new Movies("HACKERS","Avventura","1995","en-US",95,2);
$f02 = new Movies("V PER VENDETTA","Azione","2005","en-US",132,3);

$dbmovies = [$f01,$f02];

for($i=0;$i<count($dbmovies);$i++)
{
    echo $dbmovies[$i]->getTitle()."<br>";
    echo $dbmovies[$i]->genre."<br>";
    echo $dbmovies[$i]->geYear()."<br>";
    echo $dbmovies[$i]->language."<br>";
    echo $dbmovies[$i]->getLength()."<br>";
    echo $dbmovies[$i]->getVote()."<br><br>";
}

?>