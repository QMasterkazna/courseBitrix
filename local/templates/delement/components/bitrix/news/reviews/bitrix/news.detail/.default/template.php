<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>


<div class="news-detail">

    <img
            src="<?php echo !empty($arResult["DETAIL_PICTURE"]["SRC"]) ? $arResult["DETAIL_PICTURE"]["SRC"] : $arResult["PREVIEW_PICTURE"]["SRC"];?>"
            alt="<?php echo $arResult["NAME"]; ?>"
            style="float:left; margin:0 15px 15px 0; max-width:200px; border-radius:4px;"
    />

    <div class="news-date">
        <?php echo $arResult["DISPLAY_ACTIVE_FROM"]; ?>, <?php echo $arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]; ?>, <?php echo $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]; ?>
    </div>

    <div style="clear:both;"></div>
    <hr />

    <div>
        <?php echo !empty(trim($arResult["DETAIL_TEXT"])) ? $arResult["DETAIL_TEXT"] : $arResult["PREVIEW_TEXT"]; ?>
    </div>

</div>


</body>
</html>