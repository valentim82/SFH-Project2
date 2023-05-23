# SFH-project3


Our clients pride themselves on their ability to add last minute adventures. It is important to them to have the ability to add adventures quickly and from their phones. 
They would like to see how a site administrator would go about adding an Adventure.  

Pro Tip: Use Part 1 and 2 style as a starting spot

Requirements: 
A database with 5 fields (id and the 4 fields below)
Within  admin-add.php       
Make a form with the following fields:
 1) heading, 2) tripDate, 3) duration, 4) summary
admin-confirm.php must add the data entered from the from into the database
admin-confirm.php must confirm data has been entered and have a link to all-adventures.php
all-adventures.php must list all entries in the database and display them in a manner similar to above


Detailed Instructions
	Using phpMyAdmin create a database with a table. It should have 5 columns
		Column 1: id  -> Int, Unique, and auto incrementing 
		Column 2: heading -> varchar with a limit on the characters 
		Column 3: tripDate -> Date
		Column 4: duration -> Int, length 3
		Column 5: summary -> text




