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
 * Render warning messages
 * 
 * Any options passed will be used as HTML attributes of the ul tag for the warnings.
 * 
 * @category Forms
 * @package Twitter_Bootstrap3_Form
 * @subpackage Decorator
 */
class Twitter_Bootstrap3_Form_Decorator_Warnings extends Zend_Form_Decorator_Abstract
{
    /**
     * Render warning
     *
     * @param  string $content
     * @return string
     */
    public function render($content)
    {
        $element = $this->getElement();
        $view    = $element->getView();
        if (null === $view) {
            return $content;
        }

        // Get warning messages
        $warnings = $element->getAttrib('warning');

        if (empty($warnings)) {
            return $content;
        }

        $separator = $this->getSeparator();
        $placement = $this->getPlacement();
        $warnings  = $view->formErrors($warnings, $this->getOptions());

        switch ($placement) {
            case self::APPEND:
                return $content . $separator . $warnings;
            case self::PREPEND:
                return $warnings . $separator . $content;
        }
    }
}
