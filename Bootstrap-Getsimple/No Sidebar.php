<!DOCTYPE html>
<html lang="en">
    <?php include("header.inc.php"); ?>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <?php get_navigation(return_page_slug()); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="page-header">
                <h1><?php get_page_title(); ?> <small><?php get_component('tagline'); ?></small></h1>
            </div>
                <?php get_page_content(); ?>
            <?php include("footer.inc.php")?>
        </div>
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="<?php get_theme_url(); ?>/js/bootstrap.min.js"></script>
    </body>
</html>