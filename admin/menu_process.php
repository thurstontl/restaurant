<?php
include("../global.php");

$title = mysqli_real_escape_string($connection,$_POST["title"]);
$description = mysqli_real_escape_string($connection,$_POST["description"]);
$category = mysqli_real_escape_string($connection,$_POST["category"]);

if ($title == "") {
	$errormessage = $errormessage . "Title is required <br />";
}

if ($description == "") {
	$errormessage = $errormessage . "Description is required <br />";
}

if (is_uploaded_file($_FILES["image_filename"]["tmp_name"])) {
	$filename = uniqid("image") . ".jpg";
	copy($_FILES["image_filename"]["tmp_name"],"uploads/" . $filename);
} else {
	$errormessage = $errormessage . "Beautiful, mouth-watering image is required." . "<br />";
}

if ($errormessage != "") { //if errormessage has a value
	include("menu_form.php");
	die();
}

mysqli_query($connection, "insert into menu (title,description,category,image_filename) values ('$title','$description','$category','$filename')");

header("Location: menu_list.php");
?>
