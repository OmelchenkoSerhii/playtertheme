<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
    <header id="header" class="header">
        <nav class="nav">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-6 col-md-3 col-lg-2 col-xl-2">
                        <a href="<?php echo home_url(); ?>/">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="playter logo" width="120" height="60" class="logo__img">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-9 col-xl-9 d-none d-lg-block">
                        <div class="d-flex align-items-center justify-content-end">
                            <?php 
                                wp_nav_menu( [
                                    'theme_location'  => '',
                                    'menu'            => 'Menu Header', 
                                    'container'       => '', 
                                    'container_class' => '', 
                                    'container_id'    => '',
                                    'menu_class'      => 'menu', 
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s nav-list">%3$s</ul>',
                                    'depth'           => 0,
                                    'walker'          => '',
                                ] );
                             ?>
                            <div class="actions">
                                <a href="<?php the_field('linkedin_link', 'option'); ?>" target="_blank" class="linkedin">
                                    <?php $icon = get_field('linkedin_icon','option');
                                        if( !empty( $icon ) ): ?>
                                        <?php echo file_get_contents(esc_url(wp_get_original_image_path($icon['id']))); ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                            <?php 
                            $link = get_field('sign_up_link', 'option');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button nav-btn">
                                    <?php echo esc_html( $link_title ); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-block d-lg-none pr-3">
                        <div class="mobile-open" id="mobileOpen">
                            <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path d="m12 24c-6.617 0-12-5.383-12-12s5.383-12 12-12 12 5.383 12 12-5.383 12-12 12zm0-23c-6.065 0-11 4.935-11 11s4.935 11 11 11 11-4.935 11-11-4.935-11-11-11z"/></g><g><path d="m16.5 8h-9c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9c.276 0 .5.224.5.5s-.224.5-.5.5z"/></g><g><path d="m16.5 12.5h-9c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9c.276 0 .5.224.5.5s-.224.5-.5.5z"/></g><g><path d="m16.5 17h-9c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9c.276 0 .5.224.5.5s-.224.5-.5.5z"/></g></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu" id="mobileMenu">
                <div class="head">
                    <a href="<?php echo home_url(); ?>">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="">
                            </div>
                        </a>
                    <div class="close" id="mobileClose">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/close-menu.svg" alt="">

                    </div>
                </div>
                <?php 
                    wp_nav_menu( [
                        'theme_location'  => '',
                        'menu'            => 'Menu Header', 
                        'container'       => '', 
                        'container_class' => '', 
                        'container_id'    => '',
                        'menu_class'      => 'menu', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s nav-list">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ] );
                 ?>
                <div class="actions">
                    <?php 
                    $link = get_field('sign_up_link', 'option');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php $icon = get_field('linkedin_icon');
                                if( !empty( $icon ) ): ?>
                                <?php echo file_get_contents(esc_url(wp_get_original_image_path($icon['id']))); ?>
                            <?php endif; ?>

                             <img src="<?php echo get_template_directory_uri() ?>/assets/img/user-i-m.svg" alt="">
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    <?php endif; ?>
                    <a href="<?php the_field('linkedin_link', 'option'); ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/linked-in-m.svg" alt="">
                        LinkedIn
                    </a>
                    
                </div>
            </div>
        </nav>
    </header>
    <main class="content-area">