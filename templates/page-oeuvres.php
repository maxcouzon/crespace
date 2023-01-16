<?php
// template Name: oeuvres 
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
            <img src="" alt="rechercher">
            <img src="../wp-content/themes/crespa/templates/assets/images/setting.svg" alt="paramètre">
        </div>
    </div>
</div>
<div class="all_oeuvre">
    <div class="one_oeuvre">
        <div>
            image
        </div>
        <div class="after">
            <div>
                <?php the_field('description')?>
            </div>
            <button onclick="window.location.href = '../acceuil/<?php the_field('')?>/'" ; class="plus">voir plus</button>
        </div>
    </div>
</div>
<?php
//footer
get_footer();
?>