<?php

declare(strict_types=1);

namespace Examples\Classes;


// We can use declared types with classes, but only with properties 
// We can of course use standard function type declarations with the methods within the class

class GradeBook // Class name must be in PascalCase 
{
    private array $grades = array(); // Declare private empty array. Won't be accessible from object.

    // When referring to classes own properties and method must use `$this`
    // Methods must use the `function` keyword
    public function addGrade(int $int): void
    {
        $this->grades[] = $int; // When writing to array in class must use sqr bracket
    }

    public function averageGrade(): int
    {
        $average = 0;
        foreach ($this->grades as $grade) {
            $average += $grade;
        }
        $average = $average / count($this->grades); // When reading array, no need for sqr brackets 
        return $average;
    }

    public function __get($avgGrade): int
    {
        $avgGrade = 0;
        foreach ($this->grades as $grade) {
            $avgGrade += $grade;
        }
        $avgGrade = $avgGrade / count($this->grades); // When reading array, no need for sqr brackets 
        return $avgGrade;
    }
}

$book = new Gradebook();

// When calling object method have to use thin arrow. Φ is this the same as anonymous/lamda function in PHP ?
$book->addGrade(5); // Invoke a method 
$book->addGrade(7); // Invoke a method

//print_r($book->averageGrade());
print_r($book->grades);
print_r($book->avgGrade);


var_dump($book);



/* General observations */



// With private properties, they only show as `declared` if they are read. If they are only written to, 
// they don't count as declared. 

// When we refer to properties within the class we must use $this->PROPERTY. We can't use $PROPERTY and 
// $this->$PROPERTY counts as a new var declaration so drop the second `$` 
