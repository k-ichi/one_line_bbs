<?php

class DB_Greedata {

	function DB_GreeData() {
		$server = "localhost";
		$usr = "root";
		$pass = "skpass";
		$mydb = "test20120914";

		$connectDB = mysql_connect($server, $usr, $pass);

		if(!$connectDB) {
			throw new Exception('接続失敗');
		}

		$db = mysql_select_db($mydb, $connectDB);
		
		if(!$db) {
			throw new Exception('テーブルがありません');
		}
	}

	function GetUserStatusFromUserId($user_id){
		$mysql = "select * from user_status where id=" . $user_id;
		$check = mysql_query($mysql);
		$result = mysql_fetch_assoc($check);
		if($result){
			return $result;
		}
		return false;
	}

	function InsertUserStatus($insert_data){
		$mysql = "insert into user_status values ($insert_data[0],$insert_data[1],$insert_data[2],1,3,1,1,1,1,0,0,5)";
		mysql_query($mysql);
		return null;
	}
	/*$result = mysql_query($get_name);
	$row = mysql_fetch_assoc($result);*/
}
