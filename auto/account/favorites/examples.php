<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Избранное");
?>


<?

$arFilter2 = array('IBLOCK_ID' => '47', 'ACTIVE'=>	'N');     
$rsSect2 = CIBlockElement::GetList(array("ID" => "DESC"),$arFilter2);
		$yt_api_key = "trnsl.1.1.20191209T060103Z.1e3ac3664bf5737e.90fd661406fcc5aa125007283a9de5d30ebaa958"; // Получить тут: https://tech.yandex.ru/keys/get/?service=trnsl
		#$yt_api_key = "trnsl.1.1.20191210T071556Z.b13b972b1da00fa1.33f7e05b4b5cfc126001d9b22f12d23f22b6fbdd"; // Получить тут: https://tech.yandex.ru/keys/get/?service=trnsl
		$yt_lang = "ru-en"; // Перевод с русского на английский
		$opts = array(
		  'http'=>array(
			'method'=>"POST",
			'header'=>"application/x-www-form-urlencoded"  
 		  )
		);
		$context = stream_context_create($opts);
		$i=1;
while ($arSection2 = $rsSect2->GetNext())
{
	if($i==8){
		break;
	}
	$i++;
	echo $PRODUCT_ID=$arSection2["ID"];
	#$url= CUtil::translit($arSection2["NAME"], "ru" , $params_url);
	#echo $dd = $arSection2["NAME"];
	#echo $dd2 = $arSection2["PREVIEW_TEXT"];
	#echo $dd3 = $arSection2["DETAIL_TEXT"];
	# перевод текста ------------------------------------------------------------------------------------------------------------------
  		/* $yt_text = urlencode($arSection2["NAME"]);
		$yt_link = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=".$yt_api_key."&text=".$yt_text."&lang=".$yt_lang;
		$result = file_get_contents($yt_link,false, $context); // получаем данные в JSON: {"code":200,"lang":"ru-en","text":["Sneakers basketball"]}
		$result = json_decode($result, true); // Преобразуем в массив
		echo $en_test = $result['text'][0]; // Sneakers basketball
		echo "<hr>";
	# перевод текста ------------------------------------------------------------------------------------------------------------------
		$yt_text2 = urlencode($arSection2["PREVIEW_TEXT"]);
		$yt_link2 = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=".$yt_api_key."&text=".$yt_text2."&lang=".$yt_lang;
		$result2 = file_get_contents($yt_link2,false, $context); // получаем данные в JSON: {"code":200,"lang":"ru-en","text":["Sneakers basketball"]}
		$result2 = json_decode($result2, true); // Преобразуем в массив
		  $en_test2 = $result2['text'][0]; // Sneakers basketball
		echo "<hr>"; */
	# перевод текста ------------------------------------------------------------------------------------------------------------------
		if($arSection2["DETAIL_TEXT"] !=""){
			unset($bigPiecesArray);
			unset($sentArray);
			unset($bigPiecesArray);
			
			$sentArray = explode(".", $arSection2["DETAIL_TEXT"]);
			$ij = 0;
			$bigPiecesArray[0] = '';
			for ($k = 0; $k < count($sentArray); $k++) {
				$bigPiecesArray[$ij] .= $sentArray[$k].".";
				if (strlen($bigPiecesArray[$ij]) > 1000){
					$ij++;
					$bigPiecesArray[$ij] = '';
				}
			}
			$yt_text3 = "";
			$yt_link3 = "";
			$result3 = "";
			$text_for_update = "";
			foreach($bigPiecesArray as $texts){
				$yt_text3 = urlencode($texts);
				$yt_link3 = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=".$yt_api_key."&text=".$yt_text3."&lang=".$yt_lang;
				$result3 = file_get_contents($yt_link3,false, $context); // получаем данные в JSON: {"code":200,"lang":"ru-en","text":["Sneakers basketball"]}
				$result3 = json_decode($result3, true);  // Преобразуем в массив
				$text_for_update .= $result3['text'][0];
			}
			
			/* $yt_link3 = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=".$yt_api_key."&text=".$yt_text3."&lang=".$yt_lang;
			$result3 = file_get_contents($yt_link3,false, $context); // получаем данные в JSON: {"code":200,"lang":"ru-en","text":["Sneakers basketball"]}
			$result3 = json_decode($result3, true); */ // Преобразуем в массив
			
			//  $en_test3 = $result3['text'][0]; // Sneakers basketball
			#echo $text_for_update;
			#echo "<hr>";
			# перевод текста ------------------------------------------------------------------------------------------------------------------
			#echo $dd3 = $arSection2["DETAIL_TEXT"];
			
			#echo $url2 = $url."_".$arSection2["IBLOCK_SECTION_ID"];
		//	echo $arParams["AUTHOR_ELEMENT"]['ID']=$arSection2["ID"];

			   $arLoadProductArray	 = Array(
				#"NAME"			=> $en_test,
				#"PREVIEW_TEXT"			=> $en_test2,
				"DETAIL_TEXT"			=> $text_for_update ,
				"ACTIVE"			=> 'Y' 
			);
			 $oElement = new CIBlockElement();
			if($text_for_update==""){
				
			}else{
				if($oElement->Update($PRODUCT_ID, $arLoadProductArray)){
					echo "12-";
				}
			}
		}
 

	echo "<br/>";
	#break;
}  

 error_reporting(E_ALL);
ini_set("display_errors", 1);