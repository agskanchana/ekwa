<?php get_header(); ?>

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
	include(get_template_directory(). "/template-parts/content-single.php");

?>

<?php get_footer(); ?>