<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="form.js"></script>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="normalize.css">
  <title>Diary</title>
</head>

<body>
	<h1>Dialy</h1>
	<form action="write.php" method="post">
	  <p>
      DailyTask:<input type="radio" name="Dt">0&nbsp;<input type="radio" name="Dt">1
	  </p>
	  <p>
	    Muscle:<input type="time" name="muscle"><input type="checkbox" name="musI">
	  </p>
	  <p>
	    porno:<input type="number" name="porno"><input type="checkbox" name="porI">
	  </p>
	  <p>
	    masturvation:<input type="number" name="mastur"><input type="checkbox" name="masI">
	  </p>
	  <p>
	   <input type="submit" value="送信" name="update">
	  </p>
	</form>
	<?php
  	$lines=file("diary_data/diary_test.csv", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		$datas = preg_split("/,/", $lines[count($lines)-1]);
		if($datas[0]==date("Y/m/d",time())){
			print($lines[count($lines)-1]);
		}/*今日分のデータがすでに存在する場合は表示*/
	?>
	
</body>

</html>