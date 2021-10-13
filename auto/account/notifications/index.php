<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мои уведомления");
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
										<!--<a href="javascript:void(0);" class="autor_yellow" onclick="Сreate_author(<?=$user_id?>); return false;">Стать автором</a>	-->
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
								<li><a href="/auto/account/favorites/">Избранное</a></li>
								<li><a href="/auto/account/groups/">Мои группы</a></li>
								<li  class="active"><a href="/auto/account/notifications/">Оповещения</a></li>								
								<li><a href="/auto/account/pay/">Реклама</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<?
$user_id = $USER->GetID();
$GLOBALS['arrAuthorName'] = array("CREATED_BY"=>$user_id,"ACTIVE"=>"");
?>
<?
	if($_POST['razdel']){	
		$_SESSION['PARAM']['marka'] 	= $_POST['marka']; 
		$_SESSION['PARAM']['model']	= $_POST['model'] ; 
		$_SESSION['PARAM']['razdel'] = $_POST['razdel']; 
	}
 	if(isset($_SESSION['PARAM']['razdel']) and $_SESSION['PARAM']['razdel']>1){ 
		$GLOBALS['arrAuthorName'] = array("SECTION_ID" => $_SESSION['PARAM']['razdel'],"CREATED_BY"=>$user_id,"ACTIVE"=>"" );		
	}
?>
<div class="container">
<div class="row models">
	<div class="col-md-7">
		<img class="models_logo" src="/bitrix/templates/rbp/img/noti.png" alt="">
		<h2 class="models_title">Уведомления</h2>
	</div>
	<div class="col-md-5">
		<div style="float:right;">
 			<a href="/auto/account/notifications/settings/"><img class="img_forum" src="/bitrix/templates/rbp/img/settings.png" alt=""></a>
		</div>
	</div>
</div>
</div>
<br/><br/>
<div class="container">
	<div class="row notifications">
		<?$APPLICATION->IncludeComponent(
			"rim3:notification.list",
			"",
		Array(), 
		false
		);?><br>
	</div>
</div>
<?

?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>