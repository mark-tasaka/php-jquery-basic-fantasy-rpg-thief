<!DOCTYPE html>
<html>
<head>
<title>Basic Fantasy RPG Thief Character Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Basic Fantasy RPG Thief Character Generator. Goblinoid Games.">
	<meta name="keywords" content="Basic Fantasy RPG, Goblinoid Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2018">
		

	<link rel="stylesheet" type="text/css" href="css/ll_thief.css">
	<link rel="stylesheet" type="text/css" href="css/ll_thief_post.css">
    
    
    <script type="text/javascript" src="./js/dieRoll.js"></script>
    <script type="text/javascript" src="./js/modifiers.js"></script>
    <script type="text/javascript" src="./js/hitPoinst.js"></script>
    <script type="text/javascript" src="./js/primeReq.js"></script>
    <script type="text/javascript" src="./js/abilityScoreAddition.js"></script>
    <script type="text/javascript" src="./js/demiHumanAbilityScoreRange.js"></script>
    <script type="text/javascript" src="./js/attackBonus.js"></script>
    <script type="text/javascript" src="./js/encumberance.js"></script>
    
    
    
</head>
<body>
    
    <!--PHP-->
    <?php
    
    include 'php/armour.php';
    include 'php/checks.php';
    include 'php/weapons.php';
    include 'php/gear.php';
    include 'php/coins.php';
    include 'php/classDetails.php';
    include 'php/clothing.php';
    include 'php/characterRace.php';
    include 'php/demiHumanSaveModifier.php';
    include 'php/thiefSkills.php';
    
    
        if(isset($_POST["theCharacterName"]))
        {
            $characterName = $_POST["theCharacterName"];
    
        }
    
        if(isset($_POST["thePlayerName"]))
        {
            $playerName = $_POST["thePlayerName"];
        
        }    
    
        
        if(isset($_POST["theCharacterRace"]))
        {
            $characterRace = $_POST["theCharacterRace"];
        }
    
        if(isset($_POST["theLevel"]))
        {
            $level = $_POST["theLevel"];
        
        } 
    
    
    $exNext = experienceNextLevel($level);
    

    
        if(isset($_POST["theArmour"]))
        {
            $armour = $_POST["theArmour"];
        }
    
        $armourName = getArmour($armour)[0];
        $armourDefense = getArmour($armour)[1];
        $armourWeight = getArmour($armour)[2];
    
    
        $totalAcDefense = $armourDefense;
        $totalArmourWeight = $armourWeight;
    
        $armourDefense = removeZero($armourDefense);
        $armourWeight = removeZero($armourWeight);
    
    
        if(isset($_POST["theGold"]))
        {
            $coins = $_POST["theGold"];
        }
    
        $coinQuantity = getCoins($coins)[0];
        $coinType = getCoins($coins)[1];
        $coinQuantity2 = getCoins($coins)[2];
        $coinType2 = getCoins($coins)[3];
    
    
         
        $weaponArray = array();
        $weaponNames = array();
        $weaponDamage = array();
        $weaponWeight = array();
    
    
        if(isset($_POST["theWeapons"]))
        {
            foreach($_POST["theWeapons"] as $weapon)
            {
                array_push($weaponArray, $weapon);
            }
        }
    
    foreach($weaponArray as $select)
    {
        array_push($weaponNames, getWeapon($select)[0]);
    }
        
    foreach($weaponArray as $select)
    {
        array_push($weaponDamage, getWeapon($select)[1]);
    }
        
    $totalWeaponWeight = 0;
    
    foreach($weaponArray as $select)
    {
        array_push($weaponWeight, getWeapon($select)[2]);
        $totalWeaponWeight += getWeapon($select)[2];
    }
    
    

        $gearArray = array();
        $gearNames = array();
        $gearWeight = array();
    
    
        if(isset($_POST["theGear"]))
        {
            foreach($_POST["theGear"] as $weapon)
            {
                array_push($gearArray, $weapon);
            }
        }
    
        foreach($gearArray as $select)
        {
            array_push($gearNames, getGear($select)[0]);
        }
        
        $totalGearWeightOnly = 0;
    
        foreach($gearArray as $select)
        {
            array_push($gearWeight, getGear($select)[1]);
            $totalGearWeightOnly += getGear($select)[1];
        }

    
    $totalGearWeight = $totalGearWeightOnly;
    
    
    $totalWeightCarried = $totalArmourWeight + $totalWeaponWeight + $totalGearWeight + $coinQuantity;

    
    $demiHumanBreathSave = demiHumanBreathMod ($characterRace);
    $demiHumanPoisonSave = demiHumanPoisonMod($characterRace);
    $demiHumanPetrifySave = demiHumanPetrifyMod($characterRace);
    $demiHumanWandSave = demiHumanWandMod($characterRace);
    $demiHumanSpellSave = demiHumanSpellMod($characterRace);
    
    $vsBreathAttacks = saveBreathAttacks($level) - $demiHumanBreathSave;
    $vsPoisonDeath = savePoisonDeath ($level) - $demiHumanPoisonSave;
    $vsPetrify = savePetrify ($level) - $demiHumanPetrifySave;
    $vsWand = saveWand ($level) - $demiHumanWandSave;
    $vsSpell = saveSpell ($level) - $demiHumanSpellSave;
    
    $characterRaceTraits = demiHumanTraits ($characterRace);
    
    $openLocks = openLocks ($level);
    $removeTraps = removeTraps ($level);
    $pickPockets = pickPockets ($level);
    $moveSilently = moveSilently ($level);
    $climbWalls = climbWalls ($level);
    $hide = hide ($level);
    $listen = listen ($level);
    

    
    ?>

    
	
