<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
        <meta name="description" content="Home">
        <title>Главная</title>
        <link rel="shortcut icon" href="" type="image/png">
          
    </head>
    <body>

        <div class="main">

            <header class="header">
                <div class="header_container">
                    <div class="header_inner">
                        <div class="logo">
                            <a href="#" class="logo_link">
                                <img src="<?php echo get_parent_theme_file_uri('/img/logo.svg'); ?>" alt="logo" class="logo_link-img">  
                            </a>
                        </div>
                        <nav class="menu">
                            <button class="menu_btn"></button>
                            <div class="dropped_menu">
                                <?php wp_nav_menu( [
                                    'theme_location'  => 'mobile',
                                    'menu'            => '',
                                    'container'       => 'div',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'nav',
                                    'menu_id'         => 'menu_mobile',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth'           => 10,
                                    'walker'          => '',
                                ] ); 
                                ?>
                            </div>    
                            
                        </nav>
                    </div>
                </div>
            </header>