<?php
// template Name: formations
//header
get_header();
$formation = get_pages(array(
    'sort_order' => 'ASC',
    'sort_column' =>'menu_order',
    'post_status'=> 'publish',
    'parent' => $post-> ID,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/page-formation.php',


));
?>
<h1><?php echo(get_the_title()); ?></h1>
<?php foreach($formation as $formations){?>
    <article>
        <p>
                            <?php echo ($formations -> post_name);
            ?>
            
        </p>
</article>
<?php } ?>
<?php
//footer
get_footer();
?>