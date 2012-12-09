<?php
/**
 *  Index/Test2.php
 *
 *  @author     {$author}
 *  @package    Test
 *  @version    $Id$
 */

/**
 *  index_test2 view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Test
 */
class Test_View_BbsDelete extends Test_ViewClass
{
	/*var $helper_action_form = array(
		'' => null,
	);*/
    /**
     *  preprocess before forwarding.
     *
     *  @access public
     */
    function preforward()
    {
		//削除
		$user_id = $_SESSION["user_id"];
		$id = $this->af->get('id');
		$db = new Bbs();
		
		$db->DeleteOneContent($user_id, $id);

		//読み込み
		$content = $db->getCommmentByUserID($user_id);
		$this->af->setApp('user_id', $user_id);
		$this->af->setApp('content', $content);

		return 'bbs';
    }
}

?>
