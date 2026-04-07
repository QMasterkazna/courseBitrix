<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult['ITEMS'])){ ?>
<h1>Отзывы</h1>

<div class="news-list">

    <!-- Отзыв 1 -->
    <?php foreach($arResult["ITEMS"] as $arItem){ ?>
        <div class="news-item">
            <?php if (!empty($arResult["DETAIL_PICTURE"]["SRC"]) || !empty($arResult["PREVIEW_PICTURE"]["SRC"])){ ?>
                <div style="float:left; margin:0 15px 10px 0;">
                    <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>">
                        <img src="<?= !empty($arResult["DETAIL_PICTURE"]["SRC"]) ? $arResult["DETAIL_PICTURE"]["SRC"] : $arResult["PREVIEW_PICTURE"]["SRC"]; ?>" style="border-radius:50%;" />
                    </a>
                </div>
            <?php } ?>
            <div class="news-title">
                <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>"><?= $arItem["NAME"]; ?></a>
            </div>

            <div class="news-date">
                <?= $arItem["DISPLAY_ACTIVE_FROM"]; ?>, <?= $arItem["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]; ?>, <?= $arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]; ?>
            </div>

            <div style="margin-top:10px;">
                <?= $arItem["PREVIEW_TEXT"]; ?>
            </div>

            <div style="clear:both;"></div>
            <a class="news-detail-link" href="<?= $arItem["DETAIL_PAGE_URL"]; ?>">Подробнее &rarr;</a>
        </div>
    <?php } ?>

</div>
<?php } ?>
