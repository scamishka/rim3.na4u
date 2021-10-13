<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if($_REQUEST['user_id']>0){
$id 			= intval($_REQUEST['id']);
$user_id 		= intval($_REQUEST['user_id']);
$pass 			= $_REQUEST['pass'];
$url 			= $_REQUEST['url'];
$pass_current	= "01d49eddc9cfb37d671bab75e8f0c620";
$pass_succes 	= md5($pass_current.$user_id);
	if($pass==$pass_succes){
		// значить заплатить и можно ему статус в подписке поменять на оплачен
		// и перенаправить на страницу где он ранее смотрел
		global $DB;
		$sql="UPDATE a_podpiska SET oplata='Y' WHERE user_id=".$user_id." and id=".$id;
		$result = $DB->Query($sql);
		if($result){
			header('Location:'.$url);
		}else{
			header('Location:'.$url);
		}
	}
}
?>