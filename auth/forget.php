<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Забыли пароль?");
?>
<center>

<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.forgotpasswd",
	"",
	Array(
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"REGISTER_URL" => "",
		"SHOW_ERRORS" => "N"
	)
);?>
</center>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>