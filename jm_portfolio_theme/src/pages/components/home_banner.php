<?php $hero_group = get_field('hero'); ?>

<?php // printr($hero_group); ?>
    
<!--welcome-hero start -->
<section id="<?php echo $hero_group['section_name']; ?>" class="welcome-hero" >
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="header-text">
          <h2><?php echo $hero_group['heading']; ?></h2>
          <p><?php echo $hero_group['subheading']; ?></p>
          <a href="<?php echo $hero_group['button']['file']['url']; ?>" download><?php echo $hero_group['button']['text']; ?></a>
        </div>
      </div>
    </div>
  </div>

</section>
<!--welcome-hero end -->