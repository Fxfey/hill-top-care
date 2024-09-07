<?php /* Template Name: Home */
get_header();

wp_enqueue_style('home-style', get_template_directory_uri(). '/css/pages/home.css');

// include the hero logic
include_once(get_template_directory() . "/inc/hero.php");

?>

<div class="page-container">
    <!-- Introduction / About Us Summary -->
    <div class="container">
        <h2 class="page-title">Welcome to Hill Top Care</h2>
        <p class="page-text">At Hill Top Care, we are dedicated to offering exceptional care and support to the elderly in a nurturing and comfortable environment. Our experienced caregivers are here to provide personalized assistance, ensuring the highest quality of life for your loved ones.</p>
    </div>
    <div class="btn-wrapper">
        <a href="/about" class="btn">Learn More About Us</a>
    </div>
</div>


<?php get_footer(); ?>
