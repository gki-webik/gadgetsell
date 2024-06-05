<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width" />
  <title>
    <?php wp_title('|', true, 'right'); ?>
  </title>
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
  <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions.  ?>
  <!--[if lt IE 9]>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js?ver=3.7.0" type="text/javascript"></script>
<![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="tech_help_right">
    <i class='bx bx-message-square-dots'></i>
  </div>
  <div class="tech_help_right__block none">
    <div class="tech_help_right__block_item item1 i_item_1"><a href="" class="not-hover"><svg role="presentation"
          width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M25 0C11.2 0 0 11.2 0 25C0 38.8 11.2 50 25 50C38.8 50 50 38.8 50 25C50 11.2 38.84 0 25 0Z"
            fill="#004D73"></path>
          <path
            d="M38.66 34.1001L32.44 27.7801C32.3435 27.6746 32.226 27.5904 32.0952 27.5327C31.9643 27.4751 31.8229 27.4453 31.68 27.4453C31.537 27.4453 31.3956 27.4751 31.2647 27.5327C31.1339 27.5904 31.0165 27.6746 30.92 27.7801L27.5 31.2001C26.81 31.8801 25.79 31.8801 25.1 31.2001L18.74 24.8301C18.5778 24.6751 18.4488 24.4889 18.3606 24.2826C18.2724 24.0764 18.227 23.8544 18.227 23.6301C18.227 23.4058 18.2724 23.1838 18.3606 22.9776C18.4488 22.7713 18.5778 22.5851 18.74 22.4301L22.16 19.0001C22.61 18.5601 22.61 17.9201 22.16 17.4801L15.9 11.3101C15.7943 11.209 15.6695 11.13 15.5329 11.0776C15.3963 11.0253 15.2506 11.0008 15.1045 11.0054C14.9583 11.0101 14.8145 11.0439 14.6815 11.1048C14.5485 11.1657 14.429 11.2525 14.33 11.3601C12.33 13.8101 8.65996 20.6201 18.73 30.9101L18.89 31.0601L19.03 31.2101C29.36 41.3501 36.16 37.6801 38.61 35.6701C39.1 35.2701 39.15 34.5401 38.66 34.1001Z"
            fill="white"></path>
        </svg></a></div>
    <div class="tech_help_right__block_item item2"><a href="" class="not-hover"><svg role="presentation" width="50"
          height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M25 50C38.8071 50 50 38.8071 50 25C50 11.1929 38.8071 0 25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50Z"
            fill="#47668D"></path>
          <path
            d="M39.8399 32.3501C38.9703 30.9857 37.8941 29.7645 36.6499 28.7301L36.6199 28.7001L36.5999 28.6801L36.5799 28.6701H36.5699C36.1122 28.269 35.675 27.8451 35.2599 27.4001C34.9299 26.9801 34.8599 26.5601 35.0299 26.1401C35.1599 25.8201 35.6499 25.1401 36.4899 24.1101L37.5399 22.7901C39.3999 20.4101 40.1999 18.8901 39.9599 18.2301L39.8599 18.0701C39.7899 17.9701 39.6299 17.8901 39.3599 17.8201C39.0225 17.7395 38.6726 17.7259 38.3299 17.7801L33.6799 17.8101C33.5017 17.7922 33.3217 17.8092 33.1499 17.8601L33.0599 17.9001L32.9999 17.9501C32.8498 18.0601 32.7324 18.2087 32.6599 18.3801C31.9272 20.2055 30.9806 21.9376 29.8399 23.5401C29.4584 24.149 28.9667 24.6815 28.3899 25.1101C28.1999 25.2501 28.0599 25.3101 27.9699 25.2901L27.6899 25.2201C27.5399 25.1301 27.4199 25.0001 27.3299 24.8401C27.2299 24.6801 27.1699 24.4801 27.1399 24.2401C27.0728 23.7867 27.056 23.3272 27.0899 22.8701L27.1099 22.2101C27.1038 21.4197 27.1239 20.6292 27.1699 19.8401C27.1899 19.5701 27.1899 19.2901 27.1899 18.9901C27.2181 18.577 27.1388 18.1636 26.9599 17.7901C26.8914 17.6327 26.7762 17.5001 26.6299 17.4101C26.4611 17.3164 26.2791 17.2489 26.0899 17.2101C25.5199 17.0801 24.7899 17.0101 23.9099 17.0101C21.9099 16.9801 20.6299 17.1101 20.0599 17.3701C19.8299 17.4901 19.6299 17.6401 19.4399 17.8401C19.2399 18.0701 19.2199 18.1901 19.3599 18.2101C20.0099 18.3101 20.4599 18.5301 20.7299 18.8801L20.8299 19.0701C20.9099 19.2001 20.9799 19.4401 21.0599 19.7701C21.3319 21.2006 21.3319 22.6696 21.0599 24.1001C21.0083 24.4885 20.8643 24.8589 20.6399 25.1801C20.6192 25.2121 20.592 25.2394 20.5599 25.2601C20.4199 25.3101 20.2699 25.3301 20.1199 25.3301C19.9699 25.3301 19.7899 25.2601 19.5699 25.1201C19.3235 24.9475 19.0986 24.7461 18.8999 24.5201C18.6699 24.2701 18.4099 23.9201 18.1199 23.4601C17.8199 23.0001 17.5199 22.4601 17.2199 21.8401L16.9599 21.3901C16.453 20.4536 15.9859 19.4961 15.5599 18.5201C15.4831 18.3152 15.343 18.14 15.1599 18.0201L15.0899 17.9801C14.8962 17.8646 14.6825 17.7866 14.4599 17.7501L10.0299 17.7801C9.57994 17.7801 9.26994 17.8801 9.10994 18.0801L9.04994 18.1701C9.01321 18.2446 8.996 18.3272 8.99994 18.4101C8.99994 18.5301 9.02994 18.6701 9.09994 18.8301C10.2449 21.4412 11.6098 23.9503 13.1799 26.3301C14.181 27.8114 15.2836 29.2215 16.4799 30.5501L16.8899 30.9201C17.1499 31.1701 17.5299 31.4601 18.0299 31.8101C18.5299 32.1601 19.0799 32.5001 19.6899 32.8301C21.0679 33.5631 22.6093 33.9347 24.1699 33.9101H26.0299C26.3999 33.8801 26.6899 33.7701 26.8799 33.5701L26.9499 33.4901C26.9899 33.4301 27.0299 33.3301 27.0699 33.2101C27.1099 33.0801 27.1199 32.9301 27.1199 32.7801C27.1071 32.3771 27.144 31.9741 27.2299 31.5801C27.3099 31.2201 27.3999 30.9501 27.4999 30.7701C27.6532 30.4968 27.8691 30.2637 28.1299 30.0901L28.2599 30.0301C28.5099 29.9501 28.8199 30.0301 29.1599 30.2701C29.5199 30.5201 29.8399 30.8201 30.1599 31.1701C30.4599 31.5301 30.8299 31.9301 31.2599 32.3701C31.6899 32.8201 32.0599 33.1501 32.3899 33.3701L32.7099 33.5601C32.9199 33.6801 33.2099 33.7901 33.5499 33.9001C33.8899 34.0001 34.1899 34.0301 34.4499 33.9701L38.5799 33.9101C38.9899 33.9101 39.3099 33.8501 39.5399 33.7101C39.7599 33.5901 39.8999 33.4501 39.9399 33.2901C39.9799 33.1401 39.9899 32.9601 39.9399 32.7601C39.9099 32.5601 39.8699 32.4301 39.8399 32.3601V32.3501Z"
            fill="white"></path>
        </svg></a></div>
    <div class="tech_help_right__block_item item3"><a href="" class="not-hover"><svg role="presentation" width="50"
          height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M25 50a25 25 0 100-50 25 25 0 000 50z" fill="#fff"></path>
          <path
            d="M26.1 12a12.1 12.1 0 00-10.25 18.53l.29.46-1.22 4.46 4.57-1.2.45.27a12.1 12.1 0 106.16-22.51V12zm6.79 17.22c-.3.85-1.72 1.62-2.41 1.72-.62.1-1.4.14-2.25-.14-.7-.22-1.37-.47-2.03-.77-3.59-1.57-5.93-5.24-6.1-5.48-.19-.24-1.47-1.97-1.47-3.76 0-1.79.93-2.67 1.25-3.03.33-.37.72-.46.96-.46.23 0 .47 0 .68.02.22 0 .52-.09.8.62l1.1 2.7c.1.18.16.4.04.64s-.18.39-.36.6c-.18.21-.38.47-.54.64-.18.18-.36.38-.15.74.2.36.92 1.55 1.98 2.52 1.37 1.23 2.52 1.62 2.88 1.8.35.18.56.15.77-.1.2-.23.9-1.05 1.13-1.42.24-.36.48-.3.8-.18.33.12 2.09 1 2.44 1.18.36.19.6.28.69.43.09.15.09.88-.21 1.73z"
            fill="#27D061"></path>
          <path
            d="M25 0a25 25 0 100 50 25 25 0 000-50zm1.03 38.37c-2.42 0-4.8-.6-6.9-1.76l-7.67 2 2.05-7.45a14.3 14.3 0 01-1.93-7.2c0-7.92 6.49-14.38 14.45-14.38a14.4 14.4 0 110 28.79z"
            fill="#27D061"></path>
        </svg></a></div>
    <div class="tech_help_right__block_item item4"><a href="" class="not-hover"><svg role="presentation" width="50"
          height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M25 50C38.8071 50 50 38.8071 50 25C50 11.1929 38.8071 0 25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50Z"
            fill="#0087D0"></path>
          <path
            d="M36.11 13.0399L9.40999 22.7999C8.86999 22.9999 8.85999 23.7999 9.38999 24.0299L16.23 26.7199L18.78 34.4099C18.93 34.8199 19.47 34.9599 19.81 34.6799L23.73 31.1899L31.17 35.9099C31.55 36.1499 32.06 35.9399 32.15 35.5099L36.99 13.7599C37.09 13.2799 36.59 12.8699 36.11 13.0599V13.0399ZM20.03 28.1599L19.6 32.1199L17.53 26.0299L32.1 16.8699L20.03 28.1699V28.1599Z"
            fill="white"></path>
        </svg></a></div>
  </div>
  <header>
    <div class="menu_container">
      <div class="menu_container__box">
        <nav>
          <a href="/o-kompanii">О компании</a>
          <a href="/dostavka-i-oplata">Доставка и оплата</a>
          <a href="/garantiya">Гарантия</a>
          <a href="/trade-in">Trade-in</a>
          <a href="">Для бизнеса</a>
        </nav>
        <a href="tel:+74991100359" class="not-hover">+7 (499) 110-03-59</a>
      </div>
      <div class="menu_container__box2">
        <nav>
          <a href="/" class="menu_container__box2__link_1"><strong>ГАДЖЕТ</strong>СЕЛЛ</a>
          <a href="/iphone" class="a_category_1">iPhone</a>
          <a href="/ipad" class="a_category_2">iPad</a>
          <a href="/mac">Mac</a>
          <a href="/watch">Watch</a>
          <a href="/airpods">AirPods</a>
          <a href="/catalog">Каталог</a>
        </nav>
        <div>
          <a href="" class="not-hover"><i class="bx bx-search no_after_ico"></i></a>
          <a href="" class="not-hover"><i class="bx bx-heart"></i></a>
          <a href="" class="not-hover"><i class="bx bx-basket"></i></a>
        </div>
      </div>
    </div>
    <div class="menu_container__mobile__header">
      <button class="menu_container__mobile__btn_open">&#9776;</button>
      <a href="/" class="menu_container__box2__link_1"
        onclick="window.open('/', '_parent')"><strong>ГАДЖЕТ</strong>СЕЛЛ</a>
      <a href="" class="not-hover"><i class="bx bx-phone" style="font-size: 2em;"></i></a>
    </div>
    <div class="menu_container__mobile">
      <button class="menu_container__mobile__btn_close">&#9776;</button>
      <nav>
        <a href="/" class="menu_container__box2__link_1"
          onclick="window.open('/', '_parent')"><strong>ГАДЖЕТ</strong>СЕЛЛ</a>
        <a href="/o-kompanii">О компании</a>
        <a href="/dostavka-i-oplata">Доставка и оплата</a>
        <a href="/garantiya">Гарантия</a>
        <a href="/trade-in">Trade-in</a>
        <a href="">Для бизнеса</a>
        <a href="/iphone">iPhone</a>
        <a href="/ipad">iPad</a>
        <a href="/mac">Mac</a>
        <a href="/watch">Watch</a>
        <a href="/airpods">AirPods</a>
        <a href="/catalog">Каталог</a>
      </nav>
    </div>
    </div>
    <div class="menu_container__mobile__header_btm">
      <div>
        <a href="/" class="not-hover"><i class="bx bx-home no_after_ico"></i> Главная</a>
        <a href="/catalog" class="not-hover"><i class='bx bx-grid-alt'></i> Каталог</a>
        <a href="" class="not-hover i_s"><i class="bx bx-heart"></i> Избранное</a>
        <a href="" class="not-hover i_s"><i class="bx bx-basket"></i> Корзина</a>
      </div>
    </div>

    <div class="menu_container__box__category menu_container__box__category_1 none">
      <div class="menu_container__box__category__box menu_container__box__category_1__box">
        <nav>
          <h2>Серия iPhone 15</h2>
          <a href="">iPhone 15 Pro Max</a>
          <a href="">iPhone 15 Pro</a>
          <a href="">iPhone 15 Plus</a>
          <a href="">iPhone 15</a>
        </nav>
        <nav>
          <h2>Серия iPhone 14</h2>
          <a href="">iPhone 14 Pro Max</a>
          <a href="">iPhone 14 Pro</a>
          <a href="">iPhone 14 Plus</a>
          <a href="">iPhone 14</a>
        </nav>
        <nav>
          <h2>Серия iPhone 13</h2>
          <a href="">iPhone 13 Pro Max</a>
          <a href="">iPhone 13 Pro</a>
          <a href="">iPhone 13</a>
          <a href="">iPhone 13 mini</a>
        </nav>
        <nav>
          <h2>Серия iPhone 12</h2>
          <a href="">iPhone 12 Pro Max</a>
          <a href="">iPhone 12 Pro</a>
          <a href="">iPhone 12</a>
          <a href="">iPhone 12 mini</a>
        </nav>
        <nav>
          <h2>Серия iPhone 11</h2>
        </nav>
        <nav>
          <h2>Серия iPhone SE</h2>
        </nav>
        <nav>
          <h2>Аксессуары</h2>
          <a href="/airpods">AirPods</a>
          <a href="">Чехлы для iPhone</a>
          <a href="">Кабели</a>
          <a href="">Зарядные устройства</a>
        </nav>
      </div>
    </div>
    <div class="menu_container__box__category menu_container__box__category_2 none">
      <div class="menu_container__box__category__box menu_container__box__category_2__box">
        <nav>
          <h2>iPad Pro</h2>
          <a href="">iPad Pro 12.9</a>
          <a href="">iPad Pro 11</a>
        </nav>
        <nav>
          <h2>iPad Air</h2>
          <a href="">iPad Air 10.9</a>
        </nav>
        <nav>
          <h2>iPad</h2>
          <a href="">iPad 10.9</a>
          <a href="">iPad 10.2</a>
        </nav>
        <nav>
          <h2>iPad mini</h2>
          <a href="">iPad mini</a>
        </nav>
        <nav>
          <h2>Аксессуары для iPad</h2>
          <a href="/airpods">AirPods</a>
          <a href="">Чехлы для iPad</a>
          <a href="">Защитные стекла для iPad</a>
          <a href="">Зарядные устройства</a>
        </nav>
      </div>
    </div>
  </header>
  <div id="page" class="hfeed site">
    <div id="main" class="wrapper">