<?php
include 'header.php';

?>


<br>


<div id="welcomeBox">

    <h1 class="middleText">Dear <?php if (isset($_POST['role'])) { echo $_POST['role']; } ?>, choose one of the links below to solve your problem:</h1>

	<br>
    <?php
    if ($_POST['role']=="Admin"){
        echo "<h2 class=\"middleText\"> <a href=\"new-account.php\">Open a new account.</a> <br>";
    }elseif($_POST['role']=="Manager"){
        echo "<h2 class=\"middleText\"> <a href=\"lost-password.php\">Recover your password.</a> <br>";
    }elseif($_POST['role']=="CEO"){
        echo "<h2 class=\"middleText\"> <a href=\"need-help.php\"> Help.</a> <br>";
    }else{
        echo "<h2 class=\"middleText\"> <p> You do not informe a proper role.</p> <br>";
    }

  

    ?>
    <a href="isnt-working.php">Click here if your PC is not working</a>
    </h2>


	<br>


</div> 





<?php
include 'footer.php';
?>
