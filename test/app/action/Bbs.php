<?php
require_once "/var/www/summer_homework/tmp/test/lib/Common/BootStrap.php";
/**
 *  Index/Test2.php
 *
 *  @author     {$author}
 *  @package    Test
 *  @version    $Id$
 */

/**
 *  index_test2 Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Test
 */
class Test_Form_Bbs extends Test_ActionForm
{
	var $form = array(
		'tag' => array(
			'name'      => 'contribution',
			'required'  => false,
			'max'       => 50,
			//'filter'    => FILTER_HW,
			//'custom'    => 'checkMailaddress',
			//'form_type' => FORM_TYPE_TEXT,
			'type'      => VAR_TYPE_STRING,
		),
		'description' => array(
			'name'      => 'contribution',
			'required'  => false,
			'max'       => 255,
			//'filter'    => FILTER_HW,
			//'custom'    => 'checkMailaddress',
			//'form_type' => FORM_TYPE_TEXT,
			'type'      => VAR_TYPE_STRING,
		),
	);

}


/**
 *  index_test2 action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Test
 */
class Test_Action_Bbs extends Test_ActionClass
{
    /**
     *  preprocess of index_test2 Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
    function prepare()
    {
		if(!$_SESSION["user_id"]){
			printf("session error");
			return 'bbs_form';
		}

		if ($this->af->validate() > 0) {
			print_r("error");
			return 'bbs_form';
		}
        return null;
    }

    /**
     *  index_test2 action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    function perform()
	{
		return "bbs";
	}
}

?>
