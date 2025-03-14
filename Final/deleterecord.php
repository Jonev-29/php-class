<?php

include("header.html");
?>

<h2>Delete a Record</h2><bl>

<p class="info">First, confirm the ID of the record you want to delete before deleting.</p>
<p class="info">You can use <a href="displaydb.php">THIS PAGE</a> to confirm the ID</p><br>

<form action="deleterecord.php">
    <p>ID: <input type="text" name="id" size="10"></p>
    <input type="submit" name="submit" value="submit">
</form>

<?php
$id = $_POST['id'];
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "final";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Record ID $id deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 


<?php
include("footer.html");
?>