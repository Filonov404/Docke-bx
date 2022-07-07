<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
$APPLICATION->ShowCSS();
?>

<?if (!empty($arResult)):?>
    <ul class="catalog-inner">
        <?
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <?if($arItem["SELECTED"]):?>
            <li class="catalog-list-item"><a href="<?=$arItem["LINK"]?>" class="catalog-link-item active"><?=$arItem["TEXT"]?></a></li>
        <?else:?>
            <li class="catalog-list-item"><a href="<?=$arItem["LINK"]?>" class="catalog-link-item"><?=$arItem["TEXT"]?></a></li>
        <?endif?>
        <?endforeach?>
    </ul>
<?endif?>
