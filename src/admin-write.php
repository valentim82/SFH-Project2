<?php
include 'header.php';
?>

<?php
include 'dbconnect.php';
?>





<?php
   $heading = $_POST['heading'];
   $tripDate = $_POST['tripDate'];
   $duration = $_POST['duration'];
   $summary = $_POST['summary'];



   // Validate and format the date
    $dateObj = date_create($tripDate);
    if ($dateObj) {
        $formattedDate = date_format($dateObj, 'Y-m-d');
    
    // Now use $formattedDate in your SQL query
    $sql = "INSERT INTO tripdb (heading, tripDate, duration, summary) VALUES ('$heading', '$formattedDate', '$duration', '$summary')";
    
    // Rest of your code
    // ...
    } else {
        echo "Error: Invalid date format";
    }

   if (mysqli_query($conn, $sql)) {
       header("Location: admin-confirm.php");
   } else {
       echo "Error: " . $sql . "
       " . mysqli_error($conn);
   }
?>






<?php
include 'footer.php';
?>

