<?php
/**
 * Twitter Bootstrap v.3 Form for Zend Framework v.1
 * 
 * @category Forms
 * @package Twitter_Bootstrap3_View
 * @subpackage Helper
 * @author Ilya Serdyuk <ilya.serdyuk@youini.org>
 */

/**
 * 
 * @category Forms
 * @package Twitter_Bootstrap3_View
 * @subpackage Helper
 */
class Twitter_Bootstrap3_View_Helper_FormHtml extends Zend_View_Helper_FormElement {

        public function FormHtml($name, $value = null, $attribs = null) {
            $info = $this->_getInfo($name, $value, $attribs);
            extract($info); // name, value, attribs, options, listsep, disable
            if (null === $value) {$value = $name;}

            return $value;
          }

    }
