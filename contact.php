<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

		<div class="px-32 pb-16">
		    <h1 class="text-4xl font-bold py-12"><?php the_field('title'); ?></h1>
            <div class="p-8 bg-white">
			    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
            </div>
		</div>

<?php get_footer(); ?>