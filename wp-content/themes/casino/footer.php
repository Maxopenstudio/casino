<?php   
    $footer_logo = get_field('footer_logo');
?> 
<footer class="footer">
            <div class="container">
            <div class="footer__content">
                <div class="footer__top">
                    <a href="/" class="logo footer__logo">
                        <img src="<?php echo $footer_logo; ?>">
                    </a>
                    <div class="footer__menu">
                        <ul class="footer__menu-list">
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Seznam kasin</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Betano</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Forbes</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Apollo Games</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Sazka</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Fortuna</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Herna u Dedka</a>
                            </li>
                        </ul>
                        <ul class="footer__menu-list">
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Pro uživatele</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">O nás</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Zásady ochrany osobních údajů</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Podmínky používání </a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Kontaktní informace</a>
                            </li>
                        </ul>
                        <ul class="footer__menu-list">
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Sekce webu</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Czech online casinos</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Online sázkové kanceláře</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Hrací automaty</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Kasinové bonusy a promo kódy</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="" class="footer__menu-link">Novinky</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="social footer__social">
                    <?php
                    $args = array(
                        'post_type' => 'post', // Укажите тип поста, если это не посты
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'term_id',
                                'terms'    => 6, // Замените 1 на ID вашей категории
                            ),
                        ),
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            ?>
                        <li class="social__icon">
                            <a href="https://<?php the_content(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </li>
                        <?php
                                endwhile;
                                wp_reset_postdata(); // Сбрасываем данные о посте
                            else :
                                echo 'Нет записей в данной категории.';
                            endif;
                            ?>
                    </ul>
                </div>
                <div class="footer__bottom">
                    <div class="footer__bottom-text">Materiály na těchto stránkách jsou určeny pro osoby starší 21 let (21+). Účast na hazardních hrách může vést k závislosti na hazardních hrách. Dodržujte pravidla (zásady) zodpovědného hraní hazardních her. Pokud se objeví první příznaky závislosti, neprodleně kontaktujte odborníka. Pamatujte, že účast na hazardních hrách nemůže být zdrojem příjmů ani alternativou k práci. Informační zdroj meta.ua neprovádí hry o skutečné a/nebo virtuální peníze, stejně jako stránky nepřijímají žádnou formu plateb za sázky a jiné platby, které souvisejí / mohou souviset s hazardními hrami, sázkovými kancelářemi nebo totalizátory. Veškeré materiály na informačním zdroji meta.ua jsou zveřejněny pouze pro informační účely.</div>
                    <ul class="footer__bottom-list">
                        <li class="footer__bottom-list__item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/partner1.svg" alt="">
                        </li>
                        <li class="footer__bottom-list__item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/partner2.svg" alt="">
                        </li>
                        <li class="footer__bottom-list__item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/partner3.svg" alt="">
                        </li>
                        <li class="footer__bottom-list__item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/partner4.svg" alt="">
                        </li>
                    </ul>
                    <div class="footer__bottom-text">Copyright © Liga iGaming 2023 Все права защищены</div>
                </div>
            </div>
            </div>
    </footer>    
   <?php wp_footer(); ?>
</body>
</html>