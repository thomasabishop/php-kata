<?php


declare(strict_types=1);

// We can use declared types with classes, but only with properties 
class GradeBook // Class name must be in PascalCase 
{
    public string $name;
    public array $grades = array();

    // When referring to classes own properties and method must use `$this`
    public function addName($str) // methods must use camelCase not underscore
    {
        $this->name = $str;
    }
    public function addGrade($int)
    {
        $this->grades[] = $int; // When writing to array in class must use sqr bracket
    }

    public function averageGrade()
    {
        $average = 0;
        foreach ($this->grades as $grade) {
            $average += $grade;
        }
        $average = $average / count($this->grades); // When reading array, no need for sqr brackets 
        return $average;
    }
}

$book = new Gradebook();
// When calling object method have to use thin arrow 
// Φ is this the same as anonymous/lamda function in PHP 
$book->addGrade(5);
$book->addGrade(7);
$book->addName('Thomas');

print_r($book->averageGrade());

var_dump($book);
