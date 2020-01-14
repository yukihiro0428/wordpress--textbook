<article <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail('large_thumbnail', array ('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
</a>
    <header class="entry-header">
        <time pubdate="pubdate"
        datetime="<?php the_time('Y-m-d'); ?>" class="entry-date">
        <?php the_time(get_option('date_front')); ?>
        </time>
        <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
    </header>
    <section class="entry-content">
        <?php the_excerpt(); ?>
    </section>
</article>