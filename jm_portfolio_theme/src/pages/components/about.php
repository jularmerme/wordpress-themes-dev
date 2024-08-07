<?php $about = get_field('about'); ?>

<!--about start -->
<section id="<?php echo $about['section_id']; ?>" class="about">
  <div class="section-heading text-center">
    <h2><?php echo $about['section_id']; ?></h2>
  </div>

  <div class="container">
    <div class="about-content">
      <div class="row">
        <div class="col-sm-6">
          <div class="single-about-txt">

            <h3>
              <?php echo $about['introduction']; ?>
            </h3>

            <?php echo $about['description']; ?>
      
            <div class="row">

              <div class="col-sm-4">
                <div class="single-about-add-info">
                  <h3>phone</h3>
                  <p><?php the_field('phone', 'option'); ?></p>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="single-about-add-info">
                  <h3>email</h3>
                  <p><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="single-about-add-info">
                  <h3>GitHub</h3>
                  <p><a href="<?php the_field('website', 'option'); ?>" target="_blank" rel="noopener noreferrer"><?php the_field('website', 'option'); ?></a></p>
                </div>
              </div>

            </div>

          </div>
        </div>
        <div class="col-sm-offset-1 col-sm-5">
          <div class="single-about-img">

            <!-- <img src="/wp-content/themes/browny_portfolio/assets/images/about/profile_image.jpg" alt="profile_image"> -->
            <?php the_post_thumbnail(); ?>

            <?php if(have_rows('social_media', 'option')) { ?>
              <div class="about-list-icon">
                <ul>
                  <?php while(have_rows('social_media', 'option')) { the_row(); ?>
                    <li>
                      <a href="<?php the_sub_field('url', 'option'); ?>" target="_blank" >
                        <i  class="fa fa-<?php the_sub_field('name', 'option'); ?>" aria-hidden="true"></i>
                      </a>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            <?php } ?>

          </div>

        </div>
      </div>
    </div>
  </div>

</section>
<!--about end -->