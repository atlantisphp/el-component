<?php

use AtlantisPHP\ElComponent\Support\Obj;

if (!function_exists('el')) {
  function el(string $element) : object {
    return Obj::el($element);
  }
}