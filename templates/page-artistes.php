<?php
// template Name: artistes  
//header
get_header();
$artiste = get_pages(array(
    'sort_order' => 'ASC',
    'sort_column' => 'menu_order',
    'post_status' => 'publish',
    'parent' => $post->ID,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/page-artiste.php'
));
?>
<div class="blue_barre">
    <div class="search_barre">
        <h1>
            <?php echo (get_the_title()); ?>
        </h1>
        <div>
            <input id="searchbar" onkeyup="artiste()" type="text" name="search" placeholder="chercher .." class="search" />
            <img src="" alt="recherche">
        </div>
    </div>
</div>


    <article>
        <?php get_field('intro_artistes'); ?>
    </article>

    <div class="all">
        <div class="one">
            <div>
            </div>
            <div class="name">
                name
            </div>
            <div class="courte_description">
                <?php the_field('text') ?>
            </div>
        </div>
    </div>
<?php
//footer
get_footer();
?>