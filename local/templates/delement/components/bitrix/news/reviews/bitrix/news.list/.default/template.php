<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult['ITEMS'])){ ?>
<h1>Отзывы</h1>

<div class="news-list">

    <!-- Отзыв 1 -->
    <?php foreach($arResult["ITEMS"] as $arItem){ ?>
        <div class="news-item">
            <div style="float:left; margin:0 15px 10px 0;">
                <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>">
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" width="80" alt="<?php echo $arItem["NAME"]; ?>" style="border-radius:50%;" />
                </a>
            </div>

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
