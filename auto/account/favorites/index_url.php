<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Избранное");
?>
<?
	$user_id = $USER->GetID();
	$rsUser = CUser::GetByID($USER->GetParam('USER_ID'));
	$arUser = $rsUser->Fetch(); 
	$arGroups = CUser::GetUserGroup($user_id); 
?>
<? 
$count_inst=0;
if(CModule::IncludeModule("iblock")){
	$arSelect = Array("ID");
	$arFilter = Array("CREATED_BY"=>$user_id, "IBLOCK_ID"=>37);
 	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>10000), $arSelect);
	$count_inst= $res->SelectedRowsCount();
}
/* 
 $params_url = Array(
   "max_len" => "200",
   "change_case" => "L",
   "replace_space" => "_",
   "replace_other" => "_",
   "delete_repeat_replace" => "true",
   "use_google" => "false",
);
	 
//	 "CODE" 			=> ,


$arFilter2 = array('IBLOCK_ID' => '37',   'IBLOCK_SECTION_ID'=>	3360);     
$rsSect2 = CIBlockElement::GetList(array("NAME" => "ASC", "ID" => "ASC"),$arFilter2);
while ($arSection2 = $rsSect2->GetNext())
{
	echo $PRODUCT_ID=$arSection2["ID"];
	$url= CUtil::translit($arSection2["NAME"], "ru" , $params_url);
	echo $url2 = $url."_".$arSection2["IBLOCK_SECTION_ID"]."";
//	echo $arParams["AUTHOR_ELEMENT"]['ID']=$arSection2["ID"];
	$arLoadProductArray	 = Array(
		"CODE"			=> $url2,
		"ACTIVE"		=> "N"// активен
	);
	$oElement = new CIBlockElement();
	if($oElement->Update($PRODUCT_ID, $arLoadProductArray)){
		echo "12-";
	}


	echo "<br/>";
}  */      
/* $params_url = Array(
   "max_len" => "200",
   "change_case" => "L",
   "replace_space" => "_",
   "replace_other" => "_",
   "delete_repeat_replace" => "true",
   "use_google" => "false",
);
	 
//	 "CODE" 			=> ,

$i=1;
$arFilter2 = array('IBLOCK_ID' => '28',   'CODE' =>	false);     
$rsSect2 = CIBlockElement::GetList(array("NAME" => "ASC", "ID" => "ASC"),$arFilter2);
while ($arSection2 = $rsSect2->GetNext())
{
	echo $PRODUCT_ID=$arSection2["ID"];
	$url= CUtil::translit($arSection2["NAME"], "ru" , $params_url);
//	echo $arParams["AUTHOR_ELEMENT"]['ID']=$arSection2["ID"];
	$arLoadProductArray	 = Array(
		"CODE"			=> $url,
		"ACTIVE"		=> "Y"// активен
	);
	$oElement = new CIBlockElement();
	if($oElement->Update($PRODUCT_ID, $arLoadProductArray)){
		echo "12-";
	}


	echo "<br/>"; 
	
	if($i==500){
		break;
	}
	$i++;
}      */
?> 
<div class="container gray_border2">
	<div class="row">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="autor_lexus">
					<div class="autor_lexus_left" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/foto2.jpg')"></div>
					<div class="autor_lexus_right" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/lexus.jpg')">
						<div class="auto_name">Lexus IS 3</div>
					</div>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/round3.png" alt="" class="round3">
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-5">
						<div class="autor3">
							<h1><?=$arUser['NAME']?> <?=$arUser['LAST_NAME']?></h1>
							<?if((in_array(21, $arGroups))==true){?>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/autor_yellow.png" alt="" class="autor_yellow">
							<?}else{?>
								<a href="javascript:void(0);" class="autor_yellow">Стать автором</a>	
							<?}?>
							<div class="stars">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/yellow_star.png" alt="">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/yellow_star.png" alt="">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/yellow_star.png" alt="">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/yellow_star.png" alt="">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/gray_star.png" alt="">
							</div>
							<?if($arUser['PERSONAL_CITY'] or $arUser['PERSONAL_COUNTRY']){?>
							<div class="location"><?=$arUser['PERSONAL_CITY']?>, <?=GetCountryByID($arUser['PERSONAL_COUNTRY']);?></div>
							<?}?>
						</div>
					</div>
					<div class="col-md-7">
						<div class="pokazatel">
							<p class="count">53</p>
							<p class="title">Репутация</p>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/reputation.png" alt="">
						</div>

						<div class="pokazatel">
							<p class="count">15</p>
							<p class="title">Ответов</p>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/answers_red.png" alt="">
						</div>

						<div class="pokazatel">
							<p class="count"><?=$count_inst?></p>
							<p class="title">Инструкций</p>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/instructions_red.png" alt="">
						</div>

						<div class="pokazatel">
							<p class="count">16</p>
							<p class="title">Группы</p>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/groups_red.png" alt="">
						</div>

						<div class="pokazatel">
							<a href="/auto/account/edit/"><img class="pokazatel_edit" src="<?=SITE_TEMPLATE_PATH?>/img/edit.png" alt="Личные данные"></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 row_menu_akk">
						<ul class="menu_akk">
							<li><a href="/auto/account/">Мои инструкции</a></li>
							<li class="active"><a href="/auto/account/favorites/">Избранное</a></li>
							<li><a href="/auto/account/groups/">Мои группы</a></li>
							<li><a href="/auto/account/notifications/">Оповещения</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?
	global $DB;
	$user_id=$USER->GetID();	
	$sql="SELECT * FROM a_element_favorites where user_id=".$user_id." ORDER BY date DESC";
	$result = $DB->Query($sql);
	while($ar_step = $result->Fetch()){
		$res= CIBlockElement::GetByID($ar_step["element_id"]);
		$ar_res = $res->GetNext();
		$arParams["ELEMENT"][]= $ar_res; 
	}
