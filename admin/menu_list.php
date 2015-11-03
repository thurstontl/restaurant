<?php 
	include("../global.php");
	include("../header.php");

	$result = mysqli_query($connection,"select * from menu") or die(mysqli_error($connection));
?>

<section id="introduction">
  <div class="row">
    <div class="small-12 small-centered columns">
    	<h1 style="font-size:21px">
      <?php	if ($_SESSION["id"] == "") {
			echo "You must be logged in to view this page, you foodie. Click <a href='login_form.php'>here</a> to login.";
			die();

		} else {
			echo "Welcome, " . $_SESSION["firstname"] . "<br>" . "This is the editable menu list." . "<br><br>";?></h1>
			<h1 style="font-size:12px"><?php
			echo "Click <a href='logout.php'>here</a> to logout." . "<br><br>";
			echo "Click <a href='menu_form.php'>here</a> to add a new item entirely.";
		} 

		if ($errormessage != "") {
		echo $errormessage;}?></h1>
    </div>
  </div>
</section>

<section id="photo_banner">
      <div class="row">
        <div id="menu_box" class="small-12 small-centered columns">
        	<dl class="accordion" data-accordion>

			  <dd class="accordion-navigation">
			    <a href="#" data-reveal-id="myModal1">Appetizers</a>
          		<div id="myModal1" class="reveal-modal" data-reveal>
			    	<?php
			    	$result = mysqli_query($connection,"select * from menu where category = 'appetizer' ORDER BY title ") or die(mysqli_error($connection));

			    	while ($row = mysqli_fetch_assoc($result)) {

			    	echo "<img src='uploads/" . $row["image_filename"] . "' width='200'>" . "<br><br>";?>
			    	<h4><?php
					echo $row["title"] . " ";?></h4><?php
					echo $row["description"] . "<br>";

					echo "<a href='menu_edit.php?id=" . $row["id"] . "'>Edit</a> " . "&nbsp";
					echo "<a href='menu_delete.php?id=" . $row["id"] . "'>Delete</a> " . "<br><br>";
					} ?>
					<a class="close-reveal-modal">&#215;</a>
			    </div>
			  </dd>

			  <dd class="accordion-navigation">
			    <a href="#" data-reveal-id="myModal2">Salads</a>
          		<div id="myModal2" class="reveal-modal" data-reveal>
					<?php
			    	$result = mysqli_query($connection,"select * from menu where category = 'salad' ORDER BY title ") or die(mysqli_error($connection));

			    	while ($row = mysqli_fetch_assoc($result)) {

			    	echo "<img src='uploads/" . $row["image_filename"] . "' width='200'>" . "<br><br>";?>
			    	<h4><?php
					echo $row["title"] . " ";?></h4><?php
					echo $row["description"] . "<br>";

					echo "<a href='menu_edit.php?id=" . $row["id"] . "'>Edit</a> " . "&nbsp";
					echo "<a href='menu_delete.php?id=" . $row["id"] . "'>Delete</a> " . "<br><br>";
					} ?>
					<a class="close-reveal-modal">&#215;</a>
			    </div>
			  </dd>

			  <dd class="accordion-navigation">
			    <a href="#" data-reveal-id="myModal3">Entrees</a>
              	<div id="myModal3" class="reveal-modal" data-reveal>
			    	<?php
			    	$result = mysqli_query($connection,"select * from menu where category = 'entree' ORDER BY title ") or die(mysqli_error($connection));

			    	while ($row = mysqli_fetch_assoc($result)) {

			    	echo "<img src='uploads/" . $row["image_filename"] . "' width='200'>" . "<br><br>";?>
			    	<h4><?php
					echo $row["title"] . " ";?></h4><?php
					echo $row["description"] . "<br>";

					echo "<a href='menu_edit.php?id=" . $row["id"] . "'>Edit</a> " . "&nbsp";
					echo "<a href='menu_delete.php?id=" . $row["id"] . "'>Delete</a> " . "<br><br>";
					} ?>
					<a class="close-reveal-modal">&#215;</a>
			    </div>
			  </dd>

			  <dd class="accordion-navigation">
			    <a href="#" data-reveal-id="myModal4">Desserts</a>
              	<div id="myModal4" class="reveal-modal" data-reveal>
			    	<?php
			    	$result = mysqli_query($connection,"select * from menu where category = 'dessert' ORDER BY title ") or die(mysqli_error($connection));

			    	while ($row = mysqli_fetch_assoc($result)) {

			    	echo "<img src='uploads/" . $row["image_filename"] . "' width='200'>" . "<br><br>";?>
			    	<h4><?php
					echo $row["title"] . " ";?></h4><?php
					echo $row["description"] . "<br>";

					echo "<a href='menu_edit.php?id=" . $row["id"] . "'>Edit</a> " . "&nbsp";
					echo "<a href='menu_delete.php?id=" . $row["id"] . "'>Delete</a> " . "<br><br>";
					} ?>
					<a class="close-reveal-modal">&#215;</a>
			    </div>
			  </dd>

			  <dd class="accordion-navigation">
			    <a href="#" data-reveal-id="myModal5">Libations</a>
              	<div id="myModal5" class="reveal-modal" data-reveal>
			    	<?php
			    	$result = mysqli_query($connection,"select * from menu where category = 'libation' ORDER BY title ") or die(mysqli_error($connection));

			    	while ($row = mysqli_fetch_assoc($result)) {

			    	echo "<img src='uploads/" . $row["image_filename"] . "' width='200'>" . "<br><br>";?>
			    	<h4><?php
					echo $row["title"] . " ";?></h4><?php
					echo $row["description"] . "<br>";

					echo "<a href='menu_edit.php?id=" . $row["id"] . "'>Edit</a> " . "&nbsp";
					echo "<a href='menu_delete.php?id=" . $row["id"] . "'>Delete</a> " . "<br><br>";
					} ?>
					<a class="close-reveal-modal">&#215;</a>
			    </div>
			  </dd>
			</dl>
        </div>
      </div>
    </section>

<?php

include("../footer.php");
?>