<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult['ITEMS'])): ?>
    <?php foreach ($arResult['ITEMS'] as $arItem): ?>
        <div class="review-item">

            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="review-img-wrap">
                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class="review-img">
            </div>
            <div class="review-content">
                <div class="review-content-top">
                    <span class="review-name"><?= isset($arItem["NAME"]) ? $arItem["NAME"] : ''; ?></span>
                    <span class="review-date"><?= isset($arItem["DATE_CREATE"]) ? $arItem["DATE_CREATE"] : ''; ?></span>
                </div>
                <div class="review-content-middle">
                    <div class="review-plus">
                        <span class="review-descr">Достоинства:</span>
                        <p class="plus-text"><?= isset($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : ''; ?></p>
                    </div>
                    <div class="review-minus">
                        <span class="review-descr">Недостатки:</span>
                        <p class="plus-text"><?= isset($arItem["DETAIL_TEXT"]) ? $arItem["DETAIL_TEXT"] : ''; ?></p>
                    </div>
                </div>
                <div class="review-content-main">
                    <span class="review-descr">Комментарий:</span>
                    <p class="review-content-text">
                        <?= isset($arItem["DISPLAY_PROPERTIES"]["TEXT"]["VALUE"]) ? $arItem["DISPLAY_PROPERTIES"]["TEXT"]["VALUE"] : ''; ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

