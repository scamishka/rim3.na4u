<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Избранное");
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
										<img src="<?=SITE_TEMPLATE_PATH?>/img/autor_yellow.png" alt="" class="autor_yellow">
									<?}else{?>
										<!--<a href="javascript:void(0);" class="autor_yellow" onclick="Сreate_author(<?=$user_id?>); return false;">Стать автором</a>	-->
										<a href="javascript:void(0);" class="autor_yellow">Стать автором</a>	
									<?}?>
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
								<div class="pokazatel">
									<p class="count">53</p>
									<p class="title">Репутация</p>
									<img src="<?=SITE_TEMPLATE_PATH?>/img/reputation.png" alt="">
								</div>

								<div class="pokazatel">
									<p class="count">15</p>
									<p class="title">Ответов</p>
									<img src="<?=SITE_TEMPLATE_PATH?>/img/answers_red.png" alt="">
								</div>

								<div class="pokazatel">
									<p class="count"><?=$count_inst?></p>
									<p class="title">Инструкций</p>
									<img src="<?=SITE_TEMPLATE_PATH?>/img/instructions_red.png" alt="">
								</div>

								<div class="pokazatel">
									<p class="count">16</p>
									<p class="title">Группы</p>
									<img src="<?=SITE_TEMPLATE_PATH?>/img/groups_red.png" alt="">
								</div>

								<div class="pokazatel">
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
								<li><a href="/auto/account/notifications/">Оповещения <span class="notific_small">3</span></a></li>
							</ul>
							
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>


<?$APPLICATION->IncludeComponent(
	"bitrix:main.profile", 
	"account_edit", 
	array(
		"CHECK_RIGHTS" => "Y",
		"SEND_INFO" => "N",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(
			0 => "UF_MARKA",
			1 => "UF_CAR",
		),
		"USER_PROPERTY_NAME" => "",
		"COMPONENT_TEMPLATE" => "account_edit"
	),
	false
);?><br>
<?/* $APPLICATION->IncludeComponent(
	"rim3:element.edit.form",
	"",
	Array(
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "Y",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"GROUPS" => array("21","23"),
		"IBLOCK_ID" => "37",
		"IBLOCK_TYPE" => "rbp",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array("3427","3428","3429","3437","NAME","IBLOCK_SECTION","PREVIEW_PICTURE","DETAIL_TEXT","DETAIL_PICTURE"),
		"PROPERTY_CODES_REQUIRED" => array("NAME","IBLOCK_SECTION","DETAIL_TEXT","DETAIL_PICTURE"),
		"RESIZE_IMAGES" => "N",
		"SEF_FOLDER" => "/auto/account/add/",
		"SEF_MODE" => "Y",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "Инструкция успешно добавлено",
		"USER_MESSAGE_EDIT" => "Инструкция успешно сохранено",
		"USE_CAPTCHA" => "N"
	)
); */ ?><br>



<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>