<?php

class Movie{
    public $title;
    public $rating;

    function __construct($title,$rating)
    {
        $this->title=$title;
        $this->setrating($rating);
    }

    function getRating(){
        return $this->rating;

    }

    function setRating($rating){
        $ratings=array("PG", "G", "PG-13");
        if(in_array($rating, $ratings)){
            $this->rating=$rating;
        }else{
            echo "NR";
        }
    }
}

$file=new Movie("Harry Potter","nn");
$file->setRating("malaya");
echo ($file->getRating());

?>