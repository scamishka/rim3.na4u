<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Раздел пользователя");
?>
<div class="container">

    <?$APPLICATION->IncludeComponent("bitrix:main.profile", "profile", Array(
	"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CHECK_RIGHTS" => "N",	// Проверять права доступа
		"SEND_INFO" => "N",	// Генерировать почтовое событие
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"USER_PROPERTY" => "",	// Показывать доп. свойства
		"USER_PROPERTY_NAME" => "",	// Название закладки с доп. свойствами
        "USER_PERSONAL_INFO" => "N",
        "USER_WORK_INFO" => "N",
        "USER_ADMIN_NOTES" => "N"
	),
	false
);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>