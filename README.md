Twitter Bootstrap 3 Form for Zend Framework 1
=======

## Form types

The library supports all Bootstrap 3 form types.

### Basic example

```html
<form enctype="multipart/form-data" class="form-vertical" method="post">
  <div class="form-group">
    <label for="email" class="control-label optional">Email address</label>
    <input type="email" name="email" id="email" placeholder="Enter email" class="form-control" />
  </div>
  <div class="form-group">
    <label for="password" class="control-label optional">Password</label>
    <input type="password" name="password" id="password" placeholder="Password" class="form-control" />
  </div>
  <div class="form-group">
    <label for="file" class="control-label optional">File input</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="104857600" id="MAX_FILE_SIZE" />
    <input type="file" name="file" id="file" />
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="form-group">
    <div class="checkbox">
      <label>
        <input type="hidden" name="checkbox" value="0" />
        <input type="checkbox" name="checkbox" id="checkbox" value="1" />
        Check me out
      </label>
    </div>
  </div>
  <div class="form-group">
    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary" />
  </div>
</form>
```

```php
class Application_Form_Example1 extends Twitter_Bootstrap3_Form_Vertical
{
    public function init()
    {
        $this->addElement('email', 'email', array(
            'label' => 'Email address',
            'placeholder' => 'Enter email',
        ));
        $this->addElement('password', 'password', array(
            'label' => 'Password',
            'placeholder' => 'Password',
        ));
        $this->addElement('file', 'file', array(
            'label' => 'File input',
            'description' => 'Example block-level help text here.',
        ));
        $this->addElement('checkbox', 'checkbox', array(
            'label' => 'Check me out',
        ));
        $this->addElement('submit', 'submit', array(
            'label' => 'Submit',
        ));
    }
}
```

### Inline form

```html
<form enctype="application/x-www-form-urlencoded" class="form-inline" method="post">
  <div class="form-group">
    <label for="email" class="sr-only optional">Email address</label>
    <input type="email" name="email" id="email" placeholder="Enter email" class="form-control" />
  </div>
  <div class="form-group">
    <label for="password" class="sr-only optional">Password</label>
    <input type="password" name="password" id="password" placeholder="Password" class="form-control" />
  </div>
  <div class="form-group">
    <div class="checkbox">
      <label>
        <input type="hidden" name="checkbox" value="0" />
        <input type="checkbox" name="checkbox" id="checkbox" value="1" />
        Remember me
      </label>
    </div>
  </div>
  <div class="form-group">
    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary" />
  </div>
</form>
```

```php
class Application_Form_Example2 extends Twitter_Bootstrap3_Form_Inline
{
    public function init()
    {
        $this->addElement('email', 'email', array(
            'label' => 'Email address',
            'placeholder' => 'Enter email',
        ));
        $this->addElement('password', 'password', array(
            'label' => 'Password',
            'placeholder' => 'Password',
        ));
        $this->addElement('checkbox', 'checkbox', array(
            'label' => 'Remember me',
        ));
        $this->addElement('submit', 'submit', array(
            'label' => 'Submit',
        ));
    }
}
```

### Horizontal form

```html
<form enctype="application/x-www-form-urlencoded" class="form-horizontal" method="post">
  <div class="form-group">
    <label for="email" class="optional control-label col-sm-2">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" id="email" placeholder="Email" class="form-control" />
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="optional control-label col-sm-2">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" id="password" placeholder="Password" class="form-control" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      <div class="checkbox">
        <label>
          <input type="hidden" name="checkbox" value="0" />
          <input type="checkbox" name="checkbox" id="checkbox" value="1" />
          Check me out
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      <input type="submit" name="submit" id="submit" value="Sign in" class="btn btn-primary" />
    </div>
  </div>
</form>
```

```php
<?php
class Application_Form_Example4 extends Twitter_Bootstrap3_Form_Horizontal
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
            'label' => 'Check me out',
        ));
        $this->addElement('submit', 'submit', array(
            'label' => 'Sign in',
        ));
    }
}
```
