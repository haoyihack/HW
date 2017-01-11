<?
	echo "SQL測試";
	$db_account = "localhost/phpmyadmin";
	$db_account = "root";
	$db_password = "wu011205";
	$conn = @mysql_connect($db_host,$db_account,$db_password)or die("連線錯誤");
	if($conn){
		echo "資料庫連線成功";
	}else{
		echo "資料庫連線失敗";
	}
	mysql_close($conn);
?>