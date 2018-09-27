<?php


    function getWeapon($input)
    {
        $a00 = array("Hand Axe", "", 5);
        $a01 = array("Battle Axe", "", 7);
        $a02 = array("Great Axe", "", 15);
        $a03 = array("Shortbow", "__ Shortbow Arrows", 2);
        $a04 = array("Longbow", "__ Longbow Arrows", 2);
        $a05 = array("Light Crossbow", "__ Light Quarrels", 7);
        $a06 = array("Heavy Crossbow", "__ Heavy Quarrels", 14);
        $a07 = array("Dagger", "", 1);
        $a08 = array("Silver Dagger", "", 1);
        $a09 = array("Shortsword", "", 3);
        $a10 = array("Longsword/Scimitar", "", 4);
        $a11 = array("Two-Handed Sword", "", 10);
        $a12 = array("Warhammer", "", 6);
        $a13 = array("Mace", "", 10);
        $a14 = array("Maul", "", 16);
        $a15 = array("Club/Cudgel", "", 1);
        $a16 = array("Quarter Staff", "", 4);
        $a17 = array("Pole Arm", "", 15);
        $a18 = array("Sling", "__ Bullets", 0);
        $a19 = array("Spear", "", 5);


        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19);
        
        return $array1[$input];
        
    }

function isWeaponTwoHanded($input, $value)
{
    if($input === "Axe, battle+")
    {
        $value += 1;
    }
    else if($input === "Flail, heavy+")
    {
        $value += 1;
    }
    else if($input === "Hammer, war+")
    {
        $value += 1;
    }
    else if($input === "Morningstar+")
    {
        $value += 1;
    }
    else if($input === "Pick, heavy+")
    {
        $value += 1;
    }
    else if($input === "Pole Arm+")
    {
        $value += 1;
    }
    else if($input === "Quarterstaff+")
    {
        $value += 1;
    }
    else if($input === "Sword, two-handed+")
    {
        $value += 1;
    }
    else if($input === "Trident+")
    {
        $value += 1;
    }
    
    return $value;
    
}

function isWeaponBastardSword($input, $value)
{
    if($input === "Sword, bastard^")
    {
        $value = 100;
    }
    return $value;
}

function weaponNotes($value)
{
    $comments = "";
    
    if($value >= 1 && $value <= 20)
    {
        $comments = "+ Two-handed weapon";
    }
    else if($value === 100)
    {
        $comments = "^ Can be used one-handed or two-handed";
    }
    else if($value > 100)
    {
        $comments = "+ Two-handed weapon<br/>^ Can be used one-handed or two-handed";
    }
    
    return $comments;
    
}




?>