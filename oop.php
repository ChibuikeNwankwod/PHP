<?php

class Student{
    private $name;
    public $email;
    protected $major;
    const NUM_OF_PAGES =10;
   public static $counter = 0;

    function __construct($name, $email, $major){
        $this->name = $name;
        $this->email = $email;
        $this->major = $major;
        self::$counter +=1;
    }

    function getName(){
        echo $this->name.self::NUM_OF_PAGES;
    }
}


class DigitecStudents extends Student{
    public $course_duration;
    

    function __construct($name, $email, $major, $course_duration){
        $this->name = $name;
        $this->email=$email;
        $this->major = $major;
        $this->course_duration = $course_duration;
    }
}



$student_1= new Student("Daniel", "daniel@mail.com","programming");
$student_2 = new Student("peter", "peter@mail.com","programming");


$digiOne = new Student("Daniel", "daniel@mail.com","programming", "3 months");

echo $student_2->getName();


// echo Student::NUM_OF_PAGES;

echo Student::$counter;