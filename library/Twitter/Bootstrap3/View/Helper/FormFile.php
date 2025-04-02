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
 * Helper to generate a "text" element
 * 
 * @category Forms
 * @package Twitter_Bootstrap3_View
 * @subpackage Helper
 */
class Twitter_Bootstrap3_View_Helper_FormFile extends Zend_View_Helper_FormFile
{
	
	public function formFile($name, $attribs = null) {
		$info = $this->_getInfo($name, null, $attribs);
		extract($info); // name, id, value, attribs, options, listsep, disable
	
		// is it disabled?
		$disabled = '';
		if ($disable) {
			$disabled = ' disabled="disabled"';
		}
	
		$buttonText = (isset($attribs['btnText']) && !empty($attribs['btnText'])) ? $attribs['btnText'] : 'Upload file';
	
		// build the element
		$xhtml = '<div class="spacer"></div>'
			. '<div class="input-group">'
			. '<span class="input-group-btn">'
			. '<span class="btn btn-primary btn-file">'
			. $buttonText
			. '<input type="file"'
			. ' name="' . $this->view->escape($name) . '"'
			. ' id="' . $this->view->escape($id) . '"'
			. $disabled
			. $this->_htmlAttribs($attribs)
			. $this->getClosingBracket()
			. '</span>'
			. '</span>'
			. '<input type="text" class="form-control" readonly>'
			. '</div>';

		return $xhtml;
	}
}
