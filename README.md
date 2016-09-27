#Twitter Bootstrap 3 Form for Zend Framework 1 extended

This library was originally created by @zfbase and forked by @wendrowycz
This is an extended version, adding an HTML element, inline form option with labels, form-group class option and more.

## Form types

The library supports all Bootstrap 3 form types.

### One PHP code
```php
class Application_Form_Example extends Twitter_Bootstrap3_Form_*
{
    public function init()
    {
        $email = new Twitter_Bootstrap3_Form_Element_Email('email');
        $email->setLabel('Email')->setAttrib('placeholder', 'Email');

        $password = new Zend_Form_Element_Password('password');
        $password->setLabel('Password')->setAttrib('placeholder', 'Password');

        $checkbox = new Zend_Form_Element_Checkbox('checkbox');
        $checkbox->setLabel('Remember me');

        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setLabel('Sign in');

        $this->addElements(array(
            $email,
            $password,
            $checkbox,
            $submit

        ));
    }
}
```
#### OR

```php
class Application_Form_Example extends Twitter_Bootstrap3_Form_*
{
    public function init()
    {
        $this->addElement('email', 'email', array(
            'label' => 'Email',
            'placeholder' => 'Email',
        ));
        
        $this->addElement('password', 'password', array(
            'label' => 'Password',
            'placeholder' => 'Password',
        ));
        
        $this->addElement('checkbox', 'checkbox', array(
            'label' => 'Remember me',
        ));
        
        $this->addElement('submit', 'submit', array(
            'label' => 'Sign in',
        ));
    }
}
```

### HTML generated for vertical form

The form must be inherited from class `Twitter_Bootstrap3_Form_Vertical`.

```html
<form enctype="application/x-www-form-urlencoded" class="form-vertical" action="" method="post">
    <div class="form-group">
        <label for="email" class="control-label optional">Email</label>
        <input type="email" name="email" id="email" value="" placeholder="Email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password" class="control-label optional">Password</label>
        <input type="password" name="password" id="password" value="" placeholder="Password" class="form-control">
    </div>
    <div class="form-group">
        <div class="checkbox">
            <label>
            <input type="hidden" name="checkbox" value="0">
            <input type="checkbox" name="checkbox" id="checkbox" value="1">
            Remember me
            </label>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" id="submit" value="Sign in" class="btn btn-primary">
    </div>
</form>
```

### HTML generated for horizontal form

The form must be inherited from class `Twitter_Bootstrap3_Form_Horizontal`.

```html
<form enctype="application/x-www-form-urlencoded" class="form-horizontal" action="" method="post">
    <div class="form-group">
        <label for="email" class="optional control-label col-sm-2">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" id="email" value="" placeholder="Email" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="optional control-label col-sm-2">Password</label>
        <div class="col-sm-10">
            <input type="password" name="password" id="password" value="" placeholder="Password" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <div class="checkbox">
                <label>
                    <input type="hidden" name="checkbox" value="0">
                    <input type="checkbox" name="checkbox" id="checkbox" value="1">
                    Remember me
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input type="submit" name="submit" id="submit" value="Sign in" class="btn btn-primary">
        </div>
    </div>
</form>
```

### HTML generated for inline form

The form must be inherited from class `Twitter_Bootstrap3_Form_Inline`.

```html
<form enctype="application/x-www-form-urlencoded" class="form-inline" action="" method="post">
    <div class="form-group">
        <label for="email" class="sr-only optional">Email</label>
        <input type="email" name="email" id="email" value="" placeholder="Email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password" class="sr-only optional">Password</label>
        <input type="password" name="password" id="password" value="" placeholder="Password" class="form-control">
    </div>
    <div class="form-group">
        <div class="checkbox">
            <label>
                <input type="hidden" name="checkbox" value="0">
                <input type="checkbox" name="checkbox" id="checkbox" value="1">
                Remember me
            </label>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" id="submit" value="Sign in" class="btn btn-primary">
    </div>
</form>
```

To use inlineforms with labels you can use the class `Twitter_Bootstrap3_Form_Inlinelabel`.

If you are using inline forms, the dimensions will not be set of course. If you need dimensions, you can add them using the attribute formgroupclass like this:

```php

		$count = new Twitter_Bootstrap3_Form_Element_Number('count');
		$count->setAttrib('formgroupclass','col-xs-6');

```

This will give you the following output:

```html
    <div class="form-group col-xs-6">
        <input type="number" name="count" id="count" value="" class="form-control">
    </div>
```


## Supported controls

The library supports all Zend Framework 1 and Bootstrap 3 form elementes.

All example present for vertical form.

### Inputs

Most common form control, text-based input fields. Includes support for all HTML5 types: `text`, `password`, `datetime`, `datetime-local`, `date`, `month`, `time`, `week`, `number`, `email`, `url`, `search`, `tel`, and `color`.

```html
<div class="form-group">
    <label for="text" class="control-label optional">Text</label>
    <input type="text" name="text" id="text" value="" class="form-control" placeholder="Text input">
</div>
```

```php
$this->addElement('text', 'text', array(
    'label' => 'Text',
    'placeholder' => 'Text input',
));
```

### Textarea

```html
<div class="form-group">
    <label for="textarea" class="control-label optional">Textarea</label>
    <textarea name="textarea" id="textarea" rows="4" class="form-control" cols="80">Textarea</textarea>
</div>
```

```php
$this->addElement('textarea', 'textarea', array(
    'label' => 'Textarea',
    'value' => 'Textarea',
    'rows' => 4,
));
```

### Checkboxes and radios

#### One checkbox

