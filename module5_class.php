<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP WORLD</title>
</head>
<body>
<?php
//Luke Bisgard
//GITHUB LINK: https://github.com/lbizness/cs85-module5b-oopworld

class BookReader{
    public $numBooks;
    public $numTotalPages;
    public $preferredGenre;
    public $readingGoal;
    public $firstName;
    public $lastName;

    public function __construct($numBooks, $numTotalPages, $preferredGenre, $readingGoal, $firstName, $lastName){
        $this->numBooks = $numBooks;
        $this->numTotalPages = $numTotalPages;
        $this->preferredGenre = $preferredGenre;
        $this->readingGoal = $readingGoal;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getReaderInfo(){ //Summary display method
        return "Reader: " . $this->firstName . " " . $this->lastName . "<br>" .
               "Reading Goal: " . $this->readingGoal . "<br>" .
               "Preferred Genre: " . $this->preferredGenre . "<br>" .
               "Number of Books Read: " . $this->numBooks . "<br>" .
               "Total Pages Read: " . $this->numTotalPages;
    }

    public function AvgPagesPerBook(){ //Method returning calculated value
        if($this->numBooks > 0){
            return $this->numTotalPages / $this->numBooks;
        } else {
            return 0;
        }
    }

    public function readingGoalMet(){ //method with decision logic
        if($this->numBooks >= $this->readingGoal){
            return "Congratulations! You have met your reading goal.";
        } else {
            return "Keep going! You haven't met your reading goal yet.";
        }
    }

    public function changePreferredGenre($newGenre){ //Method to change a property value
        $this->preferredGenre = $newGenre;
    }

}

$bookReader1 = new BookReader(5, 1500, "Science Fiction", 5, "Luke", "Bisgard");



//GITHUB LINK: https://github.com/lbizness/cs85-module5b-oopworld
?>
</body>