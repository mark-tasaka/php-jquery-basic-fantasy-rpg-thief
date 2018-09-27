<?php

function demiHumanTraits ($race)
{
    $traits = "";
    
    if($race === "Dwarf")
    {
        $traits = "Dwarves have darkvision 60'.<br/>
        Able to detect slanting passages, traps, shifting walls and<br/>new construction
        on a roll of 1-2 on 1d6.";
    }
    else if($race === "Elf")
    {
        $traits = "Elves have darkvision 60'.<br/>
        Able to find secret doors on a roll of 1-2 on 1d6.";
    }
    else if($race === "Halfling")
    {
        $traits = "+1 bonus for ranged attacks.<br/>
        +2 AC bonus when attacked by creatures larger than man-sized<br/>
        +1 bonus to initiative rolls.<br/>
        Only 10% of being detected when remaining still in forest terrain.";
    }
    else
    {
        $traits = "Humans gain a 10% bonus to all experience points earned.";
    }
    
    return $traits;

}



?>