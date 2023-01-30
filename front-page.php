<?php /* Template Name: Accueil */ ?>
<?php get_header(); ?>
<header>
	<h1 class="font-bold text-3xl mt-8 mb-4s p-4"><?php the_field('title'); ?></h1>
    <?php
    $images = [];
    while(have_rows('images')): the_row();
        $images[] = get_sub_field('image');
    endwhile;
    ?>
    <img class="h-64 w-full object-cover" src="<?= $images[1] ?>" alt="">
</header>
<section>
	<p class="p-4">
        <?= get_field('desc') ?> </p>
	<div class="flex space-x-10 p-4 justify-center">


        <img class="h-80 w-48 w-full object-cover" src="<?= $images[2] ?>" alt="">
		<img class="h-80 w-48 w-full object-cover" src="<?= $images[3] ?>" alt="">
		<img class="h-80 w-48 w-full object-cover" src="<?= $images[4] ?>" alt=""><
		<img class="h-80 w-48 w-full object-cover" src="<?= $images[5] ?>" alt=""><
	</div>
</section>
<?php get_footer(); ?>
