<?php 
session_start();
if (!isset($_SESSION["userInfo"])) { header('Location: ./index.php'); exit(); }

$userinfo = $_SESSION["userInfo"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Safe Haven Association</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<link href="./teststyle.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script><?php echo " var username = '".  $_SESSION["userInfo"]->username ."';";?></script>
	<script type="text/javascript" src="./script.js"></script>
</head>
<body onload="setup()">
    <div class="main">
        <header>
            <h2>Safe<span class="headerwhite">Haven&trade;</span></h2>
            <h3>OUTBREAK AWARENESS IN ACTION</h3>
        </header>
        <nav class="navbar">
            <ul>
                <li><a onclick="change_page('homepage')">Homepage</a></li> 
                <li><a onclick="change_page('survivorspage')">Survivors</a></li> 
                <li class="dropdown" onclick="drop('dropcontent1')"> 
                    <a class="dropbtn" style="color: inherit;">Inventory</a>
                    <div id="dropcontent1" class="dropcontent" style="display: none;">
                        <a onclick="change_page('inventorypage', 'Food')">Food</a>
                        <a onclick="change_page('inventorypage', 'Clothes')">Clothes</a>
                        <a onclick="change_page('inventorypage', 'Medicine')">Medicine</a>
                        <a onclick="change_page('inventorypage', 'Weapons')">Weapons</a>
                        <a onclick="change_page('inventorypage', 'Tools')">Tools</a>
                        <a onclick="change_page('inventorypage', 'Vehicles')">Vehicles</a>
                        <a onclick="change_page('inventorypage', 'Misc')">Misc</a>
                    </div>
                </li> 
                <li><a onclick="change_page('infectionpage')">Infection Track</a></li>
                <li><a onclick="change_page('formpage')">Survival Form</a></li> 
            </ul> 
            <div id="search">
                <form onsubmit="search(this)">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </nav>
        
        
        <!--Homepage Starts-->
        <div id="homepage" class="page">
        	
    		<div class="welcomeMessage">
    			<p>Welcome to SafeHave! It is great to have you here!<br>The concept is simple: SaveHaven gives you intelligence, resources and locations to stay out of trouble.</p>
    		</div>
    		
    		<div width="650" height="350" align="center" style="margin-top: 35px; margin-bottom: 20px;">
                <video autoplay muted autobuffer controls poster="./img/video_poster.png">
                	<source src="./img/video_Zombies.mp4" type="video/mp4">
                </video>
            </div>
             
             <!--Survival Tips Section-->
            <div class="tipsMainHeading" style="overflow:auto">
                <p>Survival Tips</p>
            </div>
            
            <div class="tipsContents">
            	<div class="waterTips">
            		<div class="tipsTitle">
            			<p>WATER</p>
            		</div>
            		<div class="innerTipsContents">
	            		<ul>
	                        <li>Gather about 1 gallon per person per day</li>
	                        <li><a href="https://www.artofmanliness.com/articles/how-to-find-water-in-the-wild/">How to find a water source</a></li>
	                        <li>Find and gather water filters/purifiers (straws, tablets, bottles)</li>
	                        <li><a href="https://www.artofmanliness.com/articles/filter-purify-water-traveling-camping-survival/">How to filter water</a></li>
	                        <li><a href="https://www.epa.gov/ground-water-and-drinking-water/emergency-disinfection-drinking-water">How to purify water using bleach & iodine</a></li>
	                        <li>Find a clean (running) water source</li>
	                        <li><dt><u>When in doubt, boil the water</u></dt></li>
	                        <li>If you have snow, do not eat it</li>
	                        <dd>- Melt it first and filter</dd>
	                        <li>Collect water from plants/grass (e.g. dew in the morning)</li>
	                    </ul>
                    </div>
            	</div>
            	<!--end of waterTips div-->
            	<div class="foodTips">
            		<div class="tipsTitle">
            			<p>FOOD</p>
            		</div>
            		<div class="innerTipsContents">
	            		<ul>
		                    <li>Stock on non-perishable items, example:</li>
	                        <dd>- Dried/Canned Beans</dd>
	                        <dd>- Dried Fruits/Vegetables</dd>
	                        <dd>- Canned Food</dd>
	                        <dd>- Nut Butters</dd>
	                        <dd>- Grains/Rice</dd>
	                        <dd>- Jerky/Dried Meat</dd>
	                        <dd>- Spam</dd>
	                        <dd>- Granola Bars/Cereal Bars</dd>
	                        <dd>- Pancake/pastry Mixes</dd>
	                        <dd>- High-calorie food/snacks</dd>
	                        <li>Gather fruit/vegetable seeds</li>
	                        <dd>- Grow them in your base/shelter</dd>
	                        <li><a href="https://zombieprepared.org/wilderness-survival-food/">Wilderness Food Guide</a></li>
	                        <li><a href="https://theprepperjournal.com/2017/09/14/survive-wilderness-hunting/">How to Hunt</a></li>
	                        <li><a href="https://survivalfreedom.com/how-to-preserve-meat-in-the-wild/">How to preserve meat</a></li>
	                        <li><a href="https://knowpreparesurvive.com/survival/how-to-preserve-meat-in-the-wild/">How to preserve meat continued</a></li>
	                    </ul>
                    </div>
            	</div>
       			<!--end of foodTips div-->
       			<div class="shelterTips">
            		<div class="tipsTitle">
            			<p>SHELTER</p>
            		</div>
            		<div class="innerTipsContents">
	            		<ul>
		                    <li><a href="https://zombieprepared.org/how-to-build-a-survival-shelter/">How to build a shelter (in the woods, snow, sunny climate)</a></li>
                        	<li>Secure your locations</li>
                        	<dd>- Identify all openings and close up most of them</dd>
                        	<dd>- Only leave 2 or 3 exits/entrances for main use and for emergencies</dd>
                        	<dd>- If the building is easily identifiable, add natural elements to blend in (tree branches, dirt, leaves... etc)</dd>
	                    </ul>
                    </div>
            	</div>
            	<!--end of shelterTips div-->
            	<div class="clothTips">
            		<div class="tipsTitle">
            			<p>CLOTHES</p>
            		</div>
            		<div class="innerTipsContents">
	            		<ul>
		                    <li>Essential Clothes List:</li>
                        	<dd>- Backpacks</dd>
	                        <dd>- Jeans</dd>
	                        <dd>- Shorts</dd>
	                        <dd>- Socks (thin/thick)</dd>
	                        <dd>- Shirts (lightweight)</dd>
	                        <dd>- Boots</dd>
	                        <dd>- Hoodies </dd>
	                        <dd>- Jackets (wind breakers, winter jackets)</dd>
	                        <dd>- Gloves</dd>
	                        <dd>- Camouflage clothes</dd>
	                        <dd>- Fluorescent colored clothes</dd>
	                        <dd>- Undergarments</dd>
	                        <dd>- Belt/Utility belts</dd>
	                        <dd>- Sunglasses</dd>
	                        <dd>- Scarf/Bandana</dd>
	                        <li><a href="https://www.artofmanliness.com/articles/how-to-turn-your-pants-into-a-flotation-device/">How to turn pants into life jacket</a></li>
	                        <li>Sew several layers of denim clothes for armour/protection</li>
	                    </ul>
                    </div>
            	</div>
            	<!--end of clothesTips div-->
            	<div class="firstAidTips">
            		<div class="tipsTitle">
            			<p>First-Aid</p>
            		</div>
            		<div class="innerTipsContents">
	            		<ul>
		                    <li>List of Basic First-Aid Items:</li>
	                        <dd>- Bandages</dd>
	                        <dd>- Cloth Tapes</dd>
	                        <dd>- Compress Dressing/Clothes</dd>
	                        <dd>- Antibiotic Ointments</dd>
	                        <dd>- Antiseptic Wipes</dd>
	                        <dd>- Aspirin</dd>
	                        <dd>- Blankets</dd>
	                        <dd>- Single-use Gloves</dd>
	                        <dd>- Sterile Gauze Pads</dd>
	                        <dd>- Tweezers</dd>
	                        <dd>- Allergy Medicine/EpiPen</dd>
	                        <dd>- Ankle/Knee Brace</dd>
	                        <li><a href="https://www.rei.com/learn/expert-advice/how-to-treat-cuts-scrapes-and-gouges-in-the-backcountry.html">How to patch up a cut wound</a></li>
	                        <li><a href="https://www.artofmanliness.com/articles/how-to-treat-a-gunshot-wound/">How to patch a bullet wound</a></li>
	                        <li><a href="https://www.verywellhealth.com/how-to-use-a-tourniquet-1298298">How to use a tourniquet</a></li>
	                        <li><a href="https://www.tamingthesru.com/blog/procedural-education/field-amputation">How to amputate</a></li>
	                        <li><a href="https://www.medicalnewstoday.com/articles/324712#cpr-step-by-step">How to CPR</a></li>
	                        <li><a href="https://www.footcaremd.org/resources/how-to-help/how-to-care-for-a-sprained-ankle">How to treat sprained ankle</a></li>
	                    </ul>
                    </div>
            	</div>
            	<!--end of firstAidTips div-->
            	<div class="miscTips">
            		<div class="tipsTitle">
            			<p>Misc</p>
            		</div>
            		<div class="innerTipsContents">
	            		<ul>
		                    <li>Tools and Other Items to Gather:</li>
	                        <dd>- Weapons (guns/ammo, bow/arrow, close combat weapons)</dd>
	                        <dd>- Lighters, Matches, Flints</dd>
	                        <dd>- Utility Knives</dd>
	                        <dd>- Knives/Machetes</dd>
	                        <dd>- Pots/Cooking & Eating Utensils</dd>
	                        <dd>- Duct Tapes</dd>
	                        <dd>- Flashlights (battery and motion powered)</dd>
	                        <dd>- Candles</dd>
	                        <dd>- Solar Chargers</dd>
	                        <dd>- Batteries</dd>
	                        <dd>- Ropes</dd>
	                        <dd>- Scissors</dd>
	                        <dd>- Saws</dd>
	                        <dd>- Hammer/Nails</dd>
	                        <dd>- Screw Drivers</dd>
	                        <dd>- Crowbars</dd>
	                        <li>Sanitation Items to Gather:</li>
	                        <dd>- Household Bleach</dd>
	                        <dd>- Soaps</dd>
	                        <dd>- Towels</dd>
	                        <dd>- Alcohol (Regular & Isopropyl)</dd>
	                        <li>Gather spray paints</li>
	                        <dd>- to mark areas already searched and leave messages/signs</dd>
	                        <li><a href="https://scoutingmagazine.org/2017/04/tie-essential-scouting-knots/">How to tie knots</a></li>
	                        <li><a href="https://zombieprepared.org/how-to-build-a-fire/">How to build a fire</a></li>
	                        <li>Documents to Keep:</li>
	                        <dd>- Driver's License</dd>
	                        <dd>- Passport/Birth Certificate</dd>
	                    </ul>
                    </div>
            	</div>
            	<!--end of miscTips div-->
            	
            </div>
            <!--end of tips div-->
            
        </div> 
        <!--end of home page div-->	
        	
        
        <!--Survivor Starts-->
        <div id="survivorspage" class="page" style="display: none;">
        	<div class="survivor">
        		<div class="row">
        			<h1><b>List of Survivors</b></h1>
					  <div class="column" >
					  	
					    <div class="card" >
					      <img src="./img/hope.jpg" alt="Hope" style="width:100%" height="100%">
					      <div class="container">
					        <h2>Hope </h2>
					        <p class="title">House Wife</p>
					        <p>Joined Sept. 2020. Waiting for brother to contact. </p>
					        <p>SAFE AREA 3</p>
					        <p><button class="button"><a href = "mailto: eaabdura@amazon.com">Contact</a></button></p>
					      </div>
					    </div>
					  </div>
					
					  <div class="column">
					    <div class="card">
					      <img src="./img/miracle.jpg" alt="Miracle" style="width:100%">
					      <div class="container">
					        <h2>Miracle</h2>
					        <p class="title">Project Manager</p>
					        <p>Joined May 2018. Waiting for brother and father to contact.</p>
					        <p>SAFE AREA 2</p>
					        <p><button class="button"><a href = "mailto: eaabdura@amazon.com">Contact</a></button></p>
					      </div>
					    </div>
					  </div>
					  
					  <div class="column">
					    <div class="card">
					      <img src="./img/trey.jpg" alt="Trey" style="width:100%">
					      <div class="container">
					        <h2>Trey</h2>
					        <p class="title">Professional Athlete</p>
					        <p>Joined feb 2020. Waiting for freinds to contact.</p>
					        <p>BASE 2</p>
					        <p><button class="button"><a href = "mailto: eaabdura@amazon.com">Contact</a></button></p>
					      </div>
					    </div>
					  </div>
					
					  <div class="column">
					    <div class="card">
					      <img src="./img/Aaron.jpg" alt="Aaron" style="width:100%">
					      <div class="container">
					        <h2>Aaron</h2>
					        <p class="title">Music Producer</p>
					        <p>Joined June of 2021. Waiting on family to contact.</p>
					        <p>SAFE AREA 3</p>
					        <p><button class="button"><a href = "mailto: eaabdura@amazon.com">Contact</a></button></p>
					      </div>
					    </div>
					  </div>
					
					  <div class="column">
					    <div class="card">
					      <img src="./img/luis.jpg" alt="Luis" style="width:100%">
					      <div class="container">
					        <h2>Luis</h2>
					        <p class="title">Astronaut</p>
					        <p>Been working on technology to find cure. Contact to collaborate.</p>
					        <p>SAFE AREA 1</p>
					        <p><button class="button"><a href = "mailto: eaabdura@amazon.com">Contact</a></button></p>
					      </div>
					    </div>
					  </div>
					  
					  <div class="column">
					    <div class="card">
					      <img src="./img/medina.jpg" alt="Madina" style="width:100%">
					      <div class="container">
					        <h2>Madina</h2>
					        <p class="title">Art Director</p>
					        <p>Joined January for 2021. Waiting on Partner to contact.</p>
					        <p>SAFE AREA 1</p>
					        <p><button class="button"><a href = "mailto: eaabdura@amazon.com">Contact</a></button></p>
					      </div>
					    </div>
					  </div>
					  
					  
					  <div class="column">
					    <div class="card">
					      <img src="./img/justin.jpg" alt="Justin" style="width:100%">
					      <div class="container">
					        <h2>Justin</h2>
					        <p class="title">Mountain Guide</p>
					        <p>First to join SafeHaven. Looking for his Daughter and Son.</p>
					        <p>SAFE AREA 1</p>
					        <p><button class="button"><a href = "mailto: eaabdura@amazon.com">Contact</a></button></p>
					      </div>
					    </div>
					  </div>
				  </div>
				  <div class="row">
        			<h1><b>Creators of SafeHaven</b></h1>
					  
					  <div class="column">
					    <div class="card">
					      <img src="./img/marlon.jpg" alt="Marlon" style="width:100%">
					      <div class="container">
					        <h2>Marlon</h2>
					        <p class="title">Mcdonald Manager</p>
					        <p>Now in charge of the food inventory.
					        <br></br>With your help, he looks to be the best inventory manager here at SafeHaven!</p>
					        <p>BASE 2</p>
					        <p><button class="button"><a href = "mailto: eaabdura@amazon.com">Contact</a></button></p>
					      </div>
					    </div>
					  </div>
					  <div class="column">
					    <div class="card">
					      <img src="./img/elham.jpg" alt="Elham" style="width:100%">
					      <div class="container">
					        <h2>Elham</h2>
					        <p class="title">Professor</p>
					        <p>Worked as a professor in her previous life. Now works as a director of SafeHaven.<br></br> Contact for Concerns.</p>
					        <p>BASE 1</p>
					        <p><button class="button"><a href = "mailto: eaabdura@amazon.com">Contact</a></button></p>
					      </div>
					    </div>
					  </div>
					  <div class="column">
					    <div class="card">
					      <img src="./img/opey.jpg" alt="Opey" style="width:100%">
					      <div class="container">
					        <h2>Opey</h2>
					        <p class="title">Captain of bobsled team</p>
					        <p>Now that he have survived, he has chosen to become the safety trainer for SafeHaven Community.</p>
					        <p>BASE 1</p>
					        <p><button class="button"><a href = "mailto: eaabdura@amazon.com">Contact</a></button></p>
					      </div>
					    </div>
					  </div>
					  <div class="column">
					    <div class="card">
					      <img src="./img/peter.jpg" alt="Peter" style="width:100%">
					      <div class="container">
					        <h2>Peter</h2>
					        <p class="title">Firefly Catcher</p>
					        <p>One of the founding members of SafeHaven. He makes sure the lights never turn off here at SafeHaven.</p>
					        <p>BASE 1</p>
					        <p><button class="button"><a href = "mailto: eaabdura@amazon.com">Contact</a></button></p>
					      </div>
					    </div>
					  </div>
					  <div class="column">
					    <div class="card">
					      <img src="./img/colby.jpg" alt="Colby" style="width:100%">
					      <div class="container">
					        <h2>Colby</h2>
					        <p class="title">Dr. Pepper Sponsor</p>
					        <p>He doesn't really like Dr. Pepper. Now works as clothing department Manager at SafeHaven.</p>
					        <p>BASE 1</p>
					        <p><button class="button"><a href = "mailto: eaabdura@amazon.com">Contact</a></button></p>
					      </div>
					    </div>
					  </div>
				  </div>
        	</div>
        	
            <div class="relative">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Hs2tySZ50tNEPHkzVmNcQjoacnHYKQhn" 
                width="1150" height="850"></iframe>
            </div>
        </div>
        <!--end of survivor page-->
        
        <!--Inventory Starts-->
        <div id="inventorypage" class="page" style="display: none;">
            <p id="inventorytitle">Miscellaneous</p>
            <div class="buttons">
                <button id="add" onclick="modalSetup()">Add items</button>
                <button>Delete Items</button>
                <button disabled>Confirm</button>
            </div>
            
            <div id="inventory"></div>
            
            <!-- The Modal -->
            <div id="itemModal" class="modal" style="display: none;">
            	<!--Modal content -->
        		<div class="modal-content">
        			<p class="modaltitle">Enter inventory items to be recored.</p>
        			<form onsubmit="putInventory(this.children); return false;">
        				Category:<select id="modalselect">
        					<option value="food">Food</option>
        					<option value="clothes">Clothes</option>
        					<option value="weapons">Weapons</option>
        					<option value="medicine">Medicine</option>
        					<option value="tools">Tools</option>
        					<option value="vehicles">Vehicles</option>
        					<option value="misc">Misc</option>
        				</select>
        				<input type="text" placeholder="Name"/>
        				<input type="number" placeholder="Quantity" pattern="^[0-9]*$"/>
        				<input type="submit" value="Submit"/>
        			</form>
        			<div id="close" class='close'>+</div>
        		</div>
				<span class="close">&times;</span>
            </div>
        </div>
        <!--end of inventory page-->
        
        <!--Form Page Starts-->
        <div id='formpage' class='page' style='display: none;'>
		<title>Survival Form</title>
		<link rel="stylesheet" href="landingPage.css">
<table border ="10" border-top-style="solid" color="black" width="70%" align="center">
  
   </table>
		<script>
			function doClear()
			{
				document.SurvivalForm.fname.value ="";
				document.SurvivalForm.lname.value ="";
				document.SurvivalForm.phone.value ="";
				document.SurvivalForm.mail.value ="";
				document.SurvivalForm.address.value ="";
				document.SurvivalForm.city.value ="";
				document.SurvivalForm.zip.value ="";
				document.SurvivalForm.state.value ="";
				
				document.SurvivalForm.sizes[0].checked = false;
				document.SurvivalForm.sizes[1].checked = false;
				document.SurvivalForm.sizes[2].checked = false;
				document.SurvivalForm.sizes[3].checked = false;
				document.SurvivalForm.sizes[4].checked = false;
				return;
			}
			
			function doSubmit()
			{
			if (validatefName() == false)
				{
				alert("Required data missing First Name !");
				return;
				}
				if (validatelName() == false)
				{
				alert("Required data missing Last Name !");
				return;
				}
				if (validatePhone() == false)
				{
				alert("Required data missing Phone !");
				return;
				}
				if (validateMail() == false)
				{
				alert("Required data missing E-mail !");
				return;
				}
				if (validateAddress() == false)
				{
				alert("Required data missing City of Origin !");
				return;
				}
				if (validateCity() == false)
				{
				alert("Required data missing What City are you currently in !");
				return;
				}
				if (validateState() == false)
				{
				alert("Required data missing State !");
				return;
				}
				if (validateZip() == false)
				{
				alert("Required data missing Zip !");
				return;	
				}
				
			if (validateRadio() == false)
				{
				alert("Required data missing in How many survivor(s) are you with? !");
				return;
				}
				alert("Your Survival Form Registration has been submitted You will receive a e-mail in 12-24 hours.");
				return;
				}
			function validatefName()
			{
				var name = document.SurvivalForm.fname.value;
				if (name.length == 0) return false;
				return true;
			}
			function validatelName()
			{
				var name = document.SurvivalForm.lname.value;
				if (name.length == 0) return false;
				return true;
			}
			function validatePhone()
			{
				var phone = document.SurvivalForm.phone.value;
				if (phone.length == 0) return false;
				return true;
			}
			function validateMail()
			{
				var mail = document.SurvivalForm.mail.value;
				if (mail.length == 0) return false;
				return true;
			}
			function validateAddress()
			{
				var address = document.SurvivalForm.address.value;
				if (address.length == 0) return false;
				return true;
			}
			function validateCity()
			{
				var city = document.SurvivalForm.city.value;
				if (city.length == 0) return false;
				return true;
			}
			function validateState()
			{
				var state = document.SurvivalForm.state.value;
				if (state.length == 0) return false;
				return true;
			}
			function validateZip()
			{
				var zip = document.SurvivalForm.zip.value;
				if (zip.length == 0) return false;
				return true;
			}
			
			function validateRadio()
			{
			if (document.SurvivalForm.sizes[0].checked) return true;
			if (document.SurvivalForm.sizes[1].checked) return true;
			if (document.SurvivalForm.sizes[2].checked) return true;
			if (document.SurvivalForm.sizes[3].checked) return true;
			if (document.SurvivalForm.sizes[4].checked) return true;
			return false;
			}
		
			</script>
			
		<form id="survivalform" name="SurvivalForm" class="survivalform" onsubmit="survivalform(this)">
				<h1>Survival Form</h1>
				<h4>Please fill out the following Survival Form:</h4>
			
				<font face="Courier New">
				First Name: &nbsp;&nbsp;&nbsp;<input name="fname" size="50" type="text"><br>
				Last Name: &nbsp;&nbsp;&nbsp;<input name="lname" size="50" type="text"><br>
				Phone: &nbsp;&nbsp;<input name="phone" size="15" type="text"><br>
				E-mail: &nbsp;<input name="mail" size="50" type="text"><br>
				City of Origin: <input name="address" size="50" type="text"><br>
				What City are you currently in: &nbsp;&nbsp;&nbsp;<input name="city" size="15" type="text"><br>
				State: &nbsp;&nbsp;<input name="state" size="2" type="TEXT"><br>
				Zip: &nbsp;&nbsp;&nbsp;&nbsp;<input name="zip" size="5" type="text"><br>
				</font>
			
			
				<h4>What type of resources do you have?</h4>
				<input type="checkbox" class="checkmark" id="water" name="water" value="Water">
				<label for="water">Water</label><br>
				<input type="checkbox" class="checkmark" id="food" name="food" value="Food">
				<label for="food">Food</label><br>
				<input type="checkbox" id="weapon" class="checkmark" name="weapon" value="Weapon">
				<label for="weapon">Weapons</label><br>
				<input type="checkbox" id="vehicle" class="checkmark" name="vehicle" value="Vehicle">
				<label for="vehicle">Vehicle</label><br>
				<input type="checkbox" id="tool"class="checkmark" name="tool" value="Tool">
				<label for="tool">Tools</label><br>
				<input type="checkbox" id="medicine" class="checkmark" name="medicine" value="Medicine">
				<label for="medicine">Medicine</label><br>
				<input type="checkbox" id="clothes" class="checkmark" name="clothes" value"Clothes">
				<label for="clothes">Clothes</label><br>
				<input type="checkbox" id="misc" class="checkmark" name="misc" value="Misc">
				<label for="misc">Misc</label><br><br>
			
			
				<h4>What type of resources do you need?</h4>
				<input type="checkbox" id="water" class="checkmark" name="water" value="Water">
				<label for="water">Water</label><br>
				<input type="checkbox" id="food" class="checkmark" name="food" value="Food">
				<label for="food">Food</label><br>
				<input type="checkbox" id="weapon" class="checkmark" name="weapon" value="Weapon">
				<label for="weapon">Weapons</label><br>
				<input type="checkbox" id="vehicle" class="checkmark" name="vehicle" value="Vehicle">
				<label for="vehicle">Vehicle</label><br>
				<input type="checkbox" id="tool"class="checkmark" name="tool" value="Tool">
				<label for="tool">Tools</label><br>
				<input type="checkbox" id="medicine" class="checkmark" name="medicine" value="Medicine">
				<label for="medicine">Medicine</label><br>
				<input type="checkbox" id="clothes" class="checkmark" name="clothes" value"Clothes">
				<label for="clothes">Clothes</label><br>
				<input type="checkbox" id="misc" class="checkmark" name="misc" value="Misc">
				<label for="misc">Misc</label><br><br>
			
			
				<h4>How many survivor(s) are you with?</h4>
				<font face="Courier New">
				<input name="sizes" type="radio" value="1">I am alone<br>
				<input name="sizes" type="radio" value="2-5">2 - 5 survivors <br>
				<input name="sizes" type="radio" value="6-10">6 - 10 survivors<br>
				<input name="sizes" type="radio" value="11-15">11 - 15 survivors<br>
				<input name="sizes" type="radio" value="16+">16 - 20+ survivors<br>
				</font>
		
				<input type="button" value="Submit" onClick="doSubmit()">
				<input type="button" value="Clear Entries" onClick="doClear()">
				</form>
        </div>
        <!--end of form page-->
        
        <!--Infection Page Starts-->
        <div id="infectionpage" style="display: none;">
        	<aside style="border">
            <h2><b>News and updates</b></h2>
            
            <h3><u>May 05, 2017</u></h3>
            <p>There is a survivors' base in New York, New York that has a group of doctors who have been researching a potential cure/vaccine for this infection. 
            They've started their work in early 2017 with hopes for a breakthrough in this battle to find a cure.</p>
            
            <h3><u>August 29, 2016</u></h3>
            <p>The main survivor's base in Atlanta, Georgia has been wiped out by a new variant of zombies. This new kind is able to crawl on all fours and climb on walls and can reach approximately up to 25 mph. 
            Those who were able to make it out safely have fled and have reached a base in Dallas, Texas and delivered the news.</p>
            
            <h3><u>December 7, 2014</u></h3>
            <p>The infection has now covered at least 70% of the continental US and the media and the remainder of the government official have reported that 
            at least 120 million Americans have been either infected or died. <br>Avoid the following cities as they have been overrun by the infected: Chicago, Atlanta, Los Angeles, Las Vegas, Houston.</p>
        	</aside>
        	
        	<aside2>
            <h1><b>Virus Source and Information</b></h1>
            
            <h2><u>How it started</u></h2>
            <article class="aticle">
            <p>The first reported case of the infection was on April 22nd, 2010 in Chicago, Illinois. According to the media, it originated from a basement of a retired Biologist 
            who experimented with an unknown disease that was spreading among the local deer population. The Biologist, who we now identify as the “patient zero”, spread the infection 
            to his family and neighbors in suburban Chicago and the infection spread throughout the entire metropolitan area of Chicago in estimate of 3 weeks. </p>
            </article>
            
            <article class="aticle">
            <p><u>The virus can only be spread through contact with bodily fluids of the infected</u> and it mutates through every infection in each host. It can enter a host body through 
            holes in the body or open wounds and cuts. <u>The virus shows its symptoms of infection within 48 hours of initial exposure</u> and the host loses their consciousness within 72 hours. 
            They turn within 1 week and immediately begins to attack non-infected peoples and animals.</p>
            </article>
            
            <article class="aticle">
            <p><b>The only way identified so far to stop the spread and demobilize the infected hosts is to decapitate them.</b> However, there are reported cases where people who were exposed to the 
            infection could <u>amputate the body part to prevent further spread throughout the body. But this must be done within 24 hours of exposure</u> and the host must be monitored for at least a week 
            to ensure the virus did not spread further throughout the body.</p>
            </article>
            </aside2>
            
            <div id="infectiongif">
            	<img src="./img/Zombie_Spread_Map.gif" alt="infection spreading gif">
            	<p style="margin-left: 320px;"><b>Infection Spread Map, 2010 - 2016</b></p>
            </div>
            
            
        </div>


        <!--end of infection tracker page-->
</body>
	<footer id="footer">
	    <p>&copy; All rights reserved.</p>
	    <marquee behavior="scroll" loop="-1" width="30%">
	        <i>
	  
	  	    <p style="color:black; font-size:25px;">Current Date/Time: <span id='date-time'></span>.</p>
	    
	        <script>
	    
	            var dt = new Date();
		        document.getElementById('date-time').innerHTML=dt;
	    
	  	    </script> 
	    
	        <strong>
	        <span id="time"></span>
	        </strong>      
	    
	        </i>
	    </marquee> 
	</footer>
</html>
