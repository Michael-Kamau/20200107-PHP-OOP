<?php

function autoloadClasses($className){
    $newClassName=explode("\\",$className)[1];
    $filename = "classes/" . $newClassName . ".php";
    if (is_readable($filename)) {
        require $filename;
    }else if(is_readable($filename = "classes/" . $className . ".php")){
        require $filename;
    }
}

function autoloadTraits($traitName){
    $newTraitName=explode("\\",$traitName)[1];
    $filename = "traits/" . $newTraitName . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

function autoloadInterfaces($interfaceName){
    $newInterfaceName=explode("\\",$interfaceName)[1];
    $filename = "interfaces/" . $newInterfaceName . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}
spl_autoload_register("autoloadTraits");
spl_autoload_register("autoloadInterfaces");
spl_autoload_register("autoloadClasses");
