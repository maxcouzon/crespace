
<?php
// template Name: atelier
//header
get_header();
$image= get_field('Img');
?>
<h1>
    <?php echo(get_the_title());?>
</h1>
<?php the_field('');?>
<article><img src="<?php echo($image['sizes']['medium_large'])?>"
    height="<?php echo($image['sizes']['medium_large-height']);?>"
    width="<?php echo ($image['sizes']['medium_large-with']);?>"
    alt="<?php echo($image['alt']); ?>">
    </article>
<p>
    <?php  the_field('workshop_name'); ?>
    <?php  the_field('duration'); ?>
    <?php  the_field('workshop_description'); ?>
</p>
<a href="calendar.com"></a>
<?php
//footer
get_footer();
?>