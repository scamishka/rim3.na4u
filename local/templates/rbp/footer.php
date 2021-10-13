
<div class="container banners">
	<div class="row">
		<div class="col-md-5 text-center">
		<?$APPLICATION->IncludeComponent(
	"bitrix:advertising.banner", 
	"banner_bottom", 
	array(
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"NOINDEX" => "N",
		"QUANTITY" => "1",
		"TYPE" => "rbp_bottom",
		"COMPONENT_TEMPLATE" => "banner_bottom"
	),
	false
);?>
            
		</div>
		<div class="col-md-7 text-center">
		<?$APPLICATION->IncludeComponent(
			"bitrix:advertising.banner", 
			".default", 
			array(
				"CACHE_TIME" => "0",
				"CACHE_TYPE" => "A",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"NOINDEX" => "N",
				"QUANTITY" => "1",
				"TYPE" => "rbp_bottom_wide",
				"COMPONENT_TEMPLATE" => ".default"
			),
			false
		);?>
		</div>
	</div>
</div>
<br> 
<footer>
	<div class="modal">
		<input class="modal-open" id="modal-2" type="checkbox" hidden>
		<div class="modal-wrap" aria-hidden="true" role="dialog">
			<label class="modal-overlay" for="modal-2"></label>
			<div class="modal-dialog">
				<div class="modal-header">
					<h2>Форма в Модальное окно! :)</h2>
					<label class="btn-close" for="modal-2" aria-hidden="true">×</label>
				</div>
				<div class="modal-body">
					<form>
						<input name="name" placeholder="* Укажите ваше имя" class="textbox" required />
						<input name="emailaddress" placeholder="* Укажите ваш Email" class="textbox" type="email" required />
						<textarea rows="4" cols="50" name="subject" placeholder="* Введите ваше сообщение:" class="message" required></textarea>
						<input name="submit" class="btn btn-form" type="submit" value="Отправить" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid footer">
		<div class="row footer1">
			<div class="col-md-4 footer_video_item">
				<div class="footer_bg" id="footer1">
					<h4>1560</h4>
					<h5>загруженных инструкций</h5>
				</div>
			</div>

			<div class="col-md-4 footer_video_item">
				<div class="footer_bg" id="footer2">
					<h4>850</h4>
					<h5>доступных инструментов</h5>
				</div>
			</div>

			<div class="col-md-4 footer_video_item">
				<div class="footer_bg" id="footer3">
					<h4>952</h4>
					<h5>активных пользователей</h5>
				</div>
			</div>
		</div>
		<div class="row footer_video text-center">
			<div class="instructions">
				<div class="col-md-12">
					<div id="video_slider">
						<div style="text-align: center;" class="video sl">
							<iframe class="auto_pic" src="https://www.youtube.com/embed/3j41StI9zhI" frameborder="0" allowfullscreen></iframe>
						</div>
						<div style="text-align: center;" class="video sl">
							 <iframe class="auto_pic" src="https://www.youtube.com/embed/fZZEmokPCcQ" frameborder="0" allowfullscreen></iframe>
						</div>
						<div style="text-align: center;" class="video sl">
							 <iframe class="auto_pic" src="https://www.youtube.com/embed/1UfH5FAJiP4" frameborder="0" allowfullscreen></iframe>
						</div>
						<div style="text-align: center;" class="video sl">
							 <iframe class="auto_pic" src="https://www.youtube.com/embed/j5r_mqasp1Q" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
 			</div>
		</div>
		<?$APPLICATION->IncludeComponent(
			"bitrix:menu",
			"menu-rbp-bottom",
			Array(
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "rbp-bottom-menu",
				"COMPONENT_TEMPLATE" => "menu-rbp-bottom",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"DELAY" => "N",
				"MAX_LEVEL" => "1",
				"MENU_CACHE_GET_VARS" => array(),
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"ROOT_MENU_TYPE" => "rbp-bottom-menu",
				"USE_EXT" => "N"
			)
		);?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"EDIT_TEMPLATE" => "",
				"PATH" => "/inc_area/rbp/index_inc_copyright.php"
			)
		);?>
	</div>
</footer>
<style>
	#login_form .modal-body{
		padding: 0px;
	}
	#login_form .modal-content{
		border-radius:0px;
	}
	#login_form .modal-content{
		text-align:center;
	}
	#login_form .close_modal{
		display: block;
		text-align: center;
		margin-bottom: 10px;
	} 
</style>
<!-- Modal -->
<div class="modal fade" id="login_form" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
	<a class="close_modal" onclick="$('#login_form').modal('hide');"><img src="/bitrix/templates/rbp/img/close.png" alt="" id="close" ></a>
        <div class="modal-content">
            <div class="modal-body">
              <?$APPLICATION->IncludeComponent("bitrix:system.auth.authorize", "rbp_authbox", Array(
				"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
					"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
					"FORGOT_PASSWORD_URL" => "",	// Страница забытого пароля
					"PROFILE_URL" => "",	// Страница профиля
					"REGISTER_URL" => "",	// Страница регистрации
					"SHOW_ERRORS" => "N",	// Показывать ошибки
				),
				false
			);?>
            </div>
         </div>
    </div>
</div>
	<div class="hidden"></div>
	<!-- Mandatory for Responsive Bootstrap Toolkit to operate -->
	<div class="device-xs visible-xs"></div>
	<div class="device-sm visible-sm"></div>
	<div class="device-md visible-md"></div>
	<div class="device-lg visible-lg"></div>
	<!-- end mandatory -->
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter50372656 = new Ya.Metrika2({
						id:50372656,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true,
						webvisor:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/tag.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks2");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/50372656" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter51233308 = new Ya.Metrika2({
						id:51233308,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true,
						webvisor:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/tag.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks2");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/51233308" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
<?if($USER->GetID()!=2854 && $USER->GetID()!=4743 && $USER->GetID()!=4735 && $USER->GetID()!=6){?>	 

<?}?>
</body>
</html>