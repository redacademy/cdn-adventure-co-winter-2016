<?php
/**
 * Template Name: The Lodge Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <article class="lodge">
      <section>
         <div class="banner">
            <img src="" alt="" />
            <p>Mallard Mountain Lodge</p>
         </div>
      </section>

      <section>
        <h1>The Mallard Mountain Lodge</h1>
        <p>
          Mallard Mountain Lodge is a classic Canadian log lodge that began construction in the summer 2013
        </p>
        <p>
          The Lodge was partially pre-built off site, then flown by helicopter to our very remote Mallard Peaks area of the Rocky Mountains, where the building was completed.         </p>
        <p>
          The main floor of the lodge features a living and dining room, with wood fired stove, and kitchen. The second floor has sleeping bays along the outside walls, divided by interior walls. The beds (one upper & lower in each bay) are custom made oversize twins for lots of space, each fronted by individual black out privacy curtains, and each with a solar light. The second floor also has a separate room for changing, with a counter and sink for wash up etc. & a mountain shower (full sized stall and curtain, hot water container and overhead nozzle) draining into our greywater system.
        </p>
      </section><!-- .lodge-info -->

      <section>
        <h2>Lodge Amenities</h2>
        <h5>Beds</h5>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry
        </p>
        <h5>Showers</h5>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry
        </p>
        <h5>Kitchen</h5>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry
        </p>
        <h5>Toilet</h5>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry
        </p>
        <h5>Living Space</h5>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry
        </p>
        <h5>Catering</h5>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry
        </p>
        <img src="" alt="" />
      </section><!-- .lodge-amenities -->

      <section>
        <h2>Sustainability</h2>
          <p>
            Sustainability and environmental stewardship are cornerstones of CAC's business and the packages we offer.Here are some highlights.
          </p>
          <p>
            The log Lodge, and all other buildings, were pre-built off site, and reassembled on site. This minimized the disruption associated with onsite crews and machinery.  It was built to accommodate only 7 to 9 guests at a time. This is a very small physical footprint. The lodge uses grey water purification system. CAC uses propane incinerating toilets which create no blackwater discharge, and instead convert all waste to harmless ash.
          </p>
          <p>
            A large solar system with 9 solar panels provides electric power, and is designed to minimize generator usage year round. CAC did not construct a road to the Lodge site. CAC does not build hiking trails. Although there are patterns to hiking routes, with a small group and lots of terrain to work with.
          </p>
          <img src="" alt="" />
      </section><!-- .sustainability -->

      <section>
        <h2>Environmental Stewardship</h2>
        <p>
          Enjoying the outdoors and sharing in the wonder that makes British Columbia a magnificent province are what makes backcountry in the wilderness a popular activity. Without a healthy natural environment, we would lose an integral element of what defines BC as a province. We feel very strongly about the need to protect the health of our natural environment for generations to come.
        </p>
        <p>
          Environmental stewardship means taking care of our environment through our actions. It means practising sensible and responsible management of our resources, through what we do, for the benefit of present and future generations. CAC’s role is to ensure that our pristine wilderness is here in the future.
        </p>
        <img src="" alt="" />
      </section><!-- .stewardship-->

      <?php get_template_part( 'template-parts/content', 'explore' ); ?>
      
    </article><!-- .lodge -->

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
