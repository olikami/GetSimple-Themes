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
    <?php include("assets/header.inc.php"); ?>
    <body>
		<div class="top">
			<h1 id="title"><?php get_site_name(); ?></h1>
		</div>
		<div class="navbar">
			<ul>
				<?php get_navigation(return_page_slug()); ?>    
			</ul>
		</div>
		<div class="container">
			<h2><?php get_page_title(); ?></h2>
      	  	<?php get_page_content(); ?> 
		</div>
		<div class="footer">
			<?php include("assets/footer.inc.php"); ?>
		</div>
    </body>
</html>