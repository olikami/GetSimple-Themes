<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      header.inc.php
* @Package:   GetSimple
* @Action:    Bootstrap Theme for GetSimple CMS
*
*****************************************************/
?>
<head>
    <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/bootstrap.css">
    <?php get_header(); ?>
</head>