<?php
include 'header.php';
?>

<div id="welcomeBox">

<h1 class="middleText">Do you confirm your logout?</h1>

<a href="index.php" onclick="<?php session_destroy(); ?>" class="button">logout 1 </a>


<h1 id="thank-you" class="middleText">Thanks for using our system</h1>

	


	<br>


</div> 


<?php
include 'footer.php';
?>