<!-- JQuery -->
  <img id="character_sheet"/>
   <section>
           
		<span id="strength"></span>
		<span id="dexterity"></span> 
		<span id="constitution"></span> 
		<span id="intelligence"></span>
		<span id="wisdom"></span>
       <span id="charisma"></span>
       
       
           
		<span id="strengthMod"></span>
		<span id="dexterityMod"></span> 
		<span id="constitutionMod"></span> 
		<span id="intelligenceMod"></span>
		<span id="wisdomMod"></span>
       <span id="charismaMod"></span>
		  
       
       <span id="race">
           <?php
           echo $characterRace;
           ?>
       </span>
       
       <span id="saveBreathAttack"></span>
       
       
       <span id="savePoisonDeath"></span>
       <span id="savePetrify"></span>
       <span id="saveWands"></span>
       <span id="saveSpell"></span>
       
       <span id="dieRollMethod"></span>
       
       <span id="melee"><span id="meleeHit"></span> / <span id="meleeDamage"></span></span>
       
       <span id="range"><span id="rangeHit"></span></span>
       
       
       <span id="lightLoad"></span>
       <span id="heavyLoad"></span>
       <span id="lightLoadChecked"></span>
       <span id="heavyLoadChecked"></span>
       
       
       <span id="move"></span>
       
       
       <span id="class">Thief</span>
       
       
       
       <span id="exNextLevel">
           <?php
           echo "Next Level: " . $exNext;
           ?>
       
       </span>
       
  

       <span id="baseAc2"><span id="modifiedAc"></span> (<span id="baseAc"></span>)</span>
       
       <span id="hitPoints"></span>
       
       
       <span id="level">
           <?php
                echo $level;
           ?>
        </span>
       
       <span id="characterName">
           <?php
                echo $characterName;
           ?>
        </span>
       
              
       <span id="playerName">
           <?php
                echo $playerName;
           ?>
        </span>
	                 

              
       <span id="armourName">
           <?php
                echo $armourName;
           ?>
        </span>
              
       
              

       <span id="totalArmourWeight">
            <?php
                echo "Armour weight: " . $totalArmourWeight . " lbs";
            ?>
       </span>
              
       
       <span id="weaponsList">
           <?php
           $val1 = 0;
           $val2 = 0;
           $val3 = 0;
           
           foreach($weaponNames as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
               $val1 = isWeaponTwoHanded($theWeapon, $val1);
               $val2 = isWeaponBastardSword($theWeapon, $val2);
           }
           
           $val3 = $val1 + $val2;
           
           $weaponNotes = weaponNotes($val3);
           
           ?>  
        </span>
       
       <span id="weaponNotes">
           <?php
                echo $weaponNotes;
           ?>
        </span>
            
       <span id="weaponsList2">
           <?php
           foreach($weaponDamage as $theWeaponDam)
           {
               echo $theWeaponDam;
               echo "<br/>";
           }
           ?>        
        </span>
       


       <span id="totalWeaponWeight">
           <?php
           echo "Weapons weight: " . $totalWeaponWeight . " lbs";
           ?>
       </span>

              
       <span id="gearList">
           <?php
           
           $counter = count($gearNames);
           
           foreach($gearNames as $theGear)
           {
               --$counter;
               
               if($counter >= 1)
               {
                    echo $theGear;
                    echo ", ";
               }
               else
               {
                   echo " & "; 
                   echo $theGear;
               }
               
           }
           ?>
       </span>
           

	   	   
       
       <span id="totalGearWeight">
           <?php
           echo "Equipment weight: " . $totalGearWeight . " lbs";
           ?>
       </span>
       


       
       <span id="totalWeightCarried">
           <?php
           echo $totalWeightCarried . " lbs";
           ?>
       </span>
              
       
       <span id="wealth">
           <?php
           
           if($coinQuantity === 0)
           {
               echo "";
           }
           else
           {
           echo ($coinQuantity * 10) . $coinType;
           echo "<br/>";
           echo ($coinQuantity2 * 10) . $coinType2;
               
           }
           ?>
       </span>
       
       <span id="coinWeight">
           <?php
               
           if($coinQuantity === 0)
           {
               echo "";
           }
           else
           {
                echo "Coin weight: " . ($coinQuantity+$coinQuantity2) . " lbs";
           }
           ?>
       </span>
       

       
       <span id="characterRaceTrait">
           <?php
           echo $characterRaceTraits;
           ?>
       </span>
       
       
       <span id="openLocks">
           <?php
           echo $openLocks . "%";
           ?>
       </span>
       
              
       
       <span id="removeTraps">
           <?php
           echo $removeTraps . "%";
           ?>
       </span>

       
       <span id="pickPockets">
           <?php
           echo $pickPockets . "%";
           ?>
       </span>
       
       
       <span id="moveSilently">
           <?php
           echo $moveSilently . "%";
           ?>
       </span>
       
       
       <span id="climbWalls">
           <?php
           echo $climbWalls . "%";
           ?>
       </span>
       

       <span id="hide">
           <?php
           echo $hide . "%";
           ?>
       </span>
       
       
       <span id="listen">
           <?php
           echo $listen . "%";
           ?>
       </span>
       
       
       
	</section>
	

		
  <script>
      

	  
	/*
	 Character() - Thief Character Constructor
	*/
	function Character() {
        
        let strengthBase =  rollDice(6, 3, 0, 0);
        let strength = demiHumanStrength('<?php echo $characterRace ?>', strengthBase);
        let	intelligenceBase = rollDice(6, 3, 0, 0);
        let	intelligence = demiHumanIntelligence('<?php echo $characterRace ?>', intelligenceBase);
        let	wisdom = rollDice(6, 3, 0, 0);
        let dexterityBase = <?php echo rand(9, 18) ?>;
        let dexterity = demiHumanDexterity('<?php echo $characterRace ?>', dexterityBase);
        let constitutionBase = rollDice(6, 3, 0, 0);
        let constitution = demiHumanConstitution('<?php echo $characterRace ?>', constitutionBase);
        let	charismaBase = rollDice(6, 3, 0, 0);
        let	charisma = demiHumanCharisma('<?php echo $characterRace ?>', charismaBase);
        
        let strengthMod = abilityScoreModifier(strength);
        let intelligenceMod = abilityScoreModifier(intelligence);
        let wisdomMod = abilityScoreModifier(wisdom);
        let dexterityMod = abilityScoreModifier(dexterity);
        let constitutionMod = abilityScoreModifier(constitution);
        let charismaMod = abilityScoreModifier(charisma);
        let level = '<?php echo $level ?>';
        let race = '<?php echo $characterRace ?>';
        let encumberance = '<?php echo $totalWeightCarried ?>';
        let ltLoad = lightLoad (race, strengthMod);
        let hyLoad = heavyLoad (race, strengthMod);
        let armour = '<?php echo $armourName ?>';
		
		let thiefCharacter = {
			"strength": strength,
			"dexterity": dexterity,
			"constitution": constitution,
			"intelligence": intelligence,
			"wisdom": wisdom,
			"charisma": charisma,
            "strengthModifer": addModifierSign(strengthMod),
            "intelligenceModifer": addModifierSign(intelligenceMod),
            "wisdomModifer": addModifierSign(wisdomMod),
            "dexterityModifer": addModifierSign(dexterityMod),
            "constitutionModifer": addModifierSign(constitutionMod),
            "charismaModifer": addModifierSign(charismaMod),
            "breathAttack": '<?php echo $vsBreathAttacks ?>',
            "poisonDeath": '<?php echo $vsPoisonDeath  ?>',
            "petrify": '<?php echo $vsPetrify  ?>',
            "wandsSave": '<?php echo $vsWand ?>',
            "spellSave": '<?php echo $vsSpell ?>',
            "acBase": 11 + dexterityMod,
            "acModified": <?php echo $totalAcDefense ?> + 11 + dexterityMod,
            "hp": getHitPoints (level, constitutionMod, race) + addHighLevelHp(level),
            "meleeAttack": strengthMod + attackBonus(level),
            "meleeDamage": strengthMod,
            "rangeAttack": dexterityMod + attackBonus(level),
            "lightLoad": ltLoad + " lbs",
            "heavyLoad": hyLoad + " lbs",
            "lightLoadChecked": lightLoadCheck (ltLoad, encumberance),
            "heavyLoadChecked": heavyLoadCheck (ltLoad, encumberance),
            "speed": encumberanceMove (ltLoad, encumberance, armour) + "'",
			"dieRollMethod": "Ability Score Generation: 3d6 (Old School)"
			
		
			

		};
	    if(thiefCharacter.hitPoints <= 0 ){
			thiefCharacter.hitPoints = 1;
		}
		return thiefCharacter;
	  
	  }
	  


  
       let imgData = "images/thief_character_sheet.png";
      
        $("#character_sheet").attr("src", imgData);
      

	  let data = Character();
		 
      $("#strength").html(data.strength);
      
      $("#intelligence").html(data.intelligence);
      
      $("#wisdom").html(data.wisdom);
      
      $("#dexterity").html(data.dexterity);
      
      $("#constitution").html(data.constitution);
      
      $("#charisma").html(data.charisma);
      
      
		 
      $("#strengthMod").html(data.strengthModifer);
      
      $("#intelligenceMod").html(data.intelligenceModifer);
      
      $("#wisdomMod").html(data.wisdomModifer);
      
      $("#dexterityMod").html(data.dexterityModifer);
      
      $("#constitutionMod").html(data.constitutionModifer);
      
      $("#charismaMod").html(data.charismaModifer);
      
      
      
      $("#dieRollMethod").html(data.dieRollMethod);
      
      $("#saveBreathAttack").html(data.breathAttack);
      $("#savePoisonDeath").html(data.poisonDeath);
      $("#savePetrify").html(data.petrify);
      $("#saveWands").html(data.wandsSave);
      $("#saveSpell").html(data.spellSave);
      
      
      
      $("#baseAc").html(data.acBase);
      $("#hitPoints").html(data.hp);
      $("#modifiedAc").html(data.acModified);
      
      $("#meleeHit").html(addModifierSign(data.meleeAttack));
      $("#meleeDamage").html(addModifierSign(data.meleeDamage));
      $("#rangeHit").html(addModifierSign(data.rangeAttack));
      
      $("#lightLoad").html(data.lightLoad);
      $("#heavyLoad").html(data.heavyLoad);
      $("#lightLoadChecked").html(data.lightLoadChecked);
      $("#heavyLoadChecked").html(data.heavyLoadChecked);
      
      $("#move").html(data.speed);


	 
  </script>
		
	
    
</body>
</html>