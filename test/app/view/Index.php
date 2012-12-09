<?php
/**
 *  Index.php
 *
 *  @author     {$author}
 *  @package    Test
 *  @version    $Id$
 */

/**
 *  Index view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Test
 */
class Test_View_Index extends Test_ViewClass
{
	var $helper_action_form = array(
		'index_test' => null,
	);
    /**
     *  preprocess before forwarding.
     *
     *  @access public
     */
    function preforward()
    {
    }
}

?>
