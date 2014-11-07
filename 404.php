<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage WeDesign
 * @since wedesign 1.0
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="center-block error-404">
                <section class="text-center">
                    <h1>Error 404</h1>
                    <h2>Page not found</h2>
                    <p class="lead lead-lg">The requested URL was not found on this server. That is all we know.</p>
                </section>
                <section>
                    <form role="form" id="center-form">
                        <div class="form-group">
                            <input class="form-control input-lg" type="text" placeholder="Search here">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-ar btn-block btn-lg btn-success">Search</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div> <!-- row -->
</div> <!-- container -->


<?php
// Gets footer.php
get_footer();

?>