<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="container-fluid redline">
	<div class="row">
		<div class="container">
			<div class="row">	
				<div class="col-md-1"></div>			
				<div class="col-md-7">
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
				<div class="col-md-4  hidden-sm hidden-xs" style="text-align: right;">
 					<?if($USER->IsAuthorized()):?>
					<div class="account_link">
						<a class="user_link" id="user_link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/account.png"/>
							<span><?=$USER->GetFirstName()?> <?=$USER->GetLastName()?></span>
						</a>
						<div class="account-block-fly dropdown-menu" aria-labelledby="user_link">
							<ul class="items">
								<li>
									<a href="/auto/account/">Мой профиль</a>
								</li>
								<li>
									<a href="/auto/account/edit/">Редактировать</a>
								</li>
								<li>
									<a class="author" href="/auto/avtory/stat-avtorom/">Стать автором</a>
								</li>
								<li>
									<a onClick="document.forms.auth_form.submit(); return false;">Выйти</a>
								</li>
  							</ul>
						</div>
					</div>
					<div class="cart_link-block">
						<a class="cart_link"></a>
					</div>
					<?$APPLICATION->IncludeComponent(
						"rim3:notification.list.head",
						"",
					Array(), 
					false
					);?><br>
					<!--------------------Надо создать компонент уведомление и поставить эти функции внутри этого компонента------------------------------>
						<form action="<?=$arResult["AUTH_URL"]?>" name="auth_form">
						<?foreach ($arResult["GET"] as $key => $value):?>
							<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
						<?endforeach?>
							<input type="hidden" name="logout" value="yes" />
						</form>
 					<?else:?>
						<br/>
						<a class="yellow_link" href="/auto/auth/registration.php">Зарегистрироваться</a>
						<a class="yellow_link" onClick="$('#login_form').modal('show');">Войти</a>
					<?endif?>
				</div>
			</div>
		</div>
	</div>
</div>
<?endif?>