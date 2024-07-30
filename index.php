<?php
if ( ! defined( 'ABSPATH' ) ) {
    header( 'HTTP/1.0 403 Forbidden' ); 
    die();
} 

get_header();
?>

<?php
$Blog_image = get_theme_mod( 'blog_header_image');
if($Blog_image):
?>
<div class="blog-featured-img">
	<?php
	responsive_banner(
	get_theme_mod( 'blog_header_image_360'),
	get_theme_mod( 'blog_header_image_webp'),
	get_theme_mod( 'blog_header_image'),
	get_theme_mod('practise_name').' - Blog');
	?>
</div>
<style>
	.blog-featured-img img{
		width: 100%;
	}
</style>
<?php endif;?>

<?php
	//require get_template_directory() . '/template-parts/theme-blog-layouts/index.php';
	$pageID   = get_theme_mod('select_article_design', 1);

	
	if($pageID != 1  && $pageID  != ""){
	$resourceID = get_field( "theme_resource_id", $pageID );
	
	if($resourceID){
		include( get_template_directory().'/template-parts/sections/related-articles-designs/template-'.$resourceID.'/'.'blog-role.php');
		}else{
			include( get_template_directory().'/template-parts/sections/related-articles-designs/custom-blog-role.php');
		}
	}
	
?>

<?php
//get_sidebar();
get_footer();
