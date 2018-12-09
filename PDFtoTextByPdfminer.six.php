<?php
/*
	Pdf which is made by pdf24-printer has character trouble in unicode.
 */

$filename=''; //write PDF file name

$outary=array();
$state="";
exec('python /var/www/html/php/textByPdfminer.py '.$filename.' 2>&1',$outary,$state); //change dir as your env.

//replace 
$codeary=array(
	array(6655,'擦'),
	array(13311,'速'),
	array(16602,'λ'),
	array(16603,'μ'),
	
	array(18104,'、'),
	array(18105,'。'),
	
	array(18130,'あ'),
	array(18131,'ぃ'),
	array(18132,'い'),
	array(18133,'ぅ'),
	array(18134,'う'),
	array(18135,'ぇ'),
	array(18136,'え'),
	array(18137,'ぉ'),
	array(18138,'お'),
	array(18139,'か'),
	array(18140,'が'),
	array(18141,'き'),
	array(18142,'ぎ'),
	array(18143,'く'),
	array(18144,'ぐ'),
	array(18145,'け'),
	array(18146,'げ'),
	array(18147,'こ'),
	array(18148,'ご'),
	array(18149,'さ'),
	array(18150,'ざ'),
	array(18151,'し'),
	array(18152,'じ'),
	array(18153,'す'),
	array(18154,'ず'),
	array(18155,'せ'),
	array(18156,'ぜ'),
	array(18157,'そ'),
	array(18158,'ぞ'),
	array(18159,'た'),
	array(18160,'だ'),
	array(18161,'ち'),
	array(18162,'ぢ'),
	array(18163,'っ'),
	array(18164,'つ'),
	array(18165,'づ'),
	array(18166,'て'),
	array(18167,'で'),
	array(18168,'と'),
	array(18169,'ど'),
	array(18170,'な'),
	array(18171,'に'),
	array(18172,'ぬ'),
	array(18173,'ね'),
	array(18174,'の'),
	array(18175,'は'),
	array(18176,'ば'),
	array(18177,'ぱ'),
	array(18178,'ひ'),
	array(18179,'び'),
	array(18180,'ぴ'),
	array(18181,'ふ'),
	array(18182,'ぶ'),
	array(18183,'ぷ'),
	array(18184,'へ'),
	array(18185,'べ'),
	array(18186,'ぺ'),
	array(18187,'ほ'),
	array(18188,'ぼ'),
	array(18189,'ぽ'),
	array(18190,'ま'),
	array(18191,'み'),
	array(18192,'む'),
	array(18193,'め'),
	array(18194,'も'),
	array(18195,'ゃ'),
	array(18196,'や'),
	array(18197,'ゅ'),
	array(18198,'ゆ'),
	array(18199,'ょ'),
	array(18200,'よ'),
	array(18201,'ら'),
	array(18202,'り'),
	array(18203,'る'),
	array(18204,'れ'),
	array(18205,'ろ'),
	array(18206,'ゎ'),
	array(18207,'わ'),
	array(18208,'ゐ'),
	array(18209,'ゑ'),
	array(18210,'を'),
	array(18211,'ん'),
	
	array(18223,'ァ'),
	array(18224,'ア'),
	array(18225,'ィ'),
	array(18226,'イ'),
	array(18227,'ゥ'),
	array(18228,'ウ'),
	array(18229,'ェ'),
	array(18230,'エ'),
	array(18231,'ォ'),
	array(18232,'オ'),
	array(18233,'カ'),
	array(18234,'ガ'),
	array(18235,'キ'),
	array(18236,'ギ'),
	array(18237,'ク'),
	array(18238,'グ'),
	array(18239,'ケ'),
	array(18240,'ゲ'),
	array(18241,'コ'),
	array(18242,'ゴ'),
	array(18243,'サ'),
	array(18244,'ザ'),
	array(18245,'シ'),
	array(18246,'ジ'),
	array(18247,'ス'),
	array(18248,'ズ'),
	array(18249,'セ'),
	array(18250,'ゼ'),
	array(18251,'ソ'),
	array(18252,'ゾ'),
	array(18253,'タ'),
	array(18254,'ダ'),
	array(18255,'チ'),
	array(18256,'ヂ'),
	array(18257,'ッ'),
	array(18258,'ツ'),
	array(18259,'ヅ'),
	array(18260,'テ'),
	array(18261,'デ'),
	array(18262,'ト'),
	array(18263,'ド'),
	array(18264,'ナ'),
	array(18265,'ニ'),
	array(18266,'ヌ'),
	array(18267,'ネ'),
	array(18268,'ノ'),
	array(18269,'ハ'),
	array(18270,'バ'),
	array(18271,'パ'),
	array(18272,'ヒ'),
	array(18273,'ビ'),
	array(18274,'ピ'),
	array(18275,'フ'),
	array(18276,'ブ'),
	array(18277,'プ'),
	array(18278,'ヘ'),
	array(18279,'ベ'),
	array(18280,'ペ'),
	array(18281,'ホ'),
	array(18282,'ボ'),
	array(18283,'ポ'),
	array(18284,'マ'),
	array(18285,'ミ'),
	array(18286,'ム'),
	array(18287,'メ'),
	array(18288,'モ'),
	array(18289,'ャ'),
	array(18290,'ヤ'),
	array(18291,'ュ'),
	array(18292,'ユ'),
	array(18293,'ョ'),
	array(18294,'ヨ'),
	array(18295,'ラ'),
	array(18296,'リ'),
	array(18297,'ル'),
	array(18298,'レ'),
	array(18299,'ロ'),
	array(18300,'ヮ'),
	array(18301,'ワ'),
	array(18302,'ヰ'),
	array(18303,'ヱ'),
	array(18304,'ヲ'),
	array(18305,'ン'),
	array(18306,'ヴ'),
	array(18307,'ヵ'),
	array(18308,'ヶ'),
	
	array(18313,'・'),
	array(18314,'ー'),
	
	array(18436,'（'),
	array(18437,'）'),
	
	array(18445,'１'),
	array(18446,'２'),
	array(18447,'３'),
	array(18448,'４'),
	array(18449,'５'),
	array(18450,'６'),
	array(18451,'７'),
	array(18452,'８'),
	array(18453,'９'),
	
	array(18461,'Ａ'),
	array(18462,'Ｂ'),
	array(18463,'Ｃ'),
	array(18464,'Ｄ'),
	array(18465,'Ｅ'),
	array(18466,'Ｆ'),
	array(18467,'Ｇ'),
	array(18468,'Ｈ'),
	array(18469,'Ｉ'),
	array(18470,'Ｊ'),
	array(18471,'Ｋ'),
	array(18472,'Ｌ'),
	array(18473,'Ｍ'),
	array(18474,'Ｎ'),
	array(18475,'Ｏ'),
	array(18476,'Ｐ'),
	array(18477,'Ｑ'),
	array(18478,'Ｒ'),
	array(18479,'Ｓ'),
	array(18480,'Ｔ'),
	array(18481,'Ｕ'),
	array(18482,'Ｖ'),
	array(18483,'Ｗ'),
	array(18484,'Ｘ'),
	array(18485,'Ｙ'),
	array(18486,'Ｚ'),

);	
	foreach($outary as $output)
	{
		foreach($codeary as $code)
		{
			$output=str_replace('(cid:'.$code[0].')',$code[1],$output);
		}

		echo $output."";
	}

?>
