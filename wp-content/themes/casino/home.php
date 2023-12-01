<?php
/*
Template Name: home
*/ 
?>

<?php get_header() ?>        
    <main class="main">
        <div class="container">
            <div class="main__content">
                <div class="main__info">
                    <h1>Nejlepší kasina v České republice v roce 2023</h1>
                    <h4>Máte pochybnosti o poctivosti a spolehlivosti virtuálních heren? Pak byste měli věnovat pozornost našemu hodnocení "online kasina Česká republika", sestavenému na základě skutečných faktů a hodnocení, které odráží míru spolehlivosti, poctivosti populárních herních platforem.</h4>
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
                    <div class="news__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/news1.png" alt="">
                        <img class="pseudo" src="<?php bloginfo('template_url'); ?>/assets/images/pseudo.png" alt="">
                        <div class="news__info">
                            <a href="#" class="news__title"><h4>Růst popularity živých kasinových her: Trendy a budoucnost</h4></a>
                            <div class="news__date"><h6>8 Ноября 2023</h6></div>
                        </div>
                    </div>
                    <div class="news__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/news2.png" alt="">
                        <img class="pseudo" src="<?php bloginfo('template_url'); ?>/assets/images/pseudo.png" alt="">
                        <div class="news__info">
                            <a href="#" class="news__title"><h4>Výhody a nevýhody mobilního hraní v online kasinech</h4></a>
                            <div class="news__date"><h6>8 Ноября 2023</h6></div>
                        </div>
                    </div>
                    <div class="news__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/news3.png" alt="">
                        <img class="pseudo" src="<?php bloginfo('template_url'); ?>/assets/images/pseudo.png" alt="">
                        <div class="news__info">
                            <a href="#" class="news__title"><h4>Růst popularity živých kasinových her: Trendy a budoucnost</h4></a>
                            <div class="news__date"><h6>8 Ноября 2023</h6></div>
                        </div>
                    </div>
                    <div class="news__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/news3.png" alt="">
                        <img class="pseudo" src="<?php bloginfo('template_url'); ?>/assets/images/pseudo.png" alt="">
                        <div class="news__info">
                            <a href="#" class="news__title"><h4>Růst popularity živých kasinových her: Trendy a budoucnost</h4></a>
                            <div class="news__date"><h6>8 Ноября 2023</h6></div>
                        </div>
                    </div>
                    <div class="news__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/news3.png" alt="">
                        <img class="pseudo" src="<?php bloginfo('template_url'); ?>/assets/images/pseudo.png" alt="">
                        <div class="news__info">
                            <a href="#" class="news__title"><h4>Růst popularity živých kasinových her: Trendy a budoucnost</h4></a>
                            <div class="news__date"><h6>8 Ноября 2023</h6></div>
                        </div>
                    </div>
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
                    global $post;

                    $myposts = get_posts([ 
                        'numberposts' => -1,
                    ]);

                    if( $myposts ){
                        foreach( $myposts as $post ){
                            setup_postdata( $post );
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
                        }
                    } 

                    wp_reset_postdata(); // Сбрасываем $post
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