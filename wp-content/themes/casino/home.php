<?php
/*
Template Name: home
*/ 
?>

<?php get_header() ?>  
                    <?php   
                        $main_banner_title = get_field('main_banner_title');
                        $main_banner_description = get_field('main_banner_description');
                        $main_banner_image_desktop = get_field('main_banner_image_desktop');
                        $main_banner_image_mobile = get_field('main_banner_image_mobile');
                    ?>      
    <main class="main" style="background-image: url(<?php echo $main_banner_image_mobile; ?>)">
        <div class="container">
            <div class="main__content" style="background-image: url(<?php echo $main_banner_image_desktop; ?>)">
                <div class="main__info">
                    
                    <h1><?php echo $main_banner_title; ?></h1>
                    <h4><?php echo $main_banner_description; ?></h4>
                    <button class="button1">Přehrát</button>
                    
                </div>
            </div>
        </div>
    </main>        
    <div class="blockTemplate">
        <div class="container">
            <div class="blockTemplate__content">
                <div class="blockTemplate__head">
                    <div class="sectionTitle">Novinky z herního průmyslu</div>
                    <button class="button2">Další články</button>
                </div>
                <div class="news">
                    <?php
                    $args = array(
                        'post_type' => 'post', // Укажите тип поста, если это не посты
                        'posts_per_page' => 5,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'term_id',
                                'terms'    => 3, // Замените 1 на ID вашей категории
                            ),
                        ),
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            ?>
                            <div class="news__item">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                <?php endif; ?>
                                <div class="news__info">
                                    <a href="<?php the_permalink(); ?>" class="news__title"><h4><?php the_title(); ?></h4></a>
                                    <div class="news__date"><h6><?php echo get_the_date('j F Y'); ?></h6></div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata(); // Сбрасываем данные о посте
                    else :
                        echo 'Нет записей в данной категории.';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>        
    <div class="blockTemplate">
        <div class="container">
            <div class="blockTemplate__content">
                <div class="blockTemplate__head">
                    <div class="sectionTitle">Kasinové bonusy</div>
                    <button class="button2">Další články</button>
                </div>
                <div class="cards">

                <?php
                    $args = array(
                        'post_type' => 'post', // Укажите тип поста, если это не посты
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'term_id',
                                'terms'    => 2, // Замените 1 на ID вашей категории
                            ),
                        ),
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            ?>
                            <div class="card">
                                <div class="card__top">
                                <?php the_post_thumbnail(
                                    array(230, 200)
                                ); ?>
                                    <div class="card__top-info">
                                        <div class="card__top-title"><?php the_title(); ?></div>
                                        <div class="card__top-rating">
                                            <div class="rating">
                                                <span class="star active" data-rating="1">&#9733;</span>
                                                <span class="star active" data-rating="2">&#9733;</span>
                                                <span class="star active" data-rating="3">&#9733;</span>
                                                <span class="star active" data-rating="4">&#9733;</span>
                                                <span class="star " data-rating="5">&#9733;</span>
                                            </div>
                                            <div class="rating__result">4.0</div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="card__desc">350 Free Spinů + 100 Kč bez vkladu+ Bonus na první vklad 100% až do 600 Kč do casina</div>-->
                                <div class="card__bottom">
                                    <button class="button1">Přehrát</button>
                                    <!--<div class="card__bottom-link">
                                        Přečtěte si více
                                    </div>-->
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata(); // Сбрасываем данные о посте
                    else :
                        echo 'Нет записей в данной категории.';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>        
    <div class="blockTemplate">
        <div class="container">
            <div class="blockTemplate__content">
                <div class="blockTemplate__head">
                    <div class="sectionTitle">Sekce webu</div>
                </div>
                <div class="categoryWall">
                    <a href="#" class="categoryWall__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/catg1.png" alt="category">
                        <h2>Česká online kasina</h2>
                    </a>
                    <a href="#" class="categoryWall__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/catg2.png" alt="category">
                        <h2>Online sázkové kanceláře</h2>
                    </a>
                    <a href="#" class="categoryWall__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/catg3.png" alt="category">
                        <h2>Hrací automaty</h2>
                    </a>
                    <a href="#" class="categoryWall__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/catg4.png" alt="category">
                        <h2>Kasinové bonusy a promo kódy</h2>
                    </a>
                    <a href="#" class="categoryWall__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/catg5.png" alt="category">
                        <h2>Online poker</h2>
                    </a>
                    <a href="#" class="categoryWall__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/catg6.png" alt="category">
                        <h2>Novinky</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>        
   <?php get_footer() ?>