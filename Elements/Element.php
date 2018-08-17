<?php

namespace AtlantisPHP\ElComponent\Elements;

class Element
{
  /**
   * $builder
   *
   * @var undefined
   */
  public $builder;

  /**
   * br
   *
   * @param mixed array
   * @return object
   */
  public function br(array $attributes = []) : object
  {
    $input = 'br';
    foreach ($attributes as $key => $value) {
      $input = $input . ' ' . $key . '="' . $value . '" ';
    }

    $this->builder = $this->builder . "<$input >";
    return $this;
  }
}