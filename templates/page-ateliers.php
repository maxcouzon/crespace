<?php
// template Name: ateliers
//header
get_header();
$atelier = get_pages(array(
    'sort_order' => 'ASC',
    'sort_column' =>'menu_order',
    'post_status'=> 'publish',
    'parent' =>$post-> ID,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/page-atelier.php'


));
?>
<h1><?php echo(get_the_title()); ?></h1>
<?php foreach($atelier as $ateliers){?>
    <article>
        <p>
         <?php echo ($ateliers -> post_name);
            ?>
            
        </p>
</article>
<?php } ?>
<?php
//footer
get_footer();
?>