<article>
    <header class="page-header">
<?php the_category_image(); ?>
        <h1 class="page-title"><?php
        the_title(); ?>
        </h1>
    </header>
    <section class="entry-content">
        <?php the_content(); ?>
    </section>
</article>
<?php 
if (is_single()) :
?>
    <nav class="adjacent_post_links">
    <ul>
        <li class="previous"><?php previous_post_link('%link', '%title', true); ?></li>
        <li class="next"><?php next_post_link('%link', '%title', true); ?></li>
    </ul>
    </nav>
<?php endif; ?>
