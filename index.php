<?php 

class Movie {
    public $title;
    public $poster;
    public $producer;
    public $director;
    public $duration;
    public $budget;
    public $year;
    public $language;
    public $genre;

    function __construct($_title, $_producer, $_director, $_duration, $_budget, $_language, $_genre, $_poster = "./NO-MOVIE-POSTERS-02-03-003_1000.jpg")
    {
        $this->title = $_title;
        $this->poster = $_poster;
        $this->producer = $_producer;
        $this->director = $_director;
        $this->duration = $_duration;
        $this->budget = $_budget;
        $this->language = $_language;
        $this->genre = $_genre;
    }

    public function countYear($_year) {
        $this->year = 2023 - $_year;
    }
}

echo "<div style=display:flex;justify-content:center;gap:1rem;color:white>";

$inception = new Movie("Inception: The Cobol Job", "Emma Thomas", "Christopher Nolan", "148 min", "160 milion USD", "eng", "action", "./Inception.jpg");
$inception->countYear(2010);

echo "<div style=background-color:black;padding:1rem>";

echo "<h2>" . $inception->title . "</h2>";
echo "<img width=150px src=$inception->poster>";
echo "<p>Producer: <strong>" . $inception->producer . "</strong></p>";
echo "<p>Dircetor: <strong>" . $inception->director . "</strong></p>";
echo "<p>Duration: <strong>" . $inception->duration . "</strong></p>";
echo "<p>Budget: <strong>" . $inception->budget . "</strong></p>";
echo "<p>This movie was released: <strong>" . $inception->year . "</strong> ago</p>";
echo "<p>Language: <strong>" . $inception->language . "</strong></p>";
echo "<p>Genre: <strong>" . $inception->genre . "</strong></p>";

echo "</div>";

$the_choice = new Movie("The Choice", "	Nicholas Sparks", "Ross Katz", "111 min", "10 milioni USD", "eng", "romantic");
$the_choice->countYear(2016);

echo "<div style=background-color:black;padding:1rem>";

echo "<h2>" . $the_choice->title . "</h2>";
echo "<img width=150px src=$the_choice->poster>";
echo "<p>Producer: <strong>" . $the_choice->producer . "</strong></p>";
echo "<p>Dircetor: <strong>" . $the_choice->director . "</strong></p>";
echo "<p>Duration: <strong>" . $the_choice->duration . "</strong></p>";
echo "<p>Budget: <strong>" . $the_choice->budget . "</strong></p>";
echo "<p>This movie was released: <strong>" . $the_choice->year . "</strong> ago</p>";
echo "<p>Language: <strong>" . $the_choice->language . "</strong></p>";
echo "<p>Genre: <strong>" . $the_choice->genre . "</strong></p>";

echo "</div>";

echo "</div>";

?>