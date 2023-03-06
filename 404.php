<?php
/**
 * 404 Page for our theme
 *
 * This is the template that displays all of the footer section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pronations Themes
 * @subpackage Pronations Landing Theme
 * @since 2.1.0
 */

get_header();
?>
<div class="tz-404-error">
    <div class="error-404">
        <h1 class="error-text"> oops error</h1>
        <div class="container">
            <div class="astronaut row">
                <div class="man-astronaut col-lg-3 col-md-3 col-sm-3">
                    <img src="https://cdn.jsdelivr.net/gh/developershohel/global-404@main/assets/img/404/man-astronaut.webp" alt="man astronaut">
                </div>
                <div class="text-404 col-lg-6 col-md-6 col-sm-6">
                    <img src="https://cdn.jsdelivr.net/gh/developershohel/global-404@main/assets/img/404/404.webp" alt="404 error" class="image-404">
                    <img src="https://cdn.jsdelivr.net/gh/developershohel/global-404@main/assets/img/404/404-astronaut.webp" class="astronaut-404" alt="404-astronaut">
                </div>
                <div class="woman-astronaut col-lg-3 col-md-3 col-sm-3">
                    <img src="https://cdn.jsdelivr.net/gh/developershohel/global-404@main/assets/img/404/woman-astronaut.webp" alt="woman astronaut">
                </div>
            </div>
        </div>

        <div class="content-404">
            <h2>This page is outside of the Universe</h2>
            <p class="font-lg text-inverted paragraph-readable push-center">The page you are trying to access does
                not exist or has been moved.<br>Try going back to our homepage.</p>
            <a href="<?php echo esc_url(home_url()); ?>" class="btn btn-primary mb-3">Go to
                homepage</a>

            <p class="support-link font-sm">If you think this is an error, contact our support team at <a
                        href="mailto:support@pronations.com">support@pronations.com</a></p>
        </div>
    </div>
</div>
<?php get_footer(); ?>
