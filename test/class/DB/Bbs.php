<?php

//一言掲示板投稿酔用のDBを扱うとこ

class Bbs {

	function __construct() {
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

	function getCommmentByUserID($user_id){
		$r = array();
		$mysql = "SELECT * from OneLineCommentBoard where user_id=" . $user_id;
		$check = mysql_query($mysql);
		while($result = mysql_fetch_assoc($check)) {
			$r[] = $result;
		}
		if($r){
			return $r;
		}
		return false;
	}

	function InsertComment($user_id, $description, $tag = NULL){
		if(empty($user_id)) {
			throw new Exception('user_idがありません、ログインしなおしてください');
		}
		$mysql = "INSERT INTO OneLineCommentBoard (user_id, description, tag) VALUES('$user_id' , '$description', '$tag')";
		$result = mysql_query($mysql);
		if($result === false) {
			return false;
		}
		return true;
	}

	function DeleteOneContent($user_id, $id) {
		$mysql = "DELETE FROM OneLineCommentBoard where id=" . $id;
		mysql_query($mysql);
		return true;
	}
}

