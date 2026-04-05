<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<h1>Отзывы</h1>

<div class="news-list">

    <!-- Отзыв 1 -->
    <?php foreach($arResult["ITEMS"] as $arItem): ?>
        <div class="news-item">
            <div style="float:left; margin:0 15px 10px 0;">
                <a href="<?php echo $arItem["DETAIL_PAGE_URL"]; ?>">
                    <img src="<?php echo $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" width="80" alt="<?php echo $arItem["NAME"]; ?>" style="border-radius:50%;" />
                </a>
            </div>

            <div class="news-title">
                <a href="<?php echo $arItem["DETAIL_PAGE_URL"]; ?>"><?php echo $arItem["NAME"]; ?></a>
            </div>

            <div class="news-date">
                <?php echo $arItem["DISPLAY_ACTIVE_FROM"]; ?>, <?php echo $arItem["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]; ?>, <?php echo $arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]; ?>
            </div>

            <div style="margin-top:10px;">
                <?php echo $arItem["PREVIEW_TEXT"]; ?>
            </div>

            <div style="clear:both;"></div>
            <a class="news-detail-link" href="<?php echo $arItem["DETAIL_PAGE_URL"]; ?>">Подробнее &rarr;</a>
        </div>
    <?php endforeach; ?>

</div>
</body>
</html>
