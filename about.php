<?php /* Template Name: About */ ?>
<?php get_header(); ?>
<header class="p-4">
	<h1 class="text-4xl"><?php the_field('title'); ?></h1>
</header>
<section>
    <div class="p-4">
        <?= get_field('desc') ?>
    </div>
	<div class="grid grid-cols-2 grid-rows-2 gap-4">
        <?php
            $images = [];
            while(have_rows('images')): the_row();
                $images[] = get_sub_field('image');
            endwhile;
        ?>
		<img class="row-span-2 h-full max-w-full object-cover" src="<?= $images[0] ?>" alt="">
		<img class="" src="<?= $images[1] ?>" alt="">
		<img class="" src="<?= $images[2] ?>" alt="">
	</div>
    <div class="p-4">
        <?= get_field('desc_2') ?>
    </div>
</section>
<?php get_footer(); ?>
