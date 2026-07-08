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
    }//this should create a new instance of the class with the properties set by the parameters

    public function getReaderInfo(){ //Summary display method
        return "Reader: " . $this->firstName . " " . $this->lastName . "<br>" .
               "Reading Goal: " . $this->readingGoal . "<br>" .
               "Preferred Genre: " . $this->preferredGenre . "<br>" .
               "Number of Books Read: " . $this->numBooks . "<br>" .
               "Total Pages Read: " . $this->numTotalPages;
    }//this should output the summary of the class properties in a readable format.

    public function AvgPagesPerBook(){ //Method returning calculated value
        if($this->numBooks > 0){
            return $this->numTotalPages / $this->numBooks;
        } else {
            return 0;
        }
        //This should return a calculated value for the number of pages in each book
    }

    public function readingGoalMet(){ //method with decision logic
        if($this->numBooks >= $this->readingGoal){
            return "Congratulations! You have met your reading goal.";
        } else {
            return "Keep going! You haven't met your reading goal yet.";
        }
        //this should output the first string if the goal is met, and the second if not.
    }

    public function changePreferredGenre($newGenre){ //Method to change a property value
        $this->preferredGenre = $newGenre;
        //prediction: this should output nothing from this method, but the property would be changed when the summary
        //is checked.
    }

    //function from chatGPT:
    public function addBook($pages){
    if($pages > 0){
        $this->numBooks++;
        $this->numTotalPages += $pages;
        return "Book added successfully!";
    } else {
        return "Page count must be greater than 0.";
    }
}


}

$bookReader1 = new BookReader(5, 1500, "Science Fiction", 5, "Luke", "Bisgard");
$bookReader2 = new BookReader(3, 900, "Fantasy", 4, "Ryland", "Grace");

echo $bookReader1->getReaderInfo();
echo "<br>Average Pages per Book: " . $bookReader1->AvgPagesPerBook() . "<br>";
echo $bookReader1->readingGoalMet();
$bookReader1->changePreferredGenre("Nonfiction");
echo "<br><br>";
echo $bookReader1->addBook(300);
echo "<br><br>";
echo $bookReader1->getReaderInfo();
echo "<br><br>";

echo $bookReader2->getReaderInfo();
echo "<br>Average Pages per Book: " . $bookReader2->AvgPagesPerBook() . "<br>";
echo $bookReader2->readingGoalMet();
$bookReader2->changePreferredGenre("Science Fiction");
echo "<br><br>";
echo $bookReader2->addBook(548);
echo "<br><br>";
echo $bookReader2->getReaderInfo();

//GITHUB LINK: https://github.com/lbizness/cs85-module5b-oopworld
?>
</body>