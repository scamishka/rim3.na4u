
         </div>
         <?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_RECURSIVE" => "Y",
				"AREA_FILE_SHOW" => "page",
				"AREA_FILE_SUFFIX" => "inc_contacts",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"EDIT_TEMPLATE" => ""
			)
			);?>
         
         <div class="yuramax_menu_2">
           <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"main_left", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "main_left",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "main_left"
	),
	false
);?>
         </div>
         </div>
         
         <div class="yuramax_bottom">
          <?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_RECURSIVE" => "Y",
				"AREA_FILE_SHOW" => "page",
				"AREA_FILE_SUFFIX" => "inc_footer_text",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"EDIT_TEMPLATE" => ""
			)
			);?>
		   
          <?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_RECURSIVE" => "Y",
				"AREA_FILE_SHOW" => "page",
				"AREA_FILE_SUFFIX" => "inc_footer_socseti",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"EDIT_TEMPLATE" => ""
			)
			);?>
			
         </div>
	
      </div>
	  <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-1.11.2.min.js" );?>
	  <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js" );?>
    </body>
</html>