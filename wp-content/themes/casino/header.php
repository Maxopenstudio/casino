<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>Casino</title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__content">
                <?php the_custom_logo(); ?>
                <ul class="menu header__menu">
                    <li class="menu__item">
                        <a href="#" class="menu__link">Czech online casinos
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.18 5.67992L9.425 1.43492C9.525 1.33492 9.525 1.17492 9.425 1.07492C9.325 0.97492 9.165 0.97492 9.065 1.07492L5 5.13992L0.936 1.07492C0.936334 1.03268 0.926208 0.991005 0.906527 0.953625C0.886845 0.916244 0.858218 0.884316 0.823199 0.860686C0.78818 0.837057 0.747858 0.822461 0.705828 0.8182C0.663797 0.813939 0.621366 0.820146 0.582317 0.836267C0.543269 0.852388 0.508816 0.877922 0.482033 0.910592C0.45525 0.943262 0.436968 0.982052 0.428818 1.0235C0.420668 1.06496 0.422901 1.10778 0.435322 1.14816C0.447742 1.18854 0.469962 1.22521 0.5 1.25492C0.5 1.31792 0.524 1.38492 0.575 1.43292L4.821 5.67892C4.919 5.77892 5.081 5.77892 5.179 5.68092L5.18 5.67992Z" fill="#808288"/>
                            </svg>
                        </a>
                        <ul class="submenu">
                            <li class="submenu__item">
                                <a href="#" class="submenu__link">Online casino bonus bez vkladu</a>
                            </li>
                            <li class="submenu__item">
                                <a href="#" class="submenu__link">Nové online casino 2024</a>
                            </li>
                            <li class="submenu__item">
                                <a href="#" class="submenu__link">Casino s bonusem</a>
                            </li>
                            <li class="submenu__item">
                                <a href="#" class="submenu__link">Nejlepsi online casina</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">Online sázkové kanceláře</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">Hrací automaty</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">Kasinové bonusy a promo kódy</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link"> Novinky</a>
                    </li>
                </ul>
                <div class="search header__search">
                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.25 17H18.065L17.645 16.595C19.1659 14.8311 20.0018 12.5791 20 10.25C20 8.32164 19.4282 6.43657 18.3568 4.83319C17.2855 3.22982 15.7627 1.98013 13.9812 1.24218C12.1996 0.504225 10.2392 0.311142 8.34787 0.687348C6.45656 1.06355 4.71927 1.99215 3.35571 3.35571C1.99215 4.71927 1.06355 6.45656 0.687348 8.34787C0.311142 10.2392 0.504225 12.1996 1.24218 13.9812C1.98013 15.7627 3.22982 17.2855 4.83319 18.3568C6.43657 19.4282 8.32164 20 10.25 20C12.665 20 14.885 19.115 16.595 17.645L17 18.065V19.25L24.5 26.735L26.735 24.5L19.25 17ZM10.25 17C6.515 17 3.5 13.985 3.5 10.25C3.5 6.515 6.515 3.5 10.25 3.5C13.985 3.5 17 6.515 17 10.25C17 13.985 13.985 17 10.25 17Z" fill="#0C171C"/>
                    </svg>
                </div>
                <div class="searchModal" id="searchModal">
                    <div class="searchModal__input">
                        <input type="text" placeholder="Vyhledávání">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.25 17H18.065L17.645 16.595C19.1659 14.8311 20.0018 12.5791 20 10.25C20 8.32164 19.4282 6.43657 18.3568 4.83319C17.2855 3.22982 15.7627 1.98013 13.9812 1.24218C12.1996 0.504225 10.2392 0.311142 8.34787 0.687348C6.45656 1.06355 4.71927 1.99215 3.35571 3.35571C1.99215 4.71927 1.06355 6.45656 0.687348 8.34787C0.311142 10.2392 0.504225 12.1996 1.24218 13.9812C1.98013 15.7627 3.22982 17.2855 4.83319 18.3568C6.43657 19.4282 8.32164 20 10.25 20C12.665 20 14.885 19.115 16.595 17.645L17 18.065V19.25L24.5 26.735L26.735 24.5L19.25 17ZM10.25 17C6.515 17 3.5 13.985 3.5 10.25C3.5 6.515 6.515 3.5 10.25 3.5C13.985 3.5 17 6.515 17 10.25C17 13.985 13.985 17 10.25 17Z" fill="#0C171C"/>
                        </svg>  
                    </div>
                    <div class="searchModal__title">Výsledky vyhledávání</div>
                    <div class="searchModal__result">

                    </div>
                </div>
                <div class="burger header__burger">
                    <svg class="burger__icon" width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 7H19M1 1H19M1 13H19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg class="burger__icon_close" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 1L1 13M1 1L13 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
    
                    <div class="burger__block">
                        <div class="burger__search">
                            <input type="search" name="" id="" placeholder="Vyhledávání">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 11H11.71L11.43 10.73C12.444 9.55407 13.0012 8.05271 13 6.5C13 5.21442 12.6188 3.95772 11.9046 2.8888C11.1903 1.81988 10.1752 0.986756 8.98744 0.494786C7.79973 0.00281635 6.49279 -0.125905 5.23192 0.124899C3.97104 0.375703 2.81285 0.994767 1.90381 1.90381C0.994767 2.81285 0.375703 3.97104 0.124899 5.23192C-0.125905 6.49279 0.00281635 7.79973 0.494786 8.98744C0.986756 10.1752 1.81988 11.1903 2.8888 11.9046C3.95772 12.6188 5.21442 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z" fill="#0C171C"/>
                            </svg>
                        </div>
                        <ul class="menu burger__menu">
                            <li class="menu__item">
                                <a href="#" class="menu__link">Czech online casinos
                                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.18 5.67992L9.425 1.43492C9.525 1.33492 9.525 1.17492 9.425 1.07492C9.325 0.97492 9.165 0.97492 9.065 1.07492L5 5.13992L0.936 1.07492C0.936334 1.03268 0.926208 0.991005 0.906527 0.953625C0.886845 0.916244 0.858218 0.884316 0.823199 0.860686C0.78818 0.837057 0.747858 0.822461 0.705828 0.8182C0.663797 0.813939 0.621366 0.820146 0.582317 0.836267C0.543269 0.852388 0.508816 0.877922 0.482033 0.910592C0.45525 0.943262 0.436968 0.982052 0.428818 1.0235C0.420668 1.06496 0.422901 1.10778 0.435322 1.14816C0.447742 1.18854 0.469962 1.22521 0.5 1.25492C0.5 1.31792 0.524 1.38492 0.575 1.43292L4.821 5.67892C4.919 5.77892 5.081 5.77892 5.179 5.68092L5.18 5.67992Z" fill="#808288"/>
                                    </svg>
                                </a>
                                <ul class="submenu">
                                    <li class="submenu__item">
                                        <a href="#" class="submenu__link">Online casino bonus bez vkladu</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="#" class="submenu__link">Nové online casino 2024</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="#" class="submenu__link">Casino s bonusem</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="#" class="submenu__link">Nejlepsi online casina</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link">Online sázkové kanceláře</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link">Hrací automaty</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link">Kasinové bonusy a promo kódy</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link"> Novinky</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
    </header> 