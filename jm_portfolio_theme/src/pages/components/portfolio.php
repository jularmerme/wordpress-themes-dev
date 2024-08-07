<!--portfolio start -->
  <section id="<?php the_field('section_id'); ?>" class="portfolio">
    <div class="portfolio-details">

      <div class="section-heading text-center">
        <h2><?php the_field('section_id'); ?></h2>
      </div>

      <?php if(have_rows('side')) { ?>
        <?php $counter = 0; ?>
        <div class="container">
          <div class="portfolio-content">
            <div class="isotope">
              <div class="row">

                <?php while(have_rows('side')) { the_row(); ?>
                  <?php $image = get_sub_field('image'); ?>

                  <?php if($counter % 2 == 0) echo '<div class="col-sm-4">'; ?>

                    <div class="item">
                      <img src="<?php echo $image['sizes']['portfolio'] ?>" alt="portfolio image"/>
                      <div class="isotope-overlay">
                        <a href="<?php the_sub_field('link'); ?>" target="_blank">
                          <?php the_sub_field('technology'); ?>
                        </a>
                      </div>
                    </div>

                    <?php $counter++; ?>
                  <?php if($counter % 2 == 0) echo '</div>'; ?>

                <?php } ?>

              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  </section>
<!--portfolio end -->