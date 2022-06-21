
<?php get_header('landing'); ?>

<div id="app-wrapper" role="main">
    <div id="app" class="app-container app-container--y--middle" data-namespace="not-found">

            <div class="container txt--center">
                    <section class="text-center section not-found">
                            <h1 class="mb-5 text--color--secondary font--weight--medium text--size--44  appear fade-up"><?php _e('Page not found.','humanzy'); ?></h1>
                            <a href="<?php echo get_home_url(); ?>" class="button button--lg mt-30 appear fade-up"><?php _e('Back to home','saasleads') ?></a>
                    </section>
            </div>

    </div>
</div>
<?php get_footer('homepage_redesign'); ?>
