<?php
namespace myNamespace;
abstract class Person extends Being {

    protected $dob;
    private $age;
    private $year= 2020;

    public function __construct($dob) {
        $this->dob = $dob;
    }

    public function setDob($dob) {
        $this->dob = $dob;
    }

    public function getAge() {
        $this->age=$this->year-$this->dob;
        return $this->age;
    }
}
