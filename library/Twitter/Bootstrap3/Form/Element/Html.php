<?php
/**
 * Twitter Bootstrap v.3 Form for Zend Framework v.1
 * 
 * @category Forms
 * @package Twitter_Bootstrap3_Form
 * @subpackage Element
 * @author Ilya Serdyuk <ilya.serdyuk@youini.org>
 */

/**
 * Email form element
 * 
 * @category Forms
 * @package Twitter_Bootstrap3_Form
 * @subpackage Element
 */
class Twitter_Bootstrap3_Form_Element_Html extends Zend_Form_Element_Xhtml
{

    public $helper='FormHtml';

    public function isValid($value){

        return true;
    }
}