?>
<div class="container autors_instr">
	<br/>
	<div class="row">
		<div class="col-md-9">
			<div class="row">
			<?if($arParams["DISPLAY_TOP_PAGER"]):?>
				<?=$arResult["NAV_STRING"]?><br />
			<?endif;?>
			<?foreach($arParams["ELEMENT"] as $arItem):?>
				<div class="col-md-6 padding0">
					<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="inst_link">
						<div class="instr_small">
							<div class="instr_pic_small" 	
							<?if(is_array($arItem["PREVIEW_PICTURE"])):?>
								style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"
							<?else:?>
								style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/icon_instr1.png);"
							<?endif?>>
							<? 
							$res= CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
							if($ar_res = $res->GetNext())
								$res_2= CIBlockSection::GetByID($ar_res['IBLOCK_SECTION_ID']);
									if($ar_res_2 = $res_2->GetNext())
								$res_3= CIBlockSection::GetByID($ar_res_2['IBLOCK_SECTION_ID']);
									if($ar_res_3 = $res_3->GetNext())
							?>
							</div>
							<div class="instr_text">
							<?foreach($arItem["FIELDS"] as $code=>$value):?>
								<small>
								<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
								</small><br />
							<?endforeach;?>
							<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
								<?if($arProperty["NAME"]=="Трудоемкость"):?>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/speed_black.png" alt="">
								<span class="green">
								<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
									<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
								<?else:?>
									<?=$arProperty["DISPLAY_VALUE"];?>
								<?endif?>
								&nbsp;&nbsp;&nbsp;
								<?endif?>
								</span>
								<?if($arProperty["NAME"]=="Количество операций"):?>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/steps_black.png" alt="">
								<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
									<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
								<?else:?>
									<?=$arProperty["DISPLAY_VALUE"];?>
								<?endif?>
								&nbsp;&nbsp;&nbsp;
								<?endif?>
								<?if($arProperty["NAME"]=="Требуется времени"):?>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/speed_black.png" alt="">
								<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
									<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
								<?else:?>
									<?=$arProperty["DISPLAY_VALUE"];?>
								<?endif?>
								&nbsp;&nbsp;&nbsp;
								<?endif?>
								<?if($arProperty["NAME"]=="автор"):?>
									<? $author=$arProperty["DISPLAY_VALUE"]; ?>
								<?endif?>
							<?endforeach;?>	
							<h4><?echo $arItem["NAME"]?></h4>
							<p><?echo $ar_res_3['NAME']." "; echo $ar_res_2['NAME'];?></p>
							<?if($author!=""):?>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/autor.png" alt="">
								<span class="autor5"><?=$author?></span>
								<? $author=""; ?>
							<?endif?>
							</div>
						</div>
					</a>
				</div>
				<?endforeach;?>
				<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
					<br /><?=$arResult["NAV_STRING"]?>
				<?endif;?>
			</div>
		</div>
		<div class="col-md-3 padding0"> <!-- Боковое меню -->
		<?
	$page = $APPLICATION->GetCurPage(); 
	$element_code = '37';
	CModule::IncludeModule("iblock");
	$db_list  = CIBlockSection::GetList(array("NAME" => "ASC", "ID" => "ASC"), Array('IBLOCK_ID' => $element_code, 'SECTION_ID'=>''));
		$marka[]=$arParentSection;	   
		$arFilter2 = array('IBLOCK_ID' => $arParentSection['IBLOCK_ID'], 'SECTION_ID'=>$arParams['PARAMS']['MARKA']); 
		$rsSect = CIBlockSection::GetList(array("NAME" => "ASC", "ID" => "ASC"),$arFilter2);
		while ($arSect = $rsSect->GetNext())
		{
			$model[]=$arSect;
		}
		$arFilter3 = array('IBLOCK_ID' => $arSect['IBLOCK_ID'], 'SECTION_ID'=>$arParams['PARAMS']['MODEL']);
		$rsSect2 = CIBlockSection::GetList(array("NAME" => "ASC", "ID" => "ASC"),$arFilter3);
		while ($arSect2 = $rsSect2->GetNext())
		{
			$razdel[]=$arSect2;
		}
