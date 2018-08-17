<?php

namespace AtlantisPHP\ElComponent\Support;

use AtlantisPHP\ElComponent\Html;

class Obj
{
  /**
   * el
   *
   * @param string $element
   * @return void
   */
  public static function el(string $element) : object
  {
    switch ($element) {
      case 'form':
        return Html::form();
        break;

      default:
        # code...
        break;
    }
  }
}