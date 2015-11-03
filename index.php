<?php 
include("global.php");
include("header.php");
?>

<section id="opening_page">

      <div class="row">

        <div id="opening_content" class="small-12 small-centered">
          <div class="lighten">
            <h1 style="font-size:60px">Put our food inside you.</h1>
          </div>
        </div>

      </div>

    </section>

    <section id="introduction">
      <div class="row">
        <div class="small-12 small-centered columns">
          <h1 style="font-size:60px">We know food.</h1>
        </div>
      </div>
    </section>

    <div id="hr_line">&nbsp</div>

    <section id="about">

      <img id="portrait" src="img/candid_web.jpg" class="small-12 medium-4 large-4 columns">

      <div class="paragraph">
        <p class="small-12 medium-8 large-8 columns">Hi, I'm Travis. I'm the fat head chef at this prestigious French restaurant. I started cooking before I was born, literally. By the time I was in middle school, I was known for my sick-ass crepes. I had that shit on lock, no doubt.</p>
        <p class="small-12 medium-12 large-8 columns">What we do here is destroy your mouth, but in the best way possible. We source all of our food locally - none of this store bought garbage. We also make all of our syrups and other condiments in-house but we try to stay minimal and let you enjoy each item for what it is.</p>
        <p class="small-12 medium-12 large-8 columns">Also, I'm of French heritage. And Native American, English, Danish and probably some other stuff. But my background really isn't important. What's important here is our food. It's disgustingly legendary. Cheers ~</p>
      </div>

      <div class="row"></div>

    </section>

    <div id="hr_line">&nbsp</div>

    <section id="menu">
      <div class="row">
        <div class="small-12 small-centered columns">
          <h1 style="font-size:60px">Our menu.</h1>
        </div>
      </div>
    </section>

    <br>

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

            echo "<img src='admin/uploads/" . $row["image_filename"] . "' width='200'>" . "<br><br>";?>
            <h4><?php
            echo $row["title"] . " ";?></h4>
            
            <div class="small-12 small-centered columns"><?php
            echo $row["description"] . "<br><br>";
            } ?></div>
            <a class="close-reveal-modal">&#215;</a>
          </div>
        </dd>

        <dd class="accordion-navigation">
          <a href="#" data-reveal-id="myModal2">Salads</a>
          <div id="myModal2" class="reveal-modal" data-reveal>
            <?php
              $result = mysqli_query($connection,"select * from menu where category = 'salad' ORDER BY title ") or die(mysqli_error($connection));

              while ($row = mysqli_fetch_assoc($result)) {

              echo "<img src='admin/uploads/" . $row["image_filename"] . "' width='200'>" . "<br><br>";?>
              <h4><?php
              echo $row["title"] . "<br>";?></h4>

              <div class="small-12 small-centered columns"><?php
              echo $row["description"] . "<br><br>";
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

                echo "<img src='admin/uploads/" . $row["image_filename"] . "' width='200'>" . "<br><br>";?>
                <h4><?php
                echo $row["title"] . "<br>";?></h4>

                <div class="small-10 small-centered columns"><?php
                echo $row["description"] . "<br><br>";
                } ?></div>
                <a class="close-reveal-modal">&#215;</a>
              </div>
            </dd>

            <dd class="accordion-navigation">
              <a href="#" data-reveal-id="myModal4">Desserts</a>
              <div id="myModal4" class="reveal-modal" data-reveal>
                <?php
                $result = mysqli_query($connection,"select * from menu where category = 'dessert' ORDER BY title ") or die(mysqli_error($connection));

                while ($row = mysqli_fetch_assoc($result)) {

                echo "<img src='admin/uploads/" . $row["image_filename"] . "' width='200'>" . "<br><br>";?>
                <h4><?php
                echo $row["title"] . "<br>";?></h4>

                <div class="small-12 small-centered columns"><?php
                echo $row["description"] . "<br><br>";
                } ?></div>
                <a class="close-reveal-modal">&#215;</a>
              </div>
            </dd>

            <dd class="accordion-navigation">
              <a href="#" data-reveal-id="myModal5">Libations</a>
              <div id="myModal5" class="reveal-modal" data-reveal>
                <?php
                $result = mysqli_query($connection,"select * from menu where category = 'libation' ORDER BY title ") or die(mysqli_error($connection));

                while ($row = mysqli_fetch_assoc($result)) {

                echo "<img src='admin/uploads/" . $row["image_filename"] . "' width='200'>" . "<br><br>";?>
                <h4><?php
                echo $row["title"] . "<br>";?></h4>

                <div class="small-12 small-centered columns"><?php
                echo $row["description"] . "<br><br>";
                } ?></div>
                <a class="close-reveal-modal">&#215;</a>
              </div>
            </dd>
          </dl>
        </div>
      </div>
    </section>

    <section id="getintouch">
      <div class="row">
        <div class="small-12 small-centered columns">
          <h1 style="font-size:60px">Get in touch with us.</h1>
        </div>
      </div>
    </section>

    <section id="contact">
      <form>
        <div class="row">
          <div class="small-12 large-6 columns">
            <label>
              <input type="text" placeholder="Firstname" />
            </label>
          </div>
        
          <div class="small-12 large-6 columns">
            <label>
              <input type="text" placeholder="Lastname" />
            </label>
          </div>
        </div>

        <div class="row">
          <div class="small-12 small-centered columns">
            <label>
              <input type="text" placeholder="Email Address" />
            </label>
          </div>
        </div>

        <div class="row">
          <div class="small-12 small-centered columns">
            <label>
              <textarea type="text" placeholder="Message" /></textarea>
            </label>
          </div>
        </div>

        <div class="row">
          <div class="small-12 small-centered columns">
            <label>
              <a role="button" aria-label="submit form" href="#" class="button">Submit</a>
            </label>
          </div>      
      </form>

      <br>

      <div class="row">
        <div id="map" class="small-12 small-centered columns">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5602772.070080925!2d1.7191036000000002!3d46.71109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54a02933785731%3A0x6bfd3f96c747d9f7!2sFrance!5e0!3m2!1sen!2sus!4v1416360445498" width="100%" height="400" frameborder="0" style="border:0"></iframe>
        </div>
      </div>
    </section>


<?php
include("footer.php");
?>
