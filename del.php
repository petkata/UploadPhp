<?php
include 'includes/header.php';
$file = $_GET['file']; //get the filename
unlink('userfiles/'.DIRECTORY_SEPARATOR.$file); //delete it
header('location: files.php');
?>
