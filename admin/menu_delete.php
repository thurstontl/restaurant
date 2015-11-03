<?php

include("../global.php");

$id = intval($_GET["id"]);
mysqli_query($connection,"delete from menu where id = $id");

header("Location: menu_list.php");

?>