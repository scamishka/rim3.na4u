<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Мои группы");
?><?
$user_id = $USER->GetID();
$rsUser = CUser::GetByID($USER->GetParam('USER_ID'));
$arUser = $rsUser->Fetch();
$arGroups = CUser::GetUserGroup($user_id);
?><?
$count_inst = 0;
if (CModule::IncludeModule("iblock")) {
    $arSelect = array("ID");
    $arFilter = array("CREATED_BY" => $user_id, "IBLOCK_ID" => 37);
    $res = CIBlockElement::GetList(array(), $arFilter, false, array("nPageSize" => 10000), $arSelect);
    $count_inst = $res->SelectedRowsCount();
}
?>
    <div class="container gray_border2">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="autor_lexus">
                            <div class="autor_lexus_left"
                                 style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/img/foto2.jpg')"></div>
                            <div class="autor_lexus_right"
                                 style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/img/lexus.jpg')">
                                <div class="auto_name">Lexus IS 3</div>
                            </div>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/round3.png" alt="" class="round3">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="autor3">
                                    <h1><?= $arUser['NAME'] ?> <?= $arUser['LAST_NAME'] ?></h1>
                                    <? if ((in_array(21, $arGroups)) == true) { ?>
                                        <img src="/bitrix/templates/rbp/img/autor_yellow.png" alt=""
                                             class="autor_yellow">
                                    <? } else { ?>
                                        <a href="javascript:void(0);" class="autor_yellow">Стать автором</a>
                                    <? } ?>
                                    <div class="stars">
                                        <img src="/bitrix/templates/rbp/img/yellow_star.png" alt="">
                                        <img src="/bitrix/templates/rbp/img/yellow_star.png" alt="">
                                        <img src="/bitrix/templates/rbp/img/yellow_star.png" alt="">
                                        <img src="/bitrix/templates/rbp/img/yellow_star.png" alt="">
                                        <img src="/bitrix/templates/rbp/img/gray_star.png" alt="">
                                    </div>
                                    <? if ($arUser['PERSONAL_CITY'] or $arUser['PERSONAL_COUNTRY']) { ?>
                                        <div class="location">
                                            <?= $arUser['PERSONAL_CITY'] ?>
                                            , <?= GetCountryByID($arUser['PERSONAL_COUNTRY']); ?>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="pokazatel">
                                    <p class="count">53</p>
                                    <p class="title">Репутация</p>
                                    <img src="/bitrix/templates/rbp/img/reputation.png" alt="">
                                </div>
                                <div class="pokazatel">
                                    <p class="count">15</p>
                                    <p class="title">Ответов</p>
                                    <img src="/bitrix/templates/rbp/img/answers_red.png" alt="">
                                </div>
                                <div class="pokazatel">
                                    <p class="count"><?= $count_inst ?></p>
                                    <p class="title">Инструкций</p>
                                    <img src="/bitrix/templates/rbp/img/instructions_red.png" alt="">
                                </div>
                                <div class="pokazatel">
                                    <p class="count">16</p>
                                    <p class="title">Группы</p>
                                    <img src="/bitrix/templates/rbp/img/groups_red.png" alt="">
                                </div>
                                <div class="pokazatel">
                                    <a href="/auto/account/edit/"><img alt="Личные данные"
                                                                       src="/bitrix/templates/rbp/img/edit.png"
                                                                       class="pokazatel_edit"></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 row_menu_akk">
                                <ul class="menu_akk">
                                    <li><a href="/auto/account/">Мои инструкции</a></li>
                                    <li><a href="/auto/account/favorites/">Избранное</a></li>
                                    <li><a href="/auto/account/groups/">Мои группы</a></li>
                                    <li><a href="/auto/account/notifications/">Оповещения</a></li>
                                    <li class="active"><a href="/auto/account/pay/">Разместить баннер</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="block_text">
                <p>
                    Вы можете разместить свой баннер отдельно в каждом из разделов или же во всех сразу:
                    <a href="/auto/" target="_blank">«Авто»</a>, <a href="/avtonovosti/" target="_blank">Автоновости</a>,
                    <a href="/comauto/" target="_blank">Коммерческие авто</a>
                </p>

                <p>
                    Что нужно, чтобы реклама работала:
                </p>
                <div class="block_button">
                    <a class="button-title limegreen"
                       target="_blank"
                       href="/bitrix/admin/adv_banner_edit.php?CONTRACT_ID=7&lang=ru">Размещение баннера в системе</a>
                </div>
                <div class="block_button">
                    <a class="button-title yellow" href="#">Оплата тарифа размещения</a>
                </div>
            </div>

            <div class="block_pay">

            </div>
        </div>
    </div>

    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>