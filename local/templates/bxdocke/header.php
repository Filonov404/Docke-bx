<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>

<!doctype html>
<html lang="en">
<head>
    <?

    use Bitrix\Main\Page\Asset;

    // подключение JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-3.6.0.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/loopcounter.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/slick.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/main.js');
    //  подключение CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/slick.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/reset.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    $APPLICATION->ShowHead();
    ?>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>

<?
$APPLICATION->ShowPanel();
?>

<button class="scrollUp"></button>
<header class="header">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/logo.webp" alt="logo" class="logo-img">
            </div>
            <div class="header-oficial-text">
                <p class="oficial-text">
                    Официальный дилер
                    сайдинга и фасадных
                    панелей Döcke
                </p>
            </div>
            <div class="header-phone">
                <div class="phone-num">
                    <a href="tel:+74991234567" class="phone-link">+7 (499) 123-45-67</a>
                </div>
                <div class="whatsapp">
                    <a href="https://web.whatsapp.com/send?phone=79061234567" class="whatsapp-link">WhatsApp +7 (906)
                        123-45-67</a>
                </div>
            </div>
            <button class="header-callback">
                <span>Заказать звонок</span>
            </button>
        </div>
    </div>
    <div class="header-bottom-wrapper">
        <div class="container">
            <div class="header-bottom-inner">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "templates",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "templates"
                    ),
                    false
                ); ?>
                <a href="/" class="back-benefits">На главную</a>
            </div>
        </div>
    </div>
</header>

</body>
</html>
