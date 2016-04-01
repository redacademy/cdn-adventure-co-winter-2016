<?php get_header() ?>
<!-- This is the hero banner -->
<section>
   <div class="banner front-hero">
      <div class="banner-text">
         The Mountains are calling
      </div>
   </div>
</section>

<!-- This is the "what/where/how" section -->
<section>
   <div class="center-flex column-flex">
      <div class="title">
         <h1>Where/What/How</h1>
      </div>
      <div class="single-column">
         <p>
            Located in the Punch Bowl region of the Rocky Mountains, the Mallard Mountain Lodge is the home of the Canadian Adventure Company. Small groups of 9 come from all over to stay with us and experience one of the most remote regions in the Canadian Rockies by 30-minute helicopter ride.
         </p>
      </div>

      <a href="/the-lodge" class="button">
            Explore the Lodge
      </a>

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
   <h3 class="center">Where Adventure and Relaxation meet</h3>
   <div class="triple-column container">
      <div class="icons-single-column container">
         <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/snow-icon.png" alt="an icon depicting a snowflake" class="icon"/>
         <h4>Winter Outdoor Activities</h4>
         <p>
            Spend your day skiing, snowboarding or snowshoeing in the backcountry with out expert guide.
         </p>
      </div>

      <div class="icons-single-column container">
         <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/sun-icon.png" alt="an icon depicting a shining sun" class="icon"/>
         <h4>Summer Outdoor Activities</h4>
         <p>
            In the warmer months, hike amoungst the wildflowers and creeks.
         </p>
      </div>

      <div class="icons-single-column container">
         <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/lodge-icon.png" alt="an icon depicting a house" class="icon"/>
         <h4>Relaxation at the Lodge</h4>
         <p>
            At the end of the day, relax in the beautiful Mallard Mountain Lodge.
         </p>
      </div>

   </div>
</section>

<hr>
<!-- this is the unique adventure section  -->
<section>
   <h3 class="center">We offer a unique adventure in the remote wilderness of the Canadian Rockies</h3>
   <div class="triple-column container">
      <div class="front-single-column container">
         <div class="picture-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/03_helicopteraccess.jpg" alt="A picture of a helicopter" class="zoomed in-1"/>
         </div>
         <div class="info-wrapper">
            <h4>Helicopter <br/> Access</h4>
            <p>
               Our Lodge is accessible by 30-minute helicopter from Valemount, BC.
            </p>
         </div>
      </div>
      <div class="front-single-column container">
         <div class="picture-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/04_backcountry.jpeg" alt="a picture of a wide open field in the mountains" class="full-picture"/>
         </div>
         <div class="info-wrapper">
            <h4>Backcountry Experience</h4>
            <p>
               We are located in one of the most pristine and remote areas of the Rocky Mountains.
            </p>
         </div>
      </div>

      <div class="front-single-column container">
         <div class="picture-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/05_lodge.jpeg" alt="a picture of Mallard Mountain Lodge at night during winter" class="zoomed in-2"/>
         </div>
         <div class="info-wrapper">
            <h4>The Mallard Mountain Lodge</h4>
            <p>
               Our sustainably-built lLodge has all the amenities you will need after a day in the backcountry.
            </p>
         </div>
      </div>

   </div>
</section>

<hr>

<!-- This is the Work with our guests section -->
<section>
   <h3 class="center">We work with our guests to create a customized, once-in-a-lifetome adventure.</h3>
   <div class="triple-column container">
      <div class="front-single-column container">
         <div class="picture-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/06_guides.jpg" alt="A picture of a group of cross country skiers" class="zoomed in-3"/>
         </div>
         <div class="info-wrapper">
            <h4>Expert <br/> Guides</h4>
            <p>
               Safety is our first priority, and our guides are experts in the backcountry.
            </p>
         </div>
      </div>
      <div class="front-single-column container">
         <div class="picture-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/07_meals.jpeg" alt="a picture of a dinner table with a full spread" class="zoomed in-4"/>
         </div>
         <div class="info-wrapper">
            <h4>Catered or Self-catered</h4>
            <p>
               Leave the cooking to us with a fully-catered stay, or choose to bring your own food.
            </p>
         </div>
      </div>

      <div class="front-single-column container">
         <div class="picture-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/08_smallgroups.jpg" alt="a group of people having fun in the snow" class="zoomed in-5"/>
         </div>
         <div class="info-wrapper">
            <h4>Small <br/>Groups</h4>
            <p>
               With maximum groups of 9, guests will experience an intimate experience at the Lodge.
            </p>
         </div>
      </div>

   </div>
</section>

<!-- This is the explore packages section -->
<?php get_template_part( 'template-parts/content', 'explore' ); ?>

<!-- This is the video -->
<section>
   <div class="vid-cont center">
      <iframe class="iframe container" src="https://www.youtube.com/embed/jVqoBuc1gFM" frameborder="0" allowfullscreen></iframe>
   </div>
</section>

<!-- This is the image grid section  -->
<section>
   <div class="photogrid">
      <ul>
         <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/grid/01.jpg" alt="" /></li>
         <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/grid/02.jpg" alt="" /></li>
         <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/grid/03.jpg" alt="" /></li>
         <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/grid/04.jpg" alt="" /></li>
         <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/grid/05.jpg" alt="" /></li>
         <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/grid/06.jpg" alt="" /></li>
         <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/grid/07.jpg" alt="" /></li>
         <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/grid/08.jpg" alt="" /></li>
         <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/grid/09.jpg" alt="" /></li>
         <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/grid/10.jpg" alt="" /></li>
         <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/grid/11.jpg" alt="" /></li>
         <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/home/grid/12.jpg" alt="" /></li>
      </ul>
   </div>
</section>

<!-- This is the map section -->
<section>
   <div class="map-cont">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d311094.7126487304!2d-118.259743!3d52.471396!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xda98c98eb93410e8!2sCanadian+Adventure+Company!5e0!3m2!1sen!2sca!4v1458852068826" class="iframe map" frameborder="0" style="border:0" allowfullscreen></iframe>

      <a href="/getting-here" class="button map-btn">
            How to Get Here
      </a>
   </div>
</section>

<!-- This is the newsletter section -->
<section>
   <div class="newsletter single-column center container">
      <h2>Subscribe to our Newsletter</h2>
      <p>
         Stay up to date on the latest deals and news from the mountain!
      </p>
      <form class="news-form" action="submit" method="post">
         <input type="email" name="name" value="" placeholder="email" class="email-input">
         <button class="button sign-up">
            Sign up
         </button>
      </form>
   </div>
</section>

<?php get_footer() ?>
