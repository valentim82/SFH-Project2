<?php
include 'header.php';

?>


<br>


<div id="welcomeBox">

    
	<h1 class="middleText">Hello, recover yout password</h1>
	<br>

	<form method="post" action="send-email.php">

		<div class="whiteBg leftSide">
		
		      
        <input name="email" type="text" class="inARow" placeholder="email">

        <input type="hidden" name="emailType" value="lostPassword">

		</div>

		<input type="submit" name="submit" value="Submit" class="lastFormField blueButton">
		

	</form>


	<br>



</div> 





<?php
include 'footer.php';
?>
