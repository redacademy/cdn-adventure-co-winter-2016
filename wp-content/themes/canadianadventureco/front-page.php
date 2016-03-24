<?php get_header() ?>
<!-- This is the hero banner -->
<section>
   <div class="banner front-hero">
      <div class="banner-text">
         The mountains are calling
      </div>
   </div>
</section>

<!-- This is the "what/where/how" section -->
<section>
   <div class="banner column-what">
      <div class="main-title">
         <h1>Where/What/How</h1>
      </div>
      <div class="single-column">
         <p>
            Located in the Punch Bowl region of the Rocky Mountains, the Mallard Mountain Lodge is the home of the Canadian Adventure Company. Small groups of 9 come from all over to stay with us and experience one of the most remote regions in the Canadian Rockies by 30-minute helicopter ride.
         </p>
      </div>
      <button class="">
         Explore the lodge
      </button>
   </div>
</section>

<!-- This is the Packages banner image section -->
<section>
   <div class="banner summer-hero">
      <div class="banner-text">
         Summer &amp; Winter Packages
      </div>
   </div>
</section>

<!-- This is the Where adventure meets... section -->
<section>
   <h2 class="center">Where adventure and relaxation meet</h2>
   <div class="triple-column container">
      <div class="front-single-column container">
         <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/snow-icon.png" alt="an icon depicting a snowflake" class="icon"/>
         <h3>Winter outdoor activities</h3>
         <p>
            Spend your day skiing, snowboarding or snowshoeing in the backcountry with out expert guide.
         </p>
      </div>

      <div class="front-single-column container">
         <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/sun-icon.png" alt="an icon depicting a shining sun" class="icon"/>
         <h3>summer outdoor activities</h3>
         <p>
            In the warmer months, hike amoungst the wildflowers and creeks.
         </p>
      </div>

      <div class="front-single-column container">
         <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/lodge-icon.png" alt="an icon depicting a house" class="icon"/>
         <h3>relaxation at the lodge</h3>
         <p>
            At the end of the day, relax in the beautiful Mallard Mountain Lodge.
         </p>
      </div>

   </div>
</section>

<hr>
<!-- this is the unique adventure section  -->
<section>
   <h2 class="triple-column container center">We offer a unique adventure in the remote wilderness of the Canadian Rockies</h2>
   <div class="triple-column container">
      <div class="front-single-column container">
         <div class="picture-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/03_helicopteraccess.jpg" alt="A picture of a helicopter" class="zoomed in-1"/>
         </div>
         <h3>Helicopter access</h3>
         <p>Our lodge is accessible by 30-minute helicopter from Valemount, BC.
         </p>
      </div>
      <div class="front-single-column container">
         <div class="picture-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/04_backcountry.jpeg" alt="a picture of a wide open field in the mountains" class="full-picture"/>
         </div>
         <h3>backcountry experience</h3>
         <p>
            we are located in one of the most pristine and remote areas of the Rocky Mountains.
         </p>
      </div>

      <div class="front-single-column container">
         <div class="picture-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/05_lodge.jpeg" alt="a picture of Mallard Mountain Lodge at night during winter" class="zoomed in-2"/>
         </div>
         <h3>the mallard mountain lodge</h3>
         <p>
            Our sustainably-built lodge has all the amenities you will need after a day in the backcountry.
         </p>
      </div>

   </div>
</section>

<hr>

<!-- This is the Work with our guests section -->
<section>
   <h2 class="triple-column container center">We work with our guests to create a customized, once-in-a-lifetome adventure.</h2>
   <div class="triple-column container">
      <div class="front-single-column container">
         <div class="picture-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/06_guides.jpg" alt="A picture of a group of cross country skiers" class="zoomed in-3"/>
         </div>
         <h3>expert guides</h3>
         <p>Safety is our first priority, and our guides are experts in the backcountry.
         </p>
      </div>
      <div class="front-single-column container">
         <div class="picture-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/07_meals.jpeg" alt="a picture of a dinner table with a full spread" class="zoomed in-4"/>
         </div>
         <h3>catered or self-catered</h3>
         <p>
            Leave the cooking to us with a fully-catered stay, or choose to bring your own food.
         </p>
      </div>

      <div class="front-single-column container">
         <div class="picture-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/08_smallgroups.jpg" alt="a group of people having fun in the snow" class="zoomed in-5"/>
         </div>
         <h3>small groups</h3>
         <p>
            With maximum groups of 9, guests will experience an intimate experience at the lodge.
         </p>
      </div>

   </div>
</section>

<!-- This is the explore packages section -->
<?php get_template_part( 'template-parts/content', 'explore' ); ?>

<!-- This is the video -->
<section>
   <?php //iframe video goes here. ?>
</section>

<!-- This is the image grid section  -->
<section>
   <?php //a loop will go here, looping over the images to create a grid of pictures. ?>
</section>

<!-- This is the map section -->
<section>
   <?php //this is either an image or an iframe ?>
   <button class="button">
      how to get here
   </button>
</section>

<!-- This is the newsletter section -->
<section>
   <h2>subscribe to our newsletter</h2>
   <p>
      Stay up to date on the latest deals and news from the mountain!
   </p>
   <form class="" action="submit" method="post">
      <input type="email" name="name" value="">
      <div class="button">
         sign up
      </div>
   </form>
</section>

<?php get_footer() ?>
