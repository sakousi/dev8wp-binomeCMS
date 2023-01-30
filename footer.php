<?php wp_footer(); ?>
</main>
<footer class="bg-cyan-900 grid grid-cols-3 mx-28 py-12">
    <div class="flex justify-center items-center">
        <img class="object-cover h-28" src="<?= get_field('logo', 'options') ?>" alt="Logo">
    </div>
    <div class="">
        <h2 class="text-white text-4xl font-bold">Nos campus</h2>
        <?php if(have_rows('campus', 'options')): ?>
            <ul class="grid grid-cols-2">
                <?php while (have_rows('campus', 'options')): the_row() ?>
                <li class="py-2"><a class="text-white text-lg" href=""><?php the_sub_field('city'); ?></a></li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
    <img class="object-cover h-64" src="<?php the_field('qualiopi', 'options'); ?>" alt="Qualiopi">
</footer>
</body>
</html>