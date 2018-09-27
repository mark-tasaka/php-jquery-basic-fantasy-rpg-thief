<?php

function openLocks ($level)
{
    $base = 20;
    $bonus = 0;
    
    if($level <= 9)
    {
        $bonus = $level * 5;
    }
    else if($level >=10 && $level <= 15)
    {
        $bonus = 45 + (($level - 9) * 3);
    }
    else if($level >= 16)
    {
        $bonus = 63 + (($level - 15) * 1);
    }
    
    return $base + $bonus;
    
}


function removeTraps ($level)
{
    $base = 15;
    $bonus = 0;
    
    if($level <= 9)
    {
        $bonus = $level * 5;
    }
    else if($level >=10 && $level <= 15)
    {
        $bonus = 45 + (($level - 9) * 3);
    }
    else if($level >= 16)
    {
        $bonus = 63 + (($level - 15) * 1);
    }
    
    return $base + $bonus;
    
}



function pickPockets ($level)
{
    $base = 25;
    $bonus = 0;
    
    if($level <= 9)
    {
        $bonus = $level * 5;
    }
    else if($level >=10 && $level <= 15)
    {
        $bonus = 45 + (($level - 9) * 4);
    }
    else if($level >= 16)
    {
        $bonus = 69 + (($level - 15) * 1);
    }
    
    return $base + $bonus;
    
}


function moveSilently ($level)
{
    $base = 20;
    $bonus = 0;
    
    if($level <= 9)
    {
        $bonus = $level * 5;
    }
    else if($level >=10 && $level <= 15)
    {
        $bonus = 45 + (($level - 9) * 3);
    }
    else if($level >= 16)
    {
        $bonus = 63 + (($level - 15) * 2);
    }
    
    return $base + $bonus;
    
}



function climbWalls ($level)
{
    $base = 79;
    $bonus = $level;
    
    return $base + $bonus;
    
}


function hide ($level)
{
    $base = 5;
    $bonus = 0;
    
    if($level <= 9)
    {
        $bonus = $level * 5;
    }
    else if($level >=10 && $level <= 15)
    {
        $bonus = 45 + (($level - 9) * 3);
    }
    else if($level >= 16)
    {
        $bonus = 63 + (($level - 15) * 1);
    }
    
    return $base + $bonus;
    
}


function listen ($level)
{
    $base = 26;
    $bonus = 0;
    
    if($level <= 9)
    {
        $bonus = $level * 4;
    }
    else if($level >=10)
    {
        $bonus = 36 + (($level - 9) * 3);
    }
    
    return $base + $bonus;
    
}



?>