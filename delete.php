<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user delette
$id = $_GET['id'];

// Delete user row from table based on given idd
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>
