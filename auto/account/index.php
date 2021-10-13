<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мои инструкции");
?>
<?
	$user_id = $USER->GetID();
	$rsUser = CUser::GetByID($USER->GetParam('USER_ID'));
	$arUser = $rsUser->Fetch(); 
	$arGroups = CUser::GetUserGroup($user_id); 
?>
<? 
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
					<div class="row" style="min-height: 103px;">
						<div class="col-md-5">
							<div class="autor3">
								<h1><?=$arUser['NAME']?> <?=$arUser['LAST_NAME']?></h1>
								<div class="stars">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/yellow_star.png" alt="">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/yellow_star.png" alt="">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/yellow_star.png" alt="">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/yellow_star.png" alt="">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/gray_star.png" alt="">
								</div>
								<?if($arUser['PERSONAL_CITY'] or $arUser['PERSONAL_COUNTRY']){?>
								<div class="location"><?=$arUser['PERSONAL_CITY']?>, <?=GetCountryByID($arUser['PERSONAL_COUNTRY']);?></div>
								<?}?>
							</div>
						</div>
						<div class="col-md-7">
							<div class="pokazatel reput_icon">
								<p class="count">53</p>
								<p class="title">Репутация</p>
							</div>
							<div class="pokazatel answ_icon">
								<p class="count">15</p>
								<p class="title">Ответов</p>
							</div>
							<div class="pokazatel instr_icon">
								<p class="count"><?=$count_inst?></p>
								<p class="title">Инструкций</p>
							</div>
							<div class="pokazatel group_icon">
								<p class="count">16</p>
								<p class="title">Группы</p>
							</div>
							<div class="edit_icon">
								<a href="/auto/account/edit/"><img class="pokazatel_edit" src="<?=SITE_TEMPLATE_PATH?>/img/edit.png" alt="Личные данные"></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 row_menu_akk">
							<ul class="menu_akk">
								<li class="active"><a href="/auto/account/">Мои инструкции</a></li>
								<li><a href="/auto/account/favorites/">Избранное</a></li>
								<li><a href="/auto/account/groups/">Мои группы</a></li>
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
 <?
$user_id = $USER->GetID();
$GLOBALS['arrAuthorName'] = array("CREATED_BY"=>$user_id,"ACTIVE"=>"");
?>
<?
	if($_POST['razdel']){	
		$_SESSION['PARAM']['marka'] 	= $_POST['marka']; 
		$_SESSION['PARAM']['model']	= $_POST['model'] ; 
		$_SESSION['PARAM']['razdel'] = $_POST['razdel']; 
	}
 	if(isset($_SESSION['PARAM']['razdel']) and $_SESSION['PARAM']['razdel']>1){ 
		$GLOBALS['arrAuthorName'] = array("SECTION_ID" => $_SESSION['PARAM']['razdel'],"CREATED_BY"=>$user_id,"ACTIVE"=>"" );		
	}
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"my_instructions", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrAuthorName",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "37",
		"IBLOCK_TYPE" => "rbp",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"PARAMS" => array(
			"MARKA" => $_SESSION["PARAM"]["marka"],
			"MODEL" => $_SESSION["PARAM"]["model"],
			"RAZDEL" => $_SESSION["PARAM"]["razdel"],
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "my_instructions",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>