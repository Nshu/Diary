<?php
	var_dump($_POST["Dt"],$_POST["muscle"],$_POST["porno"],$_POST["mastur"]);
	
	$data_file="diary_data/diary.csv";/*データファイル*/

	$lines=file($data_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);/*diary_data.csvの中身を行単位で配列に格納*/
	$last_line=$lines[count($lines)-1];
	$org_words = preg_split("/,/", $last_line);/*最終行の文字列を,で区切って配列に*/

	$daily_words=[date("Y/m/d",time()),$_POST["Dt"],$_POST["muscle"],$_POST["porno"],$_POST["mastur"]];

	if($org_words[0]==date("Y/m/d",time())){
		$dataI=[0,1,$_POST["musI"],$_POST["porI"],$_POST["masI"]];
		foreach ($daily_words as $key => $value) {
			if((!$dataI[$key])or($value[$key])){
				$value[$key]=$org_words[$key];
			}
		}unset($value);
	}/*今日分のがすでに書き込まれている場合、*/

	$write_sentence=implode(",",$daily_words);/*追加する行*/
	str_replace($data_file, $last_line,$write_sentence."\r\n");

	print("<br><br>finish")
?>