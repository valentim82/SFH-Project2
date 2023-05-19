<?php
include 'header.php';
?>





<div id="welcomeBox">

	<h1 class="middleText">Welcome to you IT Support System</h1>
	<br>

	<form method="post" action="problem.php">

		<div class="whiteBg leftSide">
		<select name="theTitle" class="firstFormField inARow">
			<option value="Mr">Mr</option>
			<option value="Mrs">Mrs</option>
			<option value="Dr">Dr</option>
			<option value="Mx">Mx</option>
		</select>

		<input name="firstName" type="text" class="inARow" placeholder="First Name">

		<input name="lastName" type="text" class="inARow" placeholder="Last Name">

		<select name="role" class="inARow">
			<option value="Admin">Admin</option>
			<option value="Manager">Manager</option>
			<option value="CEO">CEO</option>
		</select>
		</div>

		<input type="submit" name="submit" value="Submit" class="lastFormField blueButton">
		

	</form>


	<br>


</div> 




<?php
include 'footer.php';
?>

