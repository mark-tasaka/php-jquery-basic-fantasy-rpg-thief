<?php


function getGear($input)
{
    
        $a00 = array("Backpack", 0);
        $a01 = array("Belt Pouch", 0);
        $a02 = array("Bit and bridle", 3);
        $a03 = array("Candles (12)", 0);
        $a04 = array("Chalk (small bag)", 5);
        $a05 = array("Cloak", 1);
        $a06 = array("Clothing (commoners)", 4);
        $a07 = array("Glass bottle or vial", 1);
        $a08 = array("Grappling Hook", 4);
        $a09 = array("Holy Symbol", 0);
        $a10 = array("Holy Water (vial)", 0);
        $a11 = array("Ink (jar)", 0);
        $a12 = array("Iron Spikes (12)", 1);
        $a13 = array("Ladder (10 feet)", 10);
        $a14 = array("Lantern", 2);
        $a15 = array("Lantern Bullseye", 3);
        $a16 = array("Lantern Hooded", 2);
        $a17 = array("Map or Scroll case", 1);
        $a18 = array("Mirror (small metal)", 0);
        $a19 = array("Oil (flask)", 1);
        $a20 = array("Padlock (2 keys)", 1);
        $a21 = array("Paper (sheet)", 0);
        $a22 = array("Pole (10' wooded)", 10);
        $a23 = array("Quill", 0);
        $a24 = array("Quill Knife", 0);
        $a25 = array("Quiver or Bolt Case", 1);
        $a26 = array("Rations (dry) x1 week", 10);
        $a27 = array("Rope Hemp (50')", 5);
        $a28 = array("Rope Silk (50')", 2);
        $a29 = array("Sack (Large)", 0);
        $a30 = array("Sack (Small)", 0);
        $a31 = array("Saddle (Pack)", 15);
        $a32 = array("Saddle (Riding)", 35);
        $a33 = array("Saddlebags (pair)", 7);
        $a34 = array("Spellbook (128 pages)", 1);
        $a35 = array("Tent Large (10 men)", 20);
        $a36 = array("Tent Small (1 man)", 10);
        $a37 = array("Thieves' picks and tools", 1);
        $a38 = array("Tinderbox (flint and steel)", 1);
        $a39 = array("Torches (6)", 1);
        $a40 = array("Whetstone", 1);
        $a41 = array("Whistle", 0);
        $a42 = array("Waterskin/wineskin", 2);
        $a43 = array("Winter blanket", 3);

    
        $arr= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25, $a26, $a27, $a28, $a29, $a30, $a31, $a32, $a33, $a34, $a35, $a36, $a37, $a38, $a39, $a40, $a41, $a42, $a43);
        
        return $arr[$input];
}




?>