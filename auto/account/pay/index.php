<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мои группы");
?><?
	$user_id = $USER->GetID();
	$rsUser = CUser::GetByID($USER->GetParam('USER_ID'));
	$arUser = $rsUser->Fetch(); 
	$arGroups = CUser::GetUserGroup($user_id); 
?> <? 
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
								 <img src="/bitrix/templates/rbp/img/autor_yellow.png" alt="" class="autor_yellow">
								<?}else{?> 
								<a href="javascript:void(0);" class="autor_yellow">Стать автором</a> 
								<?}?>
								<div class="stars">
									 <img src="/bitrix/templates/rbp/img/yellow_star.png" alt=""> 
									 <img src="/bitrix/templates/rbp/img/yellow_star.png" alt=""> 
									 <img src="/bitrix/templates/rbp/img/yellow_star.png" alt=""> 
									 <img src="/bitrix/templates/rbp/img/yellow_star.png" alt=""> 
									 <img src="/bitrix/templates/rbp/img/gray_star.png" alt="">
								</div>
								 <?if($arUser['PERSONAL_CITY'] or $arUser['PERSONAL_COUNTRY']){?>
								<div class="location">
									 <?=$arUser['PERSONAL_CITY']?>, <?=GetCountryByID($arUser['PERSONAL_COUNTRY']);?>
								</div>
								 <?}?>
							</div>
						</div>
						<div class="col-md-7">
							<div class="pokazatel">
								<p class="count">53</p>
								<p class="title">Репутация</p>
								<img src="/bitrix/templates/rbp/img/reputation.png" alt="">
							</div>
							<div class="pokazatel">
								<p class="count">15</p>
								<p class="title">Ответов</p>
								<img src="/bitrix/templates/rbp/img/answers_red.png" alt="">
							</div>
							<div class="pokazatel">
								<p class="count"><?=$count_inst?></p>
								<p class="title">Инструкций</p>
								<img src="/bitrix/templates/rbp/img/instructions_red.png" alt="">
							</div>
							<div class="pokazatel">
								<p class="count">16</p>
								<p class="title">Группы</p>
								<img src="/bitrix/templates/rbp/img/groups_red.png" alt="">
							</div>
							<div class="pokazatel">
								<a href="/auto/account/edit/"><img alt="Личные данные" src="/bitrix/templates/rbp/img/edit.png" class="pokazatel_edit"></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 row_menu_akk">
							<ul class="menu_akk">
								<li><a href="/auto/account/">Мои инструкции</a></li>
								<li><a href="/auto/account/favorites/">Избранное</a></li>
								<li><a href="/auto/account/groups/">Мои группы</a></li>
								<li><a href="/auto/account/notifications/">Оповещения</a></li>
								<li class="active"><a href="/auto/account/pay/">Реклама</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 	<div class="container">
 	<div class="row">
<?
$MESS['DATA_INTEGRITY_CODE']		= 'Код проверки целостности данных - указан в настройках расширенного счета';

$MNT_TEST_MODE ="0";
$MNT_ID="11720319";
$MNT_TRANSACTION_ID="2727_741_1002658";
$MNT_AMOUNT="1.00";
$MNT_CURRENCY_CODE ="RUB";
$MNT_SUBSCRIBER_ID ="";
$pass="01d49eddc9cfb37d671bab75e8f0c620";
		$MNT_SUCCESS_URL ="https://rim3.ru/videopozdravlenie/order/2/success.php";

//$MNT_SIGNATURE = md5($MNT_ID . $MNT_TRANSACTION_ID . $MNT_AMOUNT . $MNT_CURRENCY_CODE . $MNT_SUBSCRIBER_ID. $MNT_TEST_MODE. $pass );
$MNT_SIGNATURE = md5($MNT_ID.$MNT_TRANSACTION_ID.$MNT_AMOUNT.$MNT_CURRENCY_CODE.$MNT_TEST_MODE.$pass);
/* 
MNT_SIGNATURE = MD5(MNT_ID + MNT_TRANSACTION_ID + MNT_AMOUNT + MNT_CURRENCY_CODE +
 MNT_SUBSCRIBER_ID + ТЕСТОВЫЙ РЕЖИМ + КОД ПРОВЕРКИ ЦЕЛОСТНОСТИ ДАННЫХ)
 */
 
 'https://www.payanyway.ru/assistant.htm?MNT_TEST_MODE='.$MNT_TEST_MODE.'&MNT_ID='.$MNT_ID.'&MNT_TRANSACTION_ID='.$MNT_TRANSACTION_ID.'&MNT_AMOUNT='.$MNT_AMOUNT.'&MNT_CURRENCY_CODE='.$MNT_CURRENCY_CODE.'&MNT_SIGNATURE='.$MNT_SIGNATURE.'&MNT_SUCCESS_URL='.$MNT_SUCCESS_URL.''; 
?>
<br/>
<br/>
<form method="post" action="https://www.payanyway.ru/assistant.htm" accept-charset="utf-8">
 <input type="hidden" name="MNT_ID" value="<?=$MNT_ID?>">
 <input type="hidden" name="MNT_TRANSACTION_ID" value="<?=$MNT_TRANSACTION_ID?>">
 <input type="hidden" name="MNT_CURRENCY_CODE" value="<?=$MNT_CURRENCY_CODE?>">
 <input type="hidden" name="MNT_AMOUNT" value="<?=$MNT_AMOUNT?>">
 	<input type="hidden" name="MNT_TEST_MODE" value="0">

 <input type="hidden" name="MNT_SIGNATURE" value="<?=$MNT_SIGNATURE?>"/>
 <input type="submit" value="Оплатить">
</form>
 </div>
 </div>
 
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>