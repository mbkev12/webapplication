
<?php 
 
   $user = 'id11388980_kmwebdesignnew';
   $pass = 'Coded1234@';
   $db = 'db_id11388980_roothor';
   
   $conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
   
   if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
   }

   echo "Thank you for contacting us <br> <br>";

?>
