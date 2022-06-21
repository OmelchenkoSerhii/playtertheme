<!DOCTYPE html>
<html lang="en">
<head>
	<script src='https://www.googletagmanager.com/gtag/js?id=UA-190292383-1' id='google_gtagjs-js' async></script>

<script id='google_gtagjs-js-after'>

window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}

gtag("js", new Date());

gtag("set", "developer_id.dZTNiMT", true);

gtag("config", "UA-190292383-1", {"anonymize_ip":true});

</script>

<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-WK5MNBC');</script>

<!-- End Google Tag Manager -->
	<meta name="google-site-verification" content="_nu5fAc6EdQA8KAyxtZCgRJTp18GiRJIFjoLktCNE80" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/slick/slick-theme.css"/>
    <title><?php bloginfo('title'); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<?php
	$logo = get_field('headerLandingLogo','option');
    $link = get_field('headerLandinglink','option');
    $dark_header = get_field('dark_header');
?>
<body <?php body_class(); ?>>
    <header id="header" class="header">
        <nav class="nav <?php if( $dark_header ){echo 'header__dark';}  ?>">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto header__logo__wrapper">
                        <?php if($logo) :?>
                            <a href="<?php echo get_home_url(); ?>">
                                 <?php echo file_get_contents(esc_url(wp_get_original_image_path($logo['id']))); ?>
                            </a>
                           
                        <?php endif;?>
                    </div>
                    
                    <div class="col-auto">
                        <?php if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="button-dark" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="content-area">