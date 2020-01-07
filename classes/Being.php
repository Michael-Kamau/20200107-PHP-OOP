<?php
namespace myNamespace;

abstract class Being {

    protected $isAlive = true;

    public function isAlive() {

        if ($this->isAlive) {
            echo "I am alive :)<br>";
        } else {
            echo "I am not alive :( <br>";
        }
    }

    public function kill() {

        $this->isAlive = false;
    }
}
