<?php 
include("../global.php");
include("../header.php");

if ($errormessage != "") {
	echo "<span style='color:red;'>$errormessage</span><br><br>";
}
?>

<section id="photo_banner">
  <div class="row">
    <div class="small-12 small-centered columns">
    	<div id="login_box">

			<form action="login_process.php" method="POST">
		        <div class="row">
		          <div class="small-6 small-centered columns">
		            <label>
		              <input type="text" placeholder="email" name="email" value="<?php echo htmlspecialchars($email,ENT_QUOTES); ?>"/>
		            </label>
		          </div>
		        
		          <div class="small-6 small-centered columns">
		            <label>
		              <input type="password" placeholder="password" name="password" value="<?php echo htmlspecialchars($password,ENT_QUOTES); ?>"/>
		            </label>
		          </div>
		        </div>

		        <div class="row">
		          <div class="small-12 small-centered columns">
		            <label>
		              <input type="submit" role="button" aria-label="submit form" href="login_process.php" class="button"/>
		            </label>
		          </div>      
		      </form>

		</div>
    </div>
  </div>
</section>

<?php
include("../footer.php")
?>