<?php
require 'loader.php';

use myNamespace\Student ;


$persons = array("Peter"=>1935, "Ben"=>2000, "Joe"=>1990);

foreach($persons as $person => $person_dob) {
    echo "<h1>Student Object</h1>";
    $student=new Student($person, $person_dob);
    if($student->getAge()> 50){
        $student->kill();
    }
//    $student = new Student("Michael", 1995);
    $student->display_data();
    $student->attendClass();
    $student->leaveClass();
    $student->isAlive();

    echo "<br><br>";

}

