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
class Test_View_Bbs extends Test_ViewClass
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
		//書き込み
		$user_id = $_SESSION["user_id"];
		$tag = $this->af->get('tag');
		$description = $this->af->get('description');
		$db = new Bbs();
		if($description) {
			$db->InsertComment($user_id, $description, $tag);
		}

		//読み込み
		$content = $db->getCommmentByUserID($user_id);
		$this->af->setApp('user_id', $user_id);
		$this->af->setApp('content', $content);
    }
}

?>
