<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?><!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<?
	$APPLICATION->ShowMeta("robots", false, false);
	$APPLICATION->ShowMeta("keywords", false, false);
	$APPLICATION->ShowMeta("description", false, false);
	?>
	<meta charset="utf-8">
	<meta content="" name="description" />
	<meta content="" property="og:image" />
	<meta content="" property="og:description" />
	<meta content="" property="og:site_name" />
	<meta content="website" property="og:type" />
	<meta content="telephone=no" name="format-detection" />
	<meta http-equiv="x-rim-auto-match" content="none">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="canonical" href="<? echo "https://rim3.ru".$_SERVER["SCRIPT_URL"];?>"/>
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,700|Raleway:500|Roboto:100,400,900" rel="stylesheet"> 
	<?
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/bootstrap.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/animate.min.css');
	//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/font-awesome-4.7.0/css/font-awesome.min.css');
	//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jquery.bxslider.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jquery.cardtabs.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/slick.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/slick-theme.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/custom.css');
	$APPLICATION->ShowCSS(true, false);
	?>
	<?
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery-1.11.1.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/bootstrap.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/parallax.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.bxslider.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.cardtabs.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/wow.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.waterwheelCarousel.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/slick.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/rbp.js');
	$APPLICATION->ShowHeadStrings();
	$APPLICATION->ShowHeadScripts();
	?>
	<title><?$APPLICATION->ShowTitle();?></title>
	<script>
		new WOW().init();
	</script>
 
</head>
<body>
<?$APPLICATION->ShowPanel();?>

<?$APPLICATION->IncludeComponent("bitrix:main.include", "header", Array(
	"AREA_FILE_SHOW" => "file",	// Показывать включаемую область
		"AREA_FILE_SUFFIX" => "inc",
		"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
		"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
		"PATH" => "/inc_area/rbp/index_inc_head.php",	// Путь к файлу области
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"menu-rbp-top",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "rbp-top-menu",
		"COMPONENT_TEMPLATE" => "menu-rbp-top",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "rbp-top-menu",
		"USE_EXT" => "N"
	)
);?>
<?if ($APPLICATION->GetCurDir()!="/auto/"){?>
<div class="container-fluid">
	<div class="row breadcumbs">
		<div class="container">
			<div class="col-md-12 breadcumbs2">
			<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"bread", 
	array(
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "1",
		"COMPONENT_TEMPLATE" => "bread"
	),
	false
);?>
			</div>
		</div>
	</div>
</div>
<?};?>

				
			