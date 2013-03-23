<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      template.php
* @Package:   GetSimple
* @Action:    Bootstrap Theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<html lang="en">
    <?php include("header.inc.php"); ?>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="<?php get_page_url(); ?>"><?php get_site_name(); ?></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <?php get_navigation(return_page_slug()); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span9">
                    <div class="page-header">
                        <h1><?php get_page_title(); ?> <small><?php get_component('tagline'); ?></small></h1>
                    </div>
                    <div class="row-fluid">
                        <?php get_page_content(); ?>
                    </div>
                </div>
                <div class="span3">
                    <div class="well">
                        <?php get_component("sidebar"); ?>
                    </div>
                </div>
            </div>
            <?php include("footer.inc.php")?>
        </div>
        <?php include("scripts.inc.php")?>
    </body>
</html>