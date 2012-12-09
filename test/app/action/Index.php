<?php
/**
 *  Index.php
 *
 *  @author    {$author}
 *  @package   Test
 *  @version   $Id$
 */

/**
 *  Index form implementation
 *
 *  @author    {$author}
 *  @access    public
 *  @package   Test
 */

class Test_Form_Index extends Test_ActionForm
{
    /**
     *  @access   private
     *  @var      array   form definition.
     */
    var $form = array(
        ), 
    );

    function _filter_sample($value)
    {
	//  convert to upper case.
        return strtoupper($value);
    }
    */
}

class Test_Action_Index extends Test_ActionClass
{
    function prepare()
    {
        /**
        if ($this->af->validate() > 0) {
            return 'error';
        }
        $sample = $this->af->get('sample');
        */
        return null;
    }

    function perform()
    {
        return 'form';
    }
}

?>
