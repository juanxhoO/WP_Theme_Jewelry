<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JewelryTheme
 */

get_header();
?>
    <div class="container-fluid">
    

    <div class="hero">
    <img src="http://www.woocomerce1.com/wp-content/uploads/2023/03/hero.jpg" alt="hero image">


    </div>

	<main id="primary" class="site-main">

    <!-- Category Carousel -->

        <div>
        <?php
        echo do_shortcode('[product_categories limit="4" orderby="name" order="ASC"]');
        ?>
</div>





	</main><!-- #main -->


    </div>


<?php





get_footer();