?>
			<div class="filter_akk">
				<h4 class="text-left">ФИЛЬТР</h4>
				<div class="row text-center">
				<form action="<?=$page?>" method="post" name="">
					<div class="col-md-12">
						<div class="title">
							 МАРКА
						</div>
						<select name="marka" id="marka" class="filter_select2" onchange="load_model_sub('/auto/'); return false;">
							<option value="1" <?if ($arParams['PARAMS']['MARKA']==1){?>selected="selected"<?}?>>Выберите марку</option>	
							<?while($arParentSection = $db_list->GetNext())
							{?>
								<option value="<?=$arParentSection['ID']?>"  <?if ($arParams['PARAMS']['MARKA']==$arParentSection['ID']){?>selected="selected"<?}?>><?=$arParentSection['NAME']?></option>	
							<?}?>
						 </select>
					</div>
					<div class="col-md-12" id="result_model">
						<div class="title">
							 МОДЕЛЬ
						</div>
 						<select name="model" id="model" class="filter_select2" onchange="load_razdel_sub('/auto/'); return false;">
							<option value="1" <?if ($arParams['PARAMS']['MODEL']==1){?>selected="selected"<?}?>>Выберите модель</option>	
							<?foreach($model as $key=> $value){?>
								<option value="<?=$value['ID']?>" <?if ($arParams['PARAMS']['MODEL']==$value['ID']){?>selected="selected"<?}?>><?=$value['NAME']?></option>
							<?}?>
						</select>
					</div>
					<div class="col-md-12" id="result_razdel">
						<div class="title">
							 Раздел
						</div>
						<select name="razdel" id="razdel" class="filter_select2">
							<option value="1"  <?if ($arParams['PARAMS']['RAZDEL']==1){?>selected="selected"<?}?>>Выберите раздел</option>	
							<?foreach($razdel as $key=> $value){?>
								<option value="<?=$value['ID']?>" <?if ($arParams['PARAMS']['RAZDEL']==$value['ID']){?>selected="selected"<?}?>><?=$value['NAME']?></option>
							<?}?>
						</select>
					</div>
					<div class="col-md-12">
						<button type="submit" class="filter_sibmit"> <img src="/bitrix/templates/rbp/img/search2.png"> Поиск инструкций </button>
					</div>
				</form>	
				</div>
			</div>
		</div>
	</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>