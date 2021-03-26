<?php function growwwFooter(){ ?>
        <?php echo the_field('custom_Footer_code', 'option')?>
<?php add_action('growwwFooter', 'growwwFooter');}?>
