<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      footer.inc.php
* @Package:   GetSimple
* @Action:    Bootstrap Theme for GetSimple CMS
*
*****************************************************/
?>
<hr>
<footer>
    <p>
        &copy; by <?php getPageField(return_page_slug(),"author"); ?> <?php get_page_date("Y"); ?> - <?php echo date("y"); ?>
    </p>
</footer>