<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("РБП-онлайн");?>
<div class="container-fluid bigpic">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h4>ТРЕТИЙ РИМ АВТО. <br/>РЕМОНТ, ТО и ЭКСПЛУАТАЦИЯ</h4>
					<h1>ОНЛАЙН<br>
					АВТОСЕРВИС</h1>
					<span>Добро пожаловать на сайт первого в мире онлайн-автосервиса.<br/>Специально для вас наши профессионалы разобрали и детально проработали более 300 автомобилей, сформировав
простые и понятные инструкции к 500 различным моделям.<br/>Каждый день база инструкций растёт.<br/>Для пользования онлайн-автосервисом вам хватит минимальных знаний об устройстве автомобиля.<br/>Не переплачивайте за ремонт!</span>
				</div>
				<div class="col-md-7">
				</div>
			</div>
				<br>
				<br>
			<div class="row">
				<div class="instructions">
					<div class="col-md-12">
						<div id="video_sliderfooter">
							<div style="text-align: center;" class="video sl">
								 <iframe class="auto_pic" src="https://www.youtube.com/embed/3j41StI9zhI" frameborder="0" allowfullscreen></iframe>
							</div>
							<div style="text-align: center;" class="video sl">
								 <iframe class="auto_pic" src="https://www.youtube.com/embed/fZZEmokPCcQ" frameborder="0" allowfullscreen></iframe>
							</div>
							<div style="text-align: center;" class="video sl">
								 <iframe class="auto_pic" src="https://www.youtube.com/embed/1UfH5FAJiP4" frameborder="0" allowfullscreen></iframe>
							</div>
							<div style="text-align: center;" class="video sl">
								 <iframe class="auto_pic" src="https://www.youtube.com/embed/j5r_mqasp1Q" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-md-3">
					<a href="/auto/instruktsii/">
						<div class="all_books">
							 Все руководства
						</div>
						<div class="all_books2"> &gt;</div>
					</a>
				</div>
			</div>
			<br/>
			<?$APPLICATION->IncludeComponent(
				"rim3:filter.instruction",
				"main_filter",
				Array(
					"AJAX_MODE" => "Y",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"COMPOSITE_FRAME_MODE" => "A",
					"COMPOSITE_FRAME_TYPE" => "AUTO"
				)
			);?>
		</div>
	</div>
</div>
<div class="container brands"><br>
	<div class="row">
		<div class="col-md-12">
			<h2 class="brands_title">МАРКИ</h2>
			<h4 class="brands_subtitle">Самый большой архив<br>
			 инструкций для всех машин</h4>
			<div class="all_items">
				<a href="/auto/brands/">Все марки &gt;&gt;&gt;</a>
			</div>
		</div>
	</div>
	<br>
	<div class="brands_row">
		<?$APPLICATION->IncludeComponent(
			"bitrix:catalog.section.list",
			"cat_list_instr",
			Array(
				"ADD_SECTIONS_CHAIN" => "Y",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"COMPONENT_TEMPLATE" => "cat_list_instr",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"COUNT_ELEMENTS" => "N",
				"IBLOCK_ID" => "37",
				"IBLOCK_TYPE" => "rbp",
				"SECTION_CODE" => "",
				"SECTION_FIELDS" => array(0=>"",1=>"",),
				"SECTION_ID" => $_REQUEST["SECTION_ID"],
				"SECTION_URL" => "/auto/brands/#SECTION_CODE_PATH#/#ELEMENT_CODE#",
				"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
				"SHOW_PARENT_NAME" => "Y",
				"TOP_DEPTH" => "1",
				"VIEW_MODE" => "LINE"
			)
		);?>
	</div>
</div><br>
	<div class="container brands">
		<div class="row"><br>
			<div class="col-md-12" style="text-align: center">
				<a href="/auto/brands/" class="more1">Загрузить еще</a>
			</div>
		</div>
	</div><br><br>
<div class="container banners">
	<div class="row">
		<div class="col-md-5 text-center">
			<?$APPLICATION->IncludeComponent("bitrix:advertising.banner", "banner_top", Array(
				"CACHE_TIME" => "0",	// Время кеширования (сек.)
				"CACHE_TYPE" => "A",	// Тип кеширования
				"COMPONENT_TEMPLATE" => ".default",
				"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
				"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
				"NOINDEX" => "N",	// Добавлять в ссылки noindex/nofollow
				"QUANTITY" => "1",	// Количество баннеров для показа
				"TYPE" => "rbp_top",	// Тип баннера
			),
			false
			);?>
		</div>
		<div class="col-md-7 text-center">
			<?$APPLICATION->IncludeComponent(
				"bitrix:advertising.banner", 
				".default", 
				array(
					"CACHE_TIME" => "0",
					"CACHE_TYPE" => "A",
					"COMPONENT_TEMPLATE" => ".default",
					"COMPOSITE_FRAME_MODE" => "A",
					"COMPOSITE_FRAME_TYPE" => "AUTO",
					"NOINDEX" => "N",
					"QUANTITY" => "1",
					"TYPE" => "rbp_top_wide"
				),
				false
			);?>
		</div>
	</div>
</div><br>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"rbp_list_instr", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "rbp_list_instr",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "PREVIEW_TEXT",
			3 => "PREVIEW_PICTURE",
			4 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "37",
		"IBLOCK_TYPE" => "rbp",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Инструкции",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "TIME_RBP_FROM",
			2 => "DIFFICULT",
			3 => "TIME_RBP_TO",
			4 => "AUTHOR",
			5 => "AUTHOR",
			6 => "STEPS",
			7 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?> <br><br>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"rbp_list_instr2", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "rbp_list_instr2",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "PREVIEW_TEXT",
			3 => "PREVIEW_PICTURE",
			4 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "37",
		"IBLOCK_TYPE" => "rbp",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Инструкции",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "DIFFICULT",
			2 => "AUTHOR",
			3 => "DESC_BIG_PIC1",
			4 => "STEPS",
			5 => "TIME_RBP",
			6 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?> <br>
<br><br>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main_zapchasty",
	Array(
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
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"NAME",2=>"PREVIEW_TEXT",3=>"PREVIEW_PICTURE",4=>"DETAIL_TEXT",5=>"DETAIL_PICTURE",6=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "41",
		"IBLOCK_TYPE" => "rbp",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
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
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><br><br>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main_instrumenty",
	Array(
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
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DETAIL_TEXT",4=>"DETAIL_PICTURE",5=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "42",
		"IBLOCK_TYPE" => "rbp",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
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
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><br><br><br><br><br>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>