<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      template.php
* @Package:   GetSimple
* @Action:    Simple Theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<html>
    <?php include("header.inc.php"); ?>
    <body>
        <div id="cssmenu">
            <ul>
                <?php get_navigation(return_page_slug()); ?>    
            </ul>
        </div>
        <h1><?php get_page_title(); ?></h1>
        <?php get_page_content(); ?> 
        <?php include("footer.inc.php"); ?>
    </body>
</html>