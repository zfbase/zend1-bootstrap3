<?php
/**
 * Twitter Bootstrap v.3 Form for Zend Framework v.1
 * 
 * @category Forms
 * @package Twitter_Bootstrap3_Form
 * @subpackage Decorator
 * @author Ilya Serdyuk <ilya.serdyuk@youini.org>
 */

/**
 * Sets the class to its appropiate size
 * 
 * @category Forms
 * @package Twitter_Bootstrap3_Form
 * @subpackage Decorator
 */
class Twitter_Bootstrap3_Form_Decorator_FieldSize extends Zend_Form_Decorator_HtmlTag
{
    /**
     * Render container to appropiate size
     * 
     * @param type $content
     * @return type
     */
    public function render($content)
    {
        $element = $this->getElement();
        $class = $this->getOption('class');
        $dimension = $element->getAttrib('dimension');
        
        if (!empty($dimension)) {
            if (is_string($dimension)) {
                foreach (explode(',', $dimension) as $size) {
                    $class .= ' col-' . trim($size);
                }
            }
            
            $element->setAttrib('dimension', null);
        }
        
        $class = trim($class);
        if (!empty($class)) {
            $this->setOption('class', $class);
        } else {
            $this->removeOption('class');
        }
        
        
        $noAttribs = $this->getOption('noAttribs');
        if (!$noAttribs) {
            $attribs = $this->getOptions();
            if (count($attribs) > 0) {
                return parent::render($content);
            }
        }
        
        return $content;
    }
}
