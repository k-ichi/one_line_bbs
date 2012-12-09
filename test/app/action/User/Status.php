<?php
require_once "/var/www/summer_homework/tmp/test/DB/Mysql_GreeData.php";
/**
 *  User/Status.php
 *
 *  @author     {$author}
 *  @package    Test
 *  @version    $Id$
 */

/**
 *  user_status Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Test
 */
class Test_Form_UserStatus extends Test_ActionForm
{
    /**
     *  @access private
     *  @var    array   form definition.
     */
    var $form = array(
       /*
        *  TODO: Write form definition which this action uses.
        *  @see http://ethna.jp/ethna-document-dev_guide-form.html
        *
        *  Example(You can omit all elements except for "type" one) :
        *
        *  'sample' => array(
        *      // Form definition
        *      'type'        => VAR_TYPE_INT,    // Input type
        *      'form_type'   => FORM_TYPE_TEXT,  // Form type
        *      'name'        => 'Sample',        // Display name
        *  
        *      //  Validator (executes Validator by written order.)
        *      'required'    => true,            // Required Option(true/false)
        *      'min'         => null,            // Minimum value
        *      'max'         => null,            // Maximum value
        *      'regexp'      => null,            // String by Regexp
        *      'mbregexp'    => null,            // Multibype string by Regexp
        *      'mbregexp_encoding' => 'UTF-8',   // Matching encoding when using mbregexp 
        *
        *      //  Filter
        *      'filter'      => 'sample',        // Optional Input filter to convert input
        *      'custom'      => null,            // Optional method name which
        *                                        // is defined in this(parent) class.
        *  ),
        */
    );

    /**
     *  Form input value convert filter : sample
     *
     *  @access protected
     *  @param  mixed   $value  Form Input Value
     *  @return mixed           Converted result.
     */
    /*
    function _filter_sample($value)
    {
        //  convert to upper case.
        return strtoupper($value);
    }
    */
}

/**
 *  user_status action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Test
 */
class Test_Action_UserStatus extends Test_ActionClass
{
    /**
     *  preprocess of user_status Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
    function prepare()
    {
        return null;
    }

    function perform()
    {
		$db = new DB_GreeData();
		var_dump($_SESSION["user_id"]);
		$user_status = $db->GetUserStatusFromUserId($_SESSION["user_id"]);
		$this->af->setApp('user_status',$user_status);
        return 'user_status';
    }
}

?>
