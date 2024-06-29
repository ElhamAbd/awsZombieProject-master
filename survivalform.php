<!DOCTYPE html>
<html>

	<head>
		<title>Survival Form</title>
		<link rel="stylesheet" href="landingPage.css"/>
<table border ="10" border-top-style="solid" color="black" width="70%" align="center">
   <tr align="center">
   <td width="25%"><a href="index.php">Home</a></td>
   </tr>
  
   </table>
		<script>
			function doClear()
			{
				document.SurvivalForm.name.value ="";
				document.SurvivalForm.phone.value ="";
				document.SurvivalForm.mail.value ="";
				document.SurvivalForm.address.value ="";
				document.SurvivalForm.city.value ="";
				document.SurvivalForm.zip.value ="";
				document.SurvivalForm.state.value ="";
				
				document.SurvivalForm.sizes[0].checked = false;
				document.SurvivalForm.sizes[1].checked = false;
				document.SurvivalForm.sizes[2].checked = false;
				return;
			}
			
			function doSubmit()
			{
			if (validateName() == false)
				{
				alert("Required data missing Name !");
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
				alert("Required data missing Address !");
				return;
				}
				if (validateCity() == false)
				{
				alert("Required data missing City !");
				return;
				}
				if (validateZip() == false)
				{
				alert("Required data missing Zip !");
				return;
				}
				if (validateState() == false)
				{
				alert("Required data missing State !");
				return;
				}
			if (validateRadio() == false)
				{
				alert("Required data missing in Survival duration ");
				return;
				}
				alert("Your Survival Form Registration has been submitted You will receive a e-mail in 3-7 days.");
				return;
				}
			function validateName()
			{
				var name = document.SurvivalForm.name.value;
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
			function validateZip()
			{
				var zip = document.SurvivalForm.zip.value;
				if (zip.length == 0) return false;
				return true;
			}
			function validateState()
			{
				var state = document.SurvivalForm.state.value;
				if (state.length == 0) return false;
				return true;
			}
			function validateRadio()
			{
			if (document.SurvivalForm.sizes[0].checked) return true;
			if (document.SurvivalForm.sizes[1].checked) return true;
			if (document.SurvivalForm.sizes[2].checked) return true;
			return false;
			}
		
			</script>
			</head>
	
			<body>
			
		<form name="SurvivalForm" class='form' action="/survivalform.php">
				<h1>Survival Form</h1>
				<p>
				<h4>Please Fill out the Following Form:</h4>
				<font face="Courier New">
				Name: &nbsp;&nbsp;&nbsp;<input name="name" size="50" type="text"><br>
				Phone: &nbsp;&nbsp;<input name="phone" size="15" type="text"><br>
				E-mail: &nbsp;<input name="mail" size="50" type="text"><br>
				Address: <input name="address" size="50" type="text"><br>
				City: &nbsp;&nbsp;&nbsp;<input name="city" size="15" type="text"><br>
				Zip: &nbsp;&nbsp;&nbsp;&nbsp;<input name="zip" size="5" type="text"><br>
				State: &nbsp;&nbsp;<input name="state" size="2" type="TEXT"><br>
			
				<h5>What type of resources do you have?</h5>
				<input type="checkbox" id="water" name="water" value="Water">
				<label for="water">Water</label><br>
				<input type="checkbox" id="food" name="food" value="Food">
				<label for="food">Canned Foods</label><br>
				<input type="checkbox" id="weapon" name="weapon" value="Weapon">
				<label for="weapon">Weapons</label><br>
				<input type="checkbox" id="vehicle" name="vehicle" value="Vehicle">
				<label for="vehicle">Vehicle</label><br>
				<input type="checkbox" id="tool" name="tool" value="Tool">
				<label for="tool">Tools</label><br>
				<input type="checkbox" id="medicine" name="medicine" value="Medicine">
				<label for="medicine">Medicine</label><br>
				<input type="clothes" id="clothes" name="clothes" value"Clothes">
				<label for="clothes">Clothes</label><br>
				<input type="checkbox" id="misc" name="misc" value="Misc">
				<label for="misc">Misc</label><br><br>
				<h5>What type of resources do you need?</h5>
				<input type="checkbox" id="water" name="water" value="Water">
				<label for="water">Water</label><br>
				<input type="checkbox" id="food" name="food" value="Food">
				<label for="food">Canned Foods</label><br>
				<input type="checkbox" id="weapon" name="weapon" value="Weapon">
				<label for="weapon">Weapons</label><br>
				<input type="checkbox" id="vehicle" name="vehicle" value="Vehicle">
				<label for="vehicle">Vehicle</label><br>
				<input type="checkbox" id="tool" name="tool" value="Tool">
				<label for="tool">Tools</label><br>
				<input type="checkbox" id="medicine" name="medicine" value="Medicine">
				<label for="medicine">Medicine</label><br>
				<input type="checkbox" id="clothes" name="clothes" value"Clothes">
				<label for="clothes">Clothes</label><br>
				<input type="checkbox" id="misc" name="misc" value="Misc">
				<label for="misc">Misc</label><br><br>
				
				<h4>Survival Duration:</h4>
				<font face="Courier New">
				<input name="sizes" type="radio">1 month - 6 months<br>
				<input name="sizes" type="radio">6 months - 1 Year<br>
				<input name="sizes" type="radio">1 year - 5 Years<br>
				</font>
				
			
				</p>
				
				<input type="button" value="Submit" onClick="doSubmit()">
				<input type="button" value="Clear Entries" onClick="doClear()">
				</form>
				</body>
</html>
