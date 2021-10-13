<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Избранное");
?>

<?$APPLICATION->IncludeComponent(
	"rim3:element.seo", 
	".default", 
	array(
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
		"GROUPS" => array(
			0 => "21",
			1 => "23",
		),
		"IBLOCK_ID" => "37",
		"IBLOCK_TYPE" => "rbp",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(
			0 => "3427",
			1 => "3429",
			2 => "3437",
			3 => "NAME",
			4 => "IBLOCK_SECTION",
			5 => "PREVIEW_PICTURE",
			6 => "DETAIL_TEXT",
			7 => "DETAIL_PICTURE",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "NAME",
			1 => "IBLOCK_SECTION",
			2 => "DETAIL_TEXT",
			3 => "DETAIL_PICTURE",
		),
		"RESIZE_IMAGES" => "N",
		"SEF_FOLDER" => "/rbp-online/account/add/",
		"SEF_MODE" => "Y",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "Инструкция успешно добавлено",
		"USER_MESSAGE_EDIT" => "Инструкция успешно сохранено",
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
); ?><br>

<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>