<div style="text-align: center;">
	 <?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0) 
	LocalRedirect($backurl);

$APPLICATION->SetTitle("Авторизация");
?>
	<div class="container">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.confirmation",
	"flat",
	Array(
		"COMPONENT_TEMPLATE" => "flat",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONFIRM_CODE" => "confirm_code",
		"LOGIN" => "login",
		"USER_ID" => "confirm_user_id"
	)
);?>
		<p>
 <a href="<?=SITE_DIR?>">Вернуться на главную страницу</a>
		</p>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>