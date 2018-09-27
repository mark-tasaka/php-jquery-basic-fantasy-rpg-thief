
function attackBonus (level)
{
    let toHit = 1;
    
    if(level >= 3 && level <= 4)
    {
        toHit = 2;
    }
    else if(level >= 5 && level <= 6)
    {
        toHit = 3;
    }
    else if(level >= 7 && level <= 8)
    {
        toHit = 4;
    }
    else if(level >= 9 && level <= 11)
    {
        toHit = 5;
    }
    else if(level >= 12 && level <= 14)
    {
        toHit = 6;
    }
    else if(level >= 15 && level <= 17)
    {
        toHit = 7;
    }
    else if(level >= 18 && level <= 20)
    {
        toHit = 8;
    }
    
    return toHit;
}
