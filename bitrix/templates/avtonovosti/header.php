<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowMeta("viewport");?>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Cache-Control" content="no-cache" />
		<meta name="google-site-verification" content="3Rgv8vD2fp-VtfS1RkXRBICVTqB_Y8usaJeNWZupzXY" />
		<meta name="yandex-verification" content="62ed258f206af2e5" />
		<meta name="yandex-verification" content="ea643fe95012685b" />
		<script charset="UTF-8" src="//cdn.sendpulse.com/js/push/00d9064bec72c6da20bf42e55dad1e32_1.js" async></script>
		<script src="https://yastatic.net/pcode/adfox/loader.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="async_af.js"></script>
	</head>
	<body class="ishome">
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
	<div class="top_rekl responsive-img" style="width: auto; max-width: 100%">	
	<center>
	<!--AdFox START-->
	<!--yandex_rimportal-->
	<!--Площадка: rim3.ru / Автоновости / Автоновости верхный баннер 1198 - 418-->
	<!--Категория: Автоновости внутри новостей-->
	<!--Тип баннера: Перетяжка 100%-->
	<!--<div id="adfox_15924729621729375"></div>
	<script>
		/*window.Ya.adfoxCode.createAdaptive({
			ownerId: 348986,
			containerId: 'adfox_15924729621729375',
			params: {
				p1: 'ckzvw',
				p2: 'y'
			}
		}, ['desktop', 'tablet', 'phone'], {
			tabletWidth: 830,
			phoneWidth: 480,
			isAutoReloads: true
		});  */
	</script>-->
	<?/* $APPLICATION->IncludeComponent(
	"bitrix:advertising.banner", 
	".default", 
	array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"NOINDEX" => "Y",
		"QUANTITY" => "1",
		"TYPE" => "top_benner",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
); */?>
	</center>
	</div>
	<?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
			"CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
			"DELAY" => "N",	// Откладывать выполнение шаблона меню
			"MAX_LEVEL" => "1",	// Уровень вложенности меню
			"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
				0 => "",
			),
			"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
			"MENU_CACHE_TYPE" => "N",	// Тип кеширования
			"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
			"MENU_THEME" => "site",	// Тема меню
			"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
			"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		),
		false
	);?>
	<header class="main-head">
		<div class="container">
			<div class="row">
					<div class="block_logo">
						<a href="/" class="logo"><img src="/bitrix/img/Logo-2017-head.svg" alt="Главная"></a>						
					</div>
					<div class="block_slogan">
						<a href="/" class="slogan_img"><img src="/bitrix/img/Zavodit_Vsegda_Black.svg" alt="Главная"></a>						
					</div>
					<div class="soc soc_head hidden-xs">
						<a href="https://vk.com/tretij_rim"><i class="fa fa-vk"></i></a>									
						<a href="https://www.facebook.com/rim3.ru/"><i class="fa fa-facebook"></i></a>									
						<a href="https://www.youtube.com/channel/UCzCd1HxpJxgxYTnBeGY_9bw"><i class="fa fa-youtube"></i></a>	
						<a href="https://www.instagram.com/rim3.ru/"><i class="fa fa-instagram"></i></a>	
					</div>	
					<div class="">
						<div class="reg_block registration">
 							<?$APPLICATION->IncludeComponent("bitrix:search.title", "search_news", Array(
							"CATEGORY_0" => "",	// Ограничение области поиска
								"CATEGORY_0_TITLE" => "",	// Название категории
								"CHECK_DATES" => "Y",	// Искать только в активных по дате документах
								"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
								"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
								"CONTAINER_ID" => "title-search",	// ID контейнера, по ширине которого будут выводиться результаты
								"INPUT_ID" => "title-search-input",	// ID строки ввода поискового запроса
								"NUM_CATEGORIES" => "1",	// Количество категорий поиска
								"ORDER" => "date",	// Сортировка результатов
								"PAGE" => "#SITE_DIR#avtonovosti/search/",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
								"SHOW_INPUT" => "Y",	// Показывать форму ввода поискового запроса
								"SHOW_OTHERS" => "N",	// Показывать категорию "прочее"
								"TOP_COUNT" => "5",	// Количество результатов в каждой категории
								"USE_LANGUAGE_GUESS" => "Y",	// Включить автоопределение раскладки клавиатуры
								"COMPONENT_TEMPLATE" => "visual",
								"PRICE_CODE" => "",	// Тип цены
								"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
								"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода
								"SHOW_PREVIEW" => "Y",	// Показать картинку
								"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
							),
							false
						);?>
 						</div>

						<div class="reg_block registration">
                            <?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "top_auth", Array(
                                "COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
                                "COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
                                "FORGOT_PASSWORD_URL" => "/auth/forget.php",	// Страница забытого пароля
                                "PROFILE_URL" => "/personal/",	// Страница профиля
                                "REGISTER_URL" => "/auth/registration.php",	// Страница регистрации
                                "SHOW_ERRORS" => "N",	// Показывать ошибки
                            ),
                                false
                            );?>
						</div>
					</div>
			</div>
		</div>
		<?if ($APPLICATION->GetCurDir()=="/avtonovosti/"){
			 $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "page",
					"AREA_FILE_SUFFIX" => "inc_autonews",
					"EDIT_TEMPLATE" => ""
				)
			);};
		?>
	<div class="container">
		<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
		        "START_FROM" => "0", 
		        "PATH" => "", 
		        "SITE_ID" => "s1" 
		    )
		);?>
	</div>