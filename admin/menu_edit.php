<?php

include("../global.php");

$id = intval($_GET["id"]);

$res = mysqli_query($connection,"select * from menu where id = $id");

$row = mysqli_fetch_assoc($res);

$title =  $row["title"];
$description = $row["description"];
$category = $row["category"];
$filename = $row["filename"];

include("menu_form.php");

?>