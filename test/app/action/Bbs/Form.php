<?php
require_once "/var/www/summer_homework/tmp/test/lib/Common/BootStrap.php";
//require_once "/var/www/summer_homework/tmp/test/app/action/Index/Oauthsample3.php";
require_once "/var/www/summer_homework/tmp/test/DB/Mysql_GreeData.php";
//require_once "/var/www/summer_homework/tmp/test/app/action/Index/Lodin/login.php";
require_once "/var/www/summer_homework/tmp/test/lib/OAuth/OAuth_User.php";
/**
 *  Index/Test.php
 *
 *  @author     {$author}
 *  @package    Test
 *  @version    $Id$
 */

/**
 *  index_test Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Test
 */
class Test_Form_BbsForm extends Test_ActionForm
{

}

/**
 *  index_test action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Test
 */
class Test_Action_BbsForm extends Test_ActionClass
{
	function prepare()
    {
        return null;
    }
    function perform()
    {
		/*$data = user_data("user_friend");
		$data = user_data();

		$db = new DB_GreeData();
		$check = $db->CheckNameFromGreeId($data["entry"]["id"]);
		if(!$check){
			//あとでとうろくページ作る
			$insert_data = array(
				$data["entry"]["name"],
				$data["entry"]["id"],
				$data["entry"]["thumbnailUrlSmall"]
			);
			$db->InsertGreeData($insert_data);

			$insert_game_data = array(
				 $data["entry"]["id"],
				 $data["entry"]["name"],
				 "初心者"
			);
			$db->InsertUserStatus($insert_game_data);
			return 'index_test';

		}
		session_open($data["entry"]["id"]);
		*/

		$user_data = new Oauth();
		$data["entry"]["id"] = $user_data->User_parameter();
		session_start();
		$_SESSION["user_id"] = $data["entry"]["id"];
        return 'bbs_form';
    }
}

?>
