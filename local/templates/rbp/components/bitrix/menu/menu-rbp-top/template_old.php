<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
  
<?if (!empty($arResult)):?>
<div class="container-fluid redline">
	<div class="row">
		<div class="container">
			<div class="row">	
				<div class="col-md-1 col-sm-1 col-xs-1"></div>			
				<div class="col-md-8 col-sm-11 col-xs-11">
					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">
						<!-- Название сайта и кнопка раскрытия меню для мобильных -->
 						 <div class="navbar-header">
							 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							 <span class="sr-only">Toggle navigation</span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
							 </button>
						 </div>
						 <!-- Само сайт -->
						 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						 <ul class="navbar-nav topmenu">
							<?
							foreach($arResult as $arItem):
								if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
									continue;
							?>
								<?if($arItem["SELECTED"]):?>
									<li  class="selected active"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
								<?else:?>
									<li><a href="<?=$arItem["LINK"]?>" <?if($arItem["TEXT"]=="Инструменты"){?> target="_blank" <?}?>><?=$arItem["TEXT"]?></a></li>
								<?endif?>
							<?endforeach?>
						 </ul> 
						 </div><!-- /.navbar-collapse -->
						  </div><!-- /.container-fluid -->
						</nav>
				</div>
				<div class="col-md-3 middle  hidden-sm hidden-xs" style="text-align: right;">
 					<?if($USER->IsAuthorized()):?>
 						<a class="yellow_link" href="/auto/account/">Мой профиль</a>
						<a class="yellow_link" href="javascript:void(0);" type="submit" name="logout_butt" onClick="document.forms.auth_form.submit(); return false;">Выйти</a>
						<form action="<?=$arResult["AUTH_URL"]?>" name="auth_form">
						<?foreach ($arResult["GET"] as $key => $value):?>
							<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
						<?endforeach?>
							<input type="hidden" name="logout" value="yes" />
						</form>
 					<?else:?>
						<a class="yellow_link" href="/auto/auth/registration.php">Зарегистрироваться</a>
						<a class="yellow_link" href="#" onClick="getElementById('login_form').style.display = 'block';">Войти</a>
					<?endif?>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="login_form">
	<div class="overlay"></div>
	<div class="login_visible">
		<img src="<?=SITE_TEMPLATE_PATH?>/img/close.png" alt="" id="close" onClick="getElementById('login_form').style.display='none';">
		
		<?$APPLICATION->IncludeComponent("bitrix:system.auth.authorize", "rbp_authbox", Array(
			"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
				"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
				"FORGOT_PASSWORD_URL" => "/auto/auth/?forgot_password=yes",	// Страница забытого пароля
				"PROFILE_URL" => "/auto/account/edit/",	// Страница профиля
				"REGISTER_URL" => "/auto/auth/registration.php",	// Страница регистрации
				"SHOW_ERRORS" => "N",	// Показывать ошибки
			),
			false
		);?>
	</div>
</div>

<?endif?>