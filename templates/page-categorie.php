<?php
// template Name: catégorie
//header
get_header();
$oeuvre = get_pages(array(
    'sort_order' => 'ASC',
    'sort_column' =>'menu_order',
    'post_status'=> 'publish',
    $post-> ID,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/page-sale.php'

));
?>
<h1><?php echo(get_the_title());?></h1>
<?php foreach($oeuvre as $categorie):?>
    <article>
        <p><?php echo ($categorie->post_title);?></p>
</article>
<?php endforeach; ?>
<?php
//footer
get_footer();
?>

