<?php
include('includes/functions.php');
if(isset($_POST['submit'])) {
	if(isset($_POST['CatName'])) {
		editCat($_POST['CatName'],$_POST['CatDesc'],$_POST['id']);
		header("Location: cats.php");
	} else {
		echo "Please set a category name!";
		include('addCat.php');
	}

} else {
	header("Location: addCat.php");
}

?>