<?php get_template_part('partials/head'); ?>
<html>
  <body <?php body_class(); ?>>
<?php get_template_part('partials/header'); ?>


    <main class="">
        <h1 class="home-page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <div class="home-feature">
        <?php the_post_thumbnail('', array( 'class' => 'home-feature-image' ) ); ?>
      </div>
    <?php
      while (have_posts()) : the_post();
    ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="home-content content">
              <?php the_content(); ?>
            </div>

          </div>
        </div>
      </div>
    <?php
      endwhile;
    ?>
  </main>

<?php get_template_part('partials/footer'); ?>

  </body>
</html>
