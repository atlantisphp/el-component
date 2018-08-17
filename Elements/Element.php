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
   * text
   *
   * @param mixed array
   * @return void
   */
  public function text(array $attributes = []) : object
  {
    $input = 'input type="text"';
    foreach ($attributes as $key => $value) {
      $input = $input . ' ' . $key . '="' . $value . '" ';
    }

    $this->builder = $this->builder . "<$input />";
    return $this;
  }

  /**
   * password
   *
   * @param mixed array
   * @return void
   */
  public function password(array $attributes = []) : object
  {
    $input = 'input type="password"';
    foreach ($attributes as $key => $value) {
      $input = $input . ' ' . $key . '="' . $value . '" ';
    }

    $this->builder = $this->builder . "<$input />";
    return $this;
  }

  /**
   * input
   *
   * @param mixed array
   * @return object
   */
  public function input(array $attributes = []) : object
  {
    $input = 'input';
    foreach ($attributes as $key => $value) {
      $input = $input . ' ' . $key . '="' . $value . '" ';
    }

    $this->builder = $this->builder . "<$input />";
    return $this;
  }

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