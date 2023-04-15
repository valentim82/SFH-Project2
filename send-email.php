<?php
include 'header.php';

?>


<br>


<div id="welcomeBox">

    

	<br>
    <?php
    if ($_POST['emailType']=="newAccount"){
        //echo "test newAccount";
        echo "<h1 class=\"middleText\">Dear Admin, we send a email to ".$_POST['email']." with new account information:</h1>";
        echo "<h2 class=\"middleText\">First name is ".$_POST['firstName']." and Last name is ".$_POST['lastName']."</h2>";
        echo "<h2 class=\"middleText\">New user is a ".$_POST['role']."</h2>";
    }elseif($_POST['emailType']=="lostPassword"){
        //echo "test lostPassword";
        echo "<h1 class=\"middleText\">Dear Manager, we send a email to ".$_POST['email']." with a link to create a new password.</h1>";
    }else{
        echo "<p> You have a error.</p> <br>";
    }

  

    ?>
   


	<br>


</div> 





<?php
include 'footer.php';