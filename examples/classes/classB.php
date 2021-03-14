<?php


/* Second example
 *  Nullable types 
 *  Setters and getters
 * */


/* General observations */


// With typed public properties they cannot be declared without assignment. This gives fatal error. You can't get around this by using `null` because this will violate the type assignment. But instead of using a blank value like 0 or `` you can use nullable types to allow for a null default value.

// For strings this is `?string`


declare(strict_types=1);

class AddNamesAge
{

    public ?string $name = null; // String as nullable type
    public ?int $age = null; // Int as nullable type

    public function addName(string $aName): void // Set functionality without explicit set syntax
    {
        $this->name = $aName;
    }

    public function returnName(): string // Get functionality without explicit get syntax
    {
        return $this->name;
    }

    public function returnAge(int $currentYear, int $birthYear): int
    {
        $this->age = $currentYear - $birthYear;
        return $this->age;
    }
}

$nameAgeObj = new AddNamesAge();
$nameAgeObj->addName('Richard');
print_r($nameAgeObj->returnName()); // Richard
print_r($nameAgeObj->returnAge(2021, 1988)); // 33



/* We can improve the above with using explicit getters and setters */

class nameGetSet
{
    // public ?string $name = null;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    public function __get($name)
    {
        return $name;
    }
}

$anotherNameObj = new nameGetSet();
$anotherNameObj->name = "Autechre";
print_r($anotherNameObj->name);

/* When we use __set, we don't need to define the property separately from the __set method like in the AddNames class 
 * It is not necessary to declare it first as a property before createing the set method.
 * Similarly with __get, the property is created by the __set, so we don't need to predefine it as a property
 */
