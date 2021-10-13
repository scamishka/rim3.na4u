<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="container-fluid topline">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-sm-2 col-xs-3">
					<a href="/" class="logo-link"><img class="logo" src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="Издательство 3 Рим"></a>
				</div>
				<div class="col-md-3 middle hidden-sm hidden-xs top_address">г. Москва, Авиамоторная 12</div>
				<div class="col-md-2 middle hidden-sm hidden-xs top_phone"><a href="tel:+74959662332">+7 495 125-20-00</a></div>
				<div class="col-md-1"></div>
				<div class="col-md-2 middle hidden-sm hidden-xs">
					<a href="https://vk.com/tretij_rim" target="_blank" class="link_vk"></a>
					<a href="https://www.instagram.com/rim3.ru/" target="_blank" class="link_in"></a>
					<a href="https://ru-ru.facebook.com/rim3.ru/" target="_blank" class="link_fb"></a>
				</div>
				<div class="col-md-3 middle col-sm-10 col-xs-9">
					<?$APPLICATION->IncludeComponent("bitrix:search.title", "search_tit2", Array(
						"CATEGORY_0" => "",	// Ограничение области поиска
							"CATEGORY_0_TITLE" => "",	// Название категории
							"CHECK_DATES" => "Y",	// Искать только в активных по дате документах
							"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
							"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
							"CONTAINER_ID" => "title-search",	// ID контейнера, по ширине которого будут выводиться результаты
							"INPUT_ID" => "title-search-input",	// ID строки ввода поискового запроса
							"NUM_CATEGORIES" => "1",	// Количество категорий поиска
							"ORDER" => "date",	// Сортировка результатов
							"PAGE" => "#SITE_DIR#auto/brands/search/",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
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
			</div>
		</div>
	</div>
</div>