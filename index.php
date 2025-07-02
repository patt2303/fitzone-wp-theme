<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="FitZone is a top-tier gym focused on strength, fitness, and nutrition coaching in Mumbai.">
  <meta name="keywords" content="gym, fitness, personal training, JSR, workout, nutrition">
  <meta name="author" content="FitZone Gym">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- HEADER / NAVIGATION -->
  <header class="site-header">
    <div class="container">
      <h1 class="logo">FitZone</h1>
      <nav class="main-nav">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#programs">Programs</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- HERO SECTION -->
  <section class="hero">
    <img src="https://i.pinimg.com/736x/76/c7/6a/76c76a7a19d36104ad013fe959f5f8ef.jpg" alt="FitZone Gym" loading="lazy">
    <h1>Build Your Best Body</h1>
    <p>Welcome to FitZone – your transformation starts here.</p>
    <a href="#programs" class="btn">Explore Programs</a>
  </section>

  <!-- ABOUT SECTION -->
  <section class="about">
    <h2>About FitZone</h2>
    <p>We are a strength & conditioning gym focused on building a strong community and stronger bodies. Our trainers and programs are customized to help you achieve your goals safely and effectively.</p>
  </section>

  <!-- PROGRAMS SECTION -->
  <section class="programs" id="programs">
    <img src="https://i.pinimg.com/736x/9f/2d/ba/9f2dba0f77574b71f3817917676b3176.jpg" alt="FitZone Gym" loading="lazy">
    <h2>Our Programs</h2>
    <div class="program-grid">
      <div class="program">
        <h3>Personal Training</h3>
        <p>One-on-one training with certified coaches.</p>
      </div>
      <div class="program">
        <h3>Group Classes</h3>
        <p>High-intensity, fun, and community-driven classes.</p>
      </div>
      <div class="program">
        <h3>Nutrition Coaching</h3>
        <p>Customized diet plans that fit your body and goal.</p>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS SECTION -->
  <section class="testimonials">
    <h2>What Our Clients Say</h2>
    <?php
    $testimonials = new WP_Query(['post_type' => 'testimonial']);
    while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
      <div class="testimonial">
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
      </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
  </section>

  <!-- CONTACT SECTION / FOOTER -->
  <footer class="site-footer" id="contact">
    <div class="footer-container">
      <div class="footer-left">
        <h2>FitZone Gym</h2>
        <p>Your transformation partner</p>
      </div>
      <div class="footer-right">
        <p><strong>Email:</strong> contact@fitzone.com</p>
        <p><strong>Location:</strong> Sector 21, Gym Street, JSR</p>
        <p><strong>Phone:</strong> +91 8271939828</p>
      </div>
    </div>
    <div class="copyright">
      &copy; <?php echo date("Y"); ?> FitZone Gym. All rights reserved.
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>

</html>