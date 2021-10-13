<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Генерация выпусков");
?>Text here.... <br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"rim3:subscribe.news",
	"",
	Array(
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"IBLOCK_TYPE" => "information",
		"ID" => "1",
		"SITE_ID" => "s1",
		"SORT_BY" => "ACTIVE_FROM",
"PARAM_RUBRIC_CODE"=>"2",
		"SORT_ORDER" => "DESC"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>