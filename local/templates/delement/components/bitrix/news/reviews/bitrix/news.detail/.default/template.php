<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<?php if (!empty($arResult['ITEMS'])){ ?>
    <div class="news-detail">

        <?php if (!empty($arResult["DETAIL_PICTURE"]["SRC"]) || !empty($arResult["PREVIEW_PICTURE"]["SRC"])){ ?>
            <img
                    src="<?= !empty($arResult["DETAIL_PICTURE"]["SRC"]) ? $arResult["DETAIL_PICTURE"]["SRC"] : $arResult["PREVIEW_PICTURE"]["SRC"]; ?>"
                    alt="<?= $arResult["NAME"]; ?>"
                    style="float:left; margin:0 15px 15px 0; max-width:200px; border-radius:4px;"
            />
        <?php } ?>

        <div class="news-date">
            <?= $arResult["DISPLAY_ACTIVE_FROM"]; ?>, <?= $arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]; ?>, <?= $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]; ?>
        </div>

        <div style="clear:both;"></div>
        <hr />

        <div>
            <?= !empty(trim($arResult["DETAIL_TEXT"])) ? $arResult["DETAIL_TEXT"] : $arResult["PREVIEW_TEXT"]; ?>
        </div>

    </div>
<?php } ?>