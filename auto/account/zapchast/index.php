<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Избранное");
?>

<?$APPLICATION->IncludeComponent(
	"rim3:element.zapchast",
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
		"SEF_FOLDER" => "/rbp-online/account/add/",
		"SEF_MODE" => "Y",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "Инструкция успешно добавлено",
		"USER_MESSAGE_EDIT" => "Инструкция успешно сохранено",
		"USE_CAPTCHA" => "N"
	)
); ?><br>

<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>