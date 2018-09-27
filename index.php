<!DOCTYPE html>
<html>
<head>
<title>Launch Page: Basic Fantasy RPG Thief Generator</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2018">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="css/github_ll_additions.css"/> 
	<link rel="stylesheet" href="css/github_ll_style.css"/> 
	<link rel="stylesheet" href="css/github_ll_additions_advance.css"/> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="images/title.png" alt="Basic Fantasy RPG Generator" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>The Basic Fantasy Role-Playing Game Thief Character Generator is designed primarily with PHP and jQuery/JavaScript.  The Launch Page has a series of drop-down menus, input fields and checkboxes, where alignments, weapons, armour, gear, character level, etc., are added to the character sheet.  When the submit button is entered, the information (variables) is collected through POST methods and added to the character sheet.  Several of the variables POSTED modify the values on the character sheet; therefore, jQuery or PHP functions have been created to make these adjustments possible.</p>

        <p>Several of the jQuery/JavaScript functions are stored in external files, as a means of creating greater design efficiency, with the goal of designing a program with high cohesion and low coupling.  In this way, this program replicates Object-Oriented design.  JSON is used to store multi-column variables, with jQuery functions used to retrieve these variables.    </p>    

        <br/>
        <br/>
    
          
		<form action="" id ="thiefForm"  target="_blank" method="post">
            

            <div class="content9">
  
            <span class="formIputDescription">Character's Name:</span>
            <input type="text" id="characterName" name="theCharacterName" value="" class="nameBox">

            <br/>
            <br/>
            
            
            <span class="formIputDescription">Player's Name:</span>
            <input type="text" id="playerName" name="thePlayerName" value="" class="nameBox">
            
            <br/>
            <br/>
                
                            
            <span class="formIputDescription">Character Level:</span>	
			  <select id="level" name="theLevel" class="alignmentBox">	
				<option value="1" selected>1st Level, Thief</option>
				<option value="2">2nd Level, Thief</option>
				<option value="3">3rd Level, Thief</option>
				<option value="4">4th Level, Thief</option>
				<option value="5">5th Level, Thief</option>
				<option value="6">6th Level, Thief</option>
				<option value="7">7th Level, Thief</option>
				<option value="8">8th Level, Thief</option>
				<option value="9">9th Level, Thief</option>
				<option value="10">10th Level, Thief</option>
				<option value="11">11th Level, Thief</option>
				<option value="12">12th Level, Thief</option>
				<option value="13">13th Level, Thief</option>
				<option value="14">14th Level, Thief</option>
				<option value="15">15th Level, Thief</option>
				<option value="16">16th Level, Thief</option>
				<option value="17">17th Level, Thief</option>
				<option value="18">18th Level, Thief</option>
				<option value="19">19th Level, Thief</option>
				<option value="20">20th Level, Thief</option>
			  </select>
            
            <br/>
            <br/>
                
                    
                <span class="formIputDescription">Race:</span>	
			  <select id="chracterRace" name="theCharacterRace" class="alignmentBox">	
				<option value="Human" selected>Human</option>
				<option value="Dwarf">Dwarf</option>
				<option value="Elf">Elf</option>
				<option value="Halfling">Halfling</option>
			  </select>
                
                
            <br/>
            <br/>
                            
                <span class="formIputDescription">Ability Scores:</span>	
			  <select id="abilityScores" name="theAbilityScore" class="alignmentBox">	
				<option value="1" selected>3d6 (Old School)</option>
				<option value="2">4d6, drop the lowest</option>
			  </select>
            
                
            <br/>
            <br/>
                
                            

                            
            <span class="formIputDescription">Armour:</span>	
			  <select id="armour" name="theArmour" class="alignmentBox">			
                <option value="0" selected>No Armour</option>
				<option value="1">Leather Armour</option>
			  </select>
            
            <br/>
            <br/>         

            <span class="formIputDescription">Wealth:</span>	
			  <select id="gold" name="theGold" class="alignmentBox">			
                <option value="0" selected></option>
				<option value="1">d6 silver and 2d6 copper pieces&#42;</option>
				<option value="2">2d6 electrum and 2d6 silver pieces&#42;</option>
				<option value="3">3d6 gold and 2d6 electrum pieces&#42;</option>
				<option value="4">d6 platinum and 3d6 gold pieces&#42;</option>
				<option value="5">3d6 platinum and 3d6 gold pieces&#42;</option>
			  </select>
                <p>
               <span class="footnote2">&#42;d6 x 10 coins</span></p>
            
            <br/>
                

                <span class="weaponBoxHeader">Weapons:</span>
                <br/><br/>
                
            <div id="weaponsGroupings"><span class="weaponSubHead">Axes:</span><br/>
                <input type="checkbox" name="theWeapons[]" value="0"> Hand Axe<br/>
                <input type="checkbox" name="theWeapons[]" value="1"> Battle Axe<br/>  
                <input type="checkbox" name="theWeapons[]" value="2"> Great Axe<br/>  
                <br/>
                <span class="weaponSubHead">Bows:</span><br/>
                <input type="checkbox" name="theWeapons[]" value="3"> Shortbow<br/>  
                <input type="checkbox" name="theWeapons[]" value="4"> Longbow<br/> 
                <input type="checkbox" name="theWeapons[]" value="5"> Light Crossbow<br/>   
                <input type="checkbox" name="theWeapons[]" value="6"> Heavy Crossbow<br/> 
               <br/>
                <span class="weaponSubHead">Daggers:</span><br/> 
                <input type="checkbox" name="theWeapons[]" value="7"> Dagger<br/>  
                <input type="checkbox" name="theWeapons[]" value="8"> Silver Dagger<br/> 
                <br/>
                <span class="weaponSubHead">Swords:</span><br/>
                <input type="checkbox" name="theWeapons[]" value="9"> Shortsword<br/> 
                <input type="checkbox" name="theWeapons[]" value="10"> Longsword/Scimitar<br/> 
                <input type="checkbox" name="theWeapons[]" value="11"> Two-handed Sword<br/> 
                
                <br/>
                <br/>
                <br/>
                <span class="weaponSubHead">Hammers and Maces:</span><br/>
                <input type="checkbox" name="theWeapons[]" value="12"> Warhammer<br/> 
                <input type="checkbox" name="theWeapons[]" value="13"> Mace<br/> 
                <input type="checkbox" name="theWeapons[]" value="14"> Maul<br/> 
                <br/>
                <span class="weaponSubHead">Other:</span><br/>
                <input type="checkbox" name="theWeapons[]" value="15"> Club/Crugel<br/> 
                <input type="checkbox" name="theWeapons[]" value="16"> Quarterstaff<br/> 
                <input type="checkbox" name="theWeapons[]" value="17"> Pole Arm<br/> 
                <input type="checkbox" name="theWeapons[]" value="18"> Sling<br/> 
                <input type="checkbox" name="theWeapons[]" value="19"> Spear<br/> 
                
                </div>
                <br/>
                <br/>
                
                <span class="weaponBoxHeader">Equipment:</span>
                <br/><br/>
                
            <div id="gearGroupings">
                <input type="checkbox" name="theGear[]" value="0"> Backpack<br/>
                <input type="checkbox" name="theGear[]" value="1"> Belt Pouch<br/>  
                <input type="checkbox" name="theGear[]" value="2"> Bit and bridle<br/>  
                <input type="checkbox" name="theGear[]" value="3"> Candles, 12<br/>  
                <input type="checkbox" name="theGear[]" value="4"> Chalk, small bag<br/>  
                <input type="checkbox" name="theGear[]" value="5"> Cloak<br/>   
                <input type="checkbox" name="theGear[]" value="6"> Clothing, commoners<br/>  
                <input type="checkbox" name="theGear[]" value="7"> Glass bottle or vial<br/>  
                <input type="checkbox" name="theGear[]" value="8"> Grappling Hook<br/> 
                <input type="checkbox" name="theGear[]" value="9"> Holy Symbol<br/> 
                <input type="checkbox" name="theGear[]" value="10"> Holy Water, vial<br/> 
                <input type="checkbox" name="theGear[]" value="11"> Ink, jar<br/> 
                <input type="checkbox" name="theGear[]" value="12"> Iron Spikes, 12<br/> 
                <input type="checkbox" name="theGear[]" value="13"> Ladder, 10 feet<br/> 
                <input type="checkbox" name="theGear[]" value="14"> Lantern<br/> 
                <input type="checkbox" name="theGear[]" value="15"> Lantern Bullseye<br/> 
                <input type="checkbox" name="theGear[]" value="16"> Lantern, Hooded<br/> 
                <input type="checkbox" name="theGear[]" value="17"> Map or Scroll case<br/> 
                <input type="checkbox" name="theGear[]" value="18"> Mirror, small metal<br/> 
                <input type="checkbox" name="theGear[]" value="19"> Oil, flask<br/> 
                <input type="checkbox" name="theGear[]" value="20"> Padlock, 2 keys<br/> 
                <input type="checkbox" name="theGear[]" value="21"> Paper, sheet<br/> 
                <input type="checkbox" name="theGear[]" value="22"> Pole, 10' wooded<br/> 
                <input type="checkbox" name="theGear[]" value="23"> Quill<br/> 
                <input type="checkbox" name="theGear[]" value="24"> Quill Knife<br/> 
                <input type="checkbox" name="theGear[]" value="25"> Quiver or Bolt Case<br/> 
                <input type="checkbox" name="theGear[]" value="26"> Rations (dry), 1 week<br/> 
                <input type="checkbox" name="theGear[]" value="27"> Rope, Hemp (50')<br/> 
                <input type="checkbox" name="theGear[]" value="28"> Rope, Silk (50')<br/> 
                <input type="checkbox" name="theGear[]" value="29"> Sack, Large<br/>  
                <input type="checkbox" name="theGear[]" value="30"> Sack, Small<br/>  
                <input type="checkbox" name="theGear[]" value="31"> Saddle, Pack<br/>  
                <input type="checkbox" name="theGear[]" value="32"> Saddle, Riding<br/>  
                <input type="checkbox" name="theGear[]" value="33"> Saddlebags, pair<br/>  
                <input type="checkbox" name="theGear[]" value="34"> Spellbook (128 pages)<br/>   
                <input type="checkbox" name="theGear[]" value="35"> Tent, large (10 men)<br/>   
                <input type="checkbox" name="theGear[]" value="36"> Tent, small (1 man)<br/>   
                <input type="checkbox" name="theGear[]" value="37" checked> Thieves' Tools<br/>   
                <input type="checkbox" name="theGear[]" value="38"> Tinderbox<br/>   
                <input type="checkbox" name="theGear[]" value="39"> Torches, 6<br/>   
                <input type="checkbox" name="theGear[]" value="40"> Whetstone<br/>   
                <input type="checkbox" name="theGear[]" value="41"> Whistle<br/>   
                <input type="checkbox" name="theGear[]" value="42"> Waterskin/wineskin<br/>   
                <input type="checkbox" name="theGear[]" value="43"> Winter blanket<br/>   
      
                </div>
                
                <br/>
                <br/>

            
		<div class="content8">
            
			  
            			  
			<div class="generatorButtonA2">
			
			     <span class="generatorbuttonsC1">

				
                    <input type="submit" value="" id="generate_characters2"/>
			     
                </span>
				
			     <span class="generatorbuttonsC1">
				
                     <input type="reset"  value="" id="reset_generator2"/>
		
				</span>
                
		
            </div>
            </div>
            
				
            </div>
            
            </form>
            
            
            
                
                
                	
                <script>
        
                    $("#generate_characters2").click(function(){
         
    
                        $("#thiefForm").attr('action', "character/basic_thief" + $("#abilityScores").val() +  ".php");
    
                    });
                    
                </script>
        
                
      
    </section>


</body>
</html>