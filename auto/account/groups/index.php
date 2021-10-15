<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мои группы");
?><?
	$user_id = $USER->GetID();
	$rsUser = CUser::GetByID($USER->GetParam('USER_ID'));
	$arUser = $rsUser->Fetch(); 
	$arGroups = CUser::GetUserGroup($user_id); 
?> <? 
$count_inst=0;
if(CModule::IncludeModule("iblock")){
	$arSelect = Array("ID");
	$arFilter = Array("CREATED_BY"=>$user_id, "IBLOCK_ID"=>37);
 	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>10000), $arSelect);
	$count_inst= $res->SelectedRowsCount();
}
?>
<div class="container gray_border2">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="autor_lexus">
						<div class="autor_lexus_left" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/foto2.jpg')"></div>
						<div class="autor_lexus_right" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/lexus.jpg')">
							<div class="auto_name">Lexus IS 3</div>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/round3.png" alt="" class="round3">
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-5">
							<div class="autor3">
								<h1><?=$arUser['NAME']?> <?=$arUser['LAST_NAME']?></h1>
								 <?if((in_array(21, $arGroups))==true){?> 
								 <img src="/bitrix/templates/rbp/img/autor_yellow.png" alt="" class="autor_yellow">
								<?}else{?> 
								<a href="javascript:void(0);" class="autor_yellow">Стать автором</a> 
								<?}?>
								<div class="stars">
									 <img src="/bitrix/templates/rbp/img/yellow_star.png" alt=""> 
									 <img src="/bitrix/templates/rbp/img/yellow_star.png" alt=""> 
									 <img src="/bitrix/templates/rbp/img/yellow_star.png" alt=""> 
									 <img src="/bitrix/templates/rbp/img/yellow_star.png" alt=""> 
									 <img src="/bitrix/templates/rbp/img/gray_star.png" alt="">
								</div>
								 <?if($arUser['PERSONAL_CITY'] or $arUser['PERSONAL_COUNTRY']){?>
								<div class="location">
									 <?=$arUser['PERSONAL_CITY']?>, <?=GetCountryByID($arUser['PERSONAL_COUNTRY']);?>
								</div>
								 <?}?>
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
								<p class="count"><?=$count_inst?></p>
								<p class="title">Инструкций</p>
								<img src="/bitrix/templates/rbp/img/instructions_red.png" alt="">
							</div>
							<div class="pokazatel">
								<p class="count">16</p>
								<p class="title">Группы</p>
								<img src="/bitrix/templates/rbp/img/groups_red.png" alt="">
							</div>
							<div class="pokazatel">
								<a href="/auto/account/edit/"><img alt="Личные данные" src="/bitrix/templates/rbp/img/edit.png" class="pokazatel_edit"></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 row_menu_akk">
							<ul class="menu_akk">
								<li><a href="/auto/account/">Мои инструкции</a></li>
								<li><a href="/auto/account/favorites/">Избранное</a></li>
								<li class="active"><a href="/auto/account/groups/">Мои группы</a></li>
								<li><a href="/auto/account/notifications/">Оповещения</a></li>								
								<li><a href="/auto/account/pay/">Разместить баннер</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"groups_all", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "40",
		"IBLOCK_TYPE" => "rbp",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "groups_all",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ELEMENT_ID",
		)
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>