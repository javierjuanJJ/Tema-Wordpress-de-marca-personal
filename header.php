<?php ob_start(); ?>

    <!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri( 'style2.css' ) ?>">

<?php wp_head(); ?>
<body class="fondo">
    <div id="topPage"></div>
<?php require( 'menu/menu.php' ); ?>
<?php echo do_shortcode( '[language-switcher]' ) ?>
<?php echo do_shortcode( '[socialNetwork]' ) ?>
<?php echo do_shortcode( '[slideshow]' ) ?>


<?php ob_end_flush(); ?>