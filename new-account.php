<?php
include 'header.php';

?>


<br>


<div id="welcomeBox">

    
	<h1 class="middleText">Hello, create a new account</h1>
	<br>

	<form method="post" action="send-email.php">

		<div class="whiteBg leftSide">
		
		<input name="firstName" type="text" class="inARow" placeholder="First Name">

		<input name="lastName" type="text" class="inARow" placeholder="Last Name">
        
        <input name="email" type="text" class="inARow" placeholder="email">

        <input type="hidden" name="emailType" value="newAccount">

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
