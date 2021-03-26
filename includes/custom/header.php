<?php function growwwHeader(){ ?>
    <?php  $icon144 = get_field('favicon','options')['url'];
	    if($icon144) {
        $ti16 = growwwImage($icon144,16,16,false);
        $ti32 = growwwImage($icon144,32,32,false);
        $ti57 = growwwImage($icon144,57,57,false);
        $ti72 = growwwImage($icon144,72,72,false);
		$ti114 = growwwImage($icon144,114,114,false);
        $ti144 = growwwImage($icon144,144,144,false);
        $ti180 = growwwImage($icon144,180,180,false); ?>

        <link rel="apple-touch-icon-precomposed" href="<?php echo $ti57; ?>"/>
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $ti72; ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $ti114; ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $ti144; ?>" />
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ti180; ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ti32; ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ti16; ?>">
        <link rel="shortcut icon" type="image/png" href="<?php echo $ti32; ?>">
        <?php } ?>
        <?php echo the_field('custom_header_code', 'option')?>
        <?php echo the_field('google_analytics', 'option')?>
<?php add_action('growwwHeader', 'growwwHeader');}?>
