<?php
// template Name: oeuvre
//header
get_header();
$image= get_field('photo');
?>
<h1>
    <?php echo(get_the_title());?>
</h1>
<?php the_field('artwork_name');?>
<article><img src="<?php echo($image['sizes']['medium_large'])?>"
    height="<?php echo($image['sizes']['medium_large-height']);?>"
    width="<?php echo ($image['sizes']['medium_large-with']);?>"
    alt="<?php echo($image['alt']); ?>">
    </article>
<p>
    <?php  the_field('price'); ?>€
    <?php  the_field('description'); ?>
    <?php  the_field('artist_name'); ?>
    <?php  the_field('date'); ?>
    <?php  the_field('width'); ?> x 
    <?php  the_field('height');?>
</p>

<?php
//footer
get_footer();
?>