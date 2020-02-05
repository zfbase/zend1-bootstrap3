<?php
/**
 * Twitter Bootstrap v.3 Form for Zend Framework v.1
 *
 * @category Forms
 * @package Twitter
 * @subpackage Bootstrap3
 * @author Bartosz Grzesiak <bartosz.grzesiak@gmail.com>
 */

/**
 * This is the base abstract form for the Twitter's Bootstrap UI
 *
 * @category Forms
 * @package Twitter
 * @subpackage Bootstrap3
 */
class Twitter_Bootstrap3_Form_SubForm extends Twitter_Bootstrap3_Form
{
    /**
     * Whether or not form elements are members of an array
     * @var bool
     */
    protected $_isArray = true;

    /**
     * Load the default decorators
     *
     * @return Zend_Form_SubForm
     */
    public function loadDefaultDecorators()
    {
        if ($this->loadDefaultDecoratorsIsDisabled()) {
            return $this;
        }

        $decorators = $this->getDecorators();
        if (empty($decorators)) {
            $this->addDecorator('FormElements')
                 ->addDecorator('HtmlTag', array('tag' => 'dl'))
                 ->addDecorator('Fieldset')
                 ->addDecorator('DtDdWrapper');
        }
        return $this;
    }
}
