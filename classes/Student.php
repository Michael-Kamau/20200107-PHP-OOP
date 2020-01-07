<?php
namespace myNamespace;

class Student extends Person  implements Details{

    private $name;
    use MyTraits;

    public function __construct($name, $dob) {
        $this->name = $name;
        parent::__construct($dob);
    }

    public function getName() {

        return $this->name;
    }

    public function display_data()
    {
        // TODO: Implement display_data() method.
        echo $this->getName() . " is " .  $this->getAge() . " years old<br>";

    }
}