```html
<div class="form-group">
    <div class="checkbox">
        <label>
            <input type="hidden" name="checkbox1" value="unchecked Value">
            <input type="checkbox" name="checkbox1" id="checkbox" value="checked Value">
            Checkbox
        </label>
    </div>
</div>
```

```php
$this->addElement('checkbox', 'checkbox', array(
    'label' => 'Checkbox',
    'checkedValue' => 'checked Value',
    'uncheckedValue' => 'unchecked Value',
));
```

#### MultiCheckbox

```html
<div class="form-group">
    <div class="checkbox">
        <label>
            <input type="checkbox" name="multiCheckbox[]" id="multiCheckbox-option1" value="option1">
            Option one is this and that — be sure to include why it's great
        </label>
    </div>
    <div class="checkbox disabled">
        <label>
            <input type="checkbox" name="multiCheckbox[]" id="multiCheckbox-option2" value="option2" disabled="disabled">
            Option two is disabled
        </label>
    </div>
</div>
```

```php
$this->addElement('multiCheckbox', 'multiCheckbox', array(
    'multiOptions' => array(
        'option1' => 'Option one is this and that &mdash; be sure to include why it\'s great',
        'option2' => 'Option two is disabled',
    ),
    'disable' => array('option2'),
    'escape' => false,
)); 
```

#### Radios

```html
<div class="form-group">
    <label for="radio" class="control-label optional">Radio</label>
    <div class="radio">
        <label>
            <input type="radio" name="radio" id="radio-option1" value="option1" checked="checked">
            Option one is this and that — be sure to include why it's great
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="radio" id="radio-option2" value="option2">
            Option two can be something else and selecting it will deselect option one
        </label>
    </div>
    <div class="radio disabled">
        <label>
            <input type="radio" name="radio" id="radio-option3" value="option3" disabled="disabled">
            Option three is disabled
        </label>
    </div>
</div>
```

```php
$this->addElement('radio', 'radio', array(
    'multiOptions' => array(
        'option1' => 'Option one is this and that &mdash; be sure to include why it\'s great',
        'option2' => 'Option two can be something else and selecting it will deselect option one',
        'option3' => 'Option three is disabled',
    ),
    'label' => 'Radio',
    'value' => 'option1',
    'disable' => array('option3'),
    'escape' => false,
));
```

#### Inline multicheckbox and radio

```html
<div class="form-group">
    <label class="checkbox-inline">
        <input type="checkbox" name="checkbox[]" id="checkbox-1" value="1">One
    </label>
    <label class="checkbox-inline">
        <input type="checkbox" name="checkbox[]" id="checkbox-2" value="2">Two
    </label>
</div>
<div class="form-group">
    <label class="radio-inline">
        <input type="radio" name="radio" id="radio-1" value="1">One
    </label>
    <label class="radio-inline">
        <input type="radio" name="radio" id="radio-2" value="2">Two
    </label>
</div>
```

```php
$this->addElement('multiCheckbox', 'checkbox', array(
    'multiOptions' => array(
        '1' => 'One',
        '2' => 'Two',
    ),
    'inline' => true,
));

$this->addElement('radio', 'radio', array(
    'multiOptions' => array(
        '1' => 'One',
        '2' => 'Two',
    ),
    'inline' => true,
));
```

### Selects

#### One value

```html
<div class="form-group">
    <label for="select" class="control-label optional">Select</label>
    <select name="select" id="select" class="form-control">
        <option value="1">one</option>
        <option value="2">two</option>
        <option value="3">three</option>
    </select>
</div>
```

```php
$this->addElement('select', 'select', array(
    'label' => 'Select',
    'multiOptions' => array(
        1 => 'one',
        2 => 'two',
        3 => 'three',
    ),
));
```

#### Multiple

```html
<div class="form-group">
    <label for="multiselect" class="control-label optional">MultiSelect</label>
    <select name="multiselect[]" id="multiselect" multiple="multiple" class="form-control">
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select>
</div>
```

```php
$this->addElement('multiselect', 'multiselect', array(
    'label' => 'MultiSelect', 
    'multiOptions' => array(
        1 => 'January',
        2 => 'February',
        3 => 'March',
        4 => 'April',
        5 => 'May',
        6 => 'June',
        7 => 'July',
        8 => 'August',
        9 => 'September',
        10 => 'October',
        11 => 'November',
        12 => 'December',
    ),
)); 
```

### Buttons

Includes support for button types: `button`, `submit`, `reset` and `image`.

```html
<div class="form-group">
    <button name="button" id="button" type="button" class="btn btn-default">button</button>
</div>
<div class="form-group">
    <input type="submit" name="submit" id="submit" value="submit" class="btn btn-primary">
</div>
<div class="form-group">
    <input type="reset" name="reset" id="reset" value="reset" class="btn btn-default">
</div>
<div class="form-group">
    <input type="image" name="image" id="image" src="/button.png" alt="">
</div>
```

```php
$this->addElement('button', 'button', array(
    'label' => 'button',
)); 

$this->addElement('submit', 'submit', array(
    'label' => 'submit',
)); 

$this->addElement('reset', 'reset', array(
    'label' => 'reset',
)); 

$this->addElement('image', 'image', array(
    'src' => '/button.png',
));
```

### Simple text

Element `static` is an alias of element `note`.

```html
<div class="form-group">
    <label for="static" class="control-label optional">Static</label>
    <p id="static" class="form-control-static">Static</p>
</div>
```

```php
$this->addElement('static', 'static', array(
    'label' => 'Static',
    'value' => 'Static',
));
```

### Other decorated elements
The library also contains elements for decorators: `file`, `hidden`, `hash` and `captcha`.
