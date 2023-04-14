<?php

get_header();
pageBanner(array(
  "title" => "Our Campuses",
  "subtitle" => "We have several conveniently located campuses."
));
?>

<div class="container container--narrow page-section">
  <div class="acf-map">
    <?php
    while (have_posts()) {
      the_post();
      $mapLocation = array("lat" => "1.376870", "lng" => "103.955147", "address" => "1 Pasir Ris Cl, Singapore 519599");
    ?>
      <div class="marker" data-lat="<?php echo $mapLocation["lat"] ?>" data-lng="<?php echo $mapLocation["lng"]; ?>">
        <h3>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?></a>
        </h3>
        <?php
        $getTitle = get_the_title();
        $title = str_replace(" ", "%20", $getTitle);
        ?>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20160.837871702287!2d103.95559578427447!3d1.3163695937324917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19115b5d7c61%3A0x5e9b9f11c1d28b33!2s<?php echo urlencode($title); ?>!5e0!3m2!1sen!2ssg!4v1649943520992" width="100%" height="140" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    <?php } ?>
  </div>
</div>

<?php get_footer();

?>