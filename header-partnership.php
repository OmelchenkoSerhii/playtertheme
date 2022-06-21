
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="google-site-verification" content="_nu5fAc6EdQA8KAyxtZCgRJTp18GiRJIFjoLktCNE80" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('title'); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK5MNBC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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
</head>
<body <?php body_class(); ?>>
    <header id="header" class="header">
        <nav class="nav" style="background: none;">
            <div class="container">
                <div class="row justify-content-between align-items-center" style="margin-left: 0; margin-right:0;">
                    <div >
                        <a href="<?php echo home_url(); ?>/">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="playter logo" width="120" height="60" class="logo__img">
                            </div>
                        </a>
                    </div>
                    <div >
                        <div class="d-flex align-items-center">
                            <div class="actions">
                                <a href="<?php the_field('linkedin_link', 'option'); ?>" target="_blank" class="linkedin">
                                    <?php $icon = get_field('linkedin_icon','option');
                                        if( !empty( $icon ) ): ?>
                                        <?php echo file_get_contents(esc_url(wp_get_original_image_path($icon['id']))); ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </nav>
    </header>
    <main >