<?php 
include("../global.php");
include("../header.php");
?>

<section id="introduction">
  <div class="row">
    <div class="small-12 small-centered columns">
    	<h1 style="font-size:21px">
      <?php	if ($_SESSION["id"] == "") {
			echo "You must be logged in to view this page, you foodie. Click <a href='login_form.php'>here</a> to login.";
			die();

		} else {
			echo "Welcome, " . $_SESSION["firstname"] . "<br>" . "This is where you add a new item." . "<br><br>";?></h1>
			<h1 style="font-size:12px"><?php
			echo "Click <a href='logout.php'>here</a> to logout." . "<br><br>";
			echo "Click <a href='menu_list.php'>here</a> to view the list." . "<br>";
		} 

		if ($errormessage != "") {
		echo $errormessage;}?></h1>
    </div>
  </div>
</section>


<section id="photo_banner">
  <div class="row">
    <div class="small-12 small-centered columns">
    	<div id="login_box">

			<form action="menu_process.php" method="POST" enctype="multipart/form-data">
				<h1>Add your item.</h1><br>
				<div class="row">
		          <div class="small-6 small-centered columns">
		            <label>
						<input type="hidden" name="id" value="<?php echo $id;?>">
					</label>
					</div>
				</div>

				<div class="row">
					<div class="small-6 small-centered columns">
						<label>
							<input type="text" placeholder="Title" name="title" value="<?php echo htmlspecialchars($title,ENT_QUOTES); ?>"><br />
						</label>
					</div>
				</div>

				<div class="row">
					<div class="small-6 small-centered columns">
						<label>
							<input type="text" placeholder="Description" name="description" value="<?php echo htmlspecialchars($description,ENT_QUOTES); ?>"><br />
						</label>
					</div>
				</div>

				<div class="row">
					<div class="small-6 small-centered columns">
						<label>
							<select name="category">
							<option value="appetizer">Appetizer</option>
							<option value="salad">Salad</option>
							<option value="entree">Entree</option>
							<option value="dessert">Dessert</option>
							<option value="libation">Libation</option>
							</select><br /><br>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="small-6 small-centered columns">
						<label>
							<input type="file" name="image_filename"><br><br>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="small-6 small-centered columns">
						<label>
							<input type="submit" value="Save" role="button" aria-label="submit form" class="button"/>
						</label>
					</div>
				</div>
			</form>

		</div>
    </div>
  </div>
</section>			

<?php
include("../footer.php");
?>