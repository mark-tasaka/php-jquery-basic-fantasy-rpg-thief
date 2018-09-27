<?php

    function getArmour($input)
    {
        $a01 = array("", 0, 0);
        $a02 = array("Leather Armour", 2, 15);
        $a03 = array("Chain Mail", 4, 40);
        $a04 = array("Plate Mail", 6, 50);


        $array1= array($a01, $a02, $a03, $a04);
        
        return $array1[$input];
        
    }


    function getShield($input)
    {
        $a01 = array("", 0, 0);
        $a02 = array("X", 1, 5);


        $array1= array($a01, $a02);
        
        return $array1[$input];
        
    }

?>