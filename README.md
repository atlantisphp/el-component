# El-Atlantis
HTML component for PHP

### Example

```
// file stored in /public
<?php

require_once __DIR__.'/../vendor/autoload.php';

use AtlantisPHP\ElComponent\Html;

el('form')
  ->action('/register')
  ->text([
    'name' => 'username'
  ])
  ->br()
  ->password([
    'name' => 'password'
  ])
  ->show();
```