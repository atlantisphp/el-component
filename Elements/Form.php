<?php

namespace AtlantisPHP\ElComponent\Elements;

use AtlantisPHP\ElComponent\Elements\Element;

class Form extends Element
{
  /**
   * $action
   *
   * @var undefined
   */
  private $action;

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
   * action
   *
   * @param string $endpoint
   * @return object
   */
  public function action(string $endpoint) : object
  {
    $this->action = $endpoint;
    return $this;
  }

  /**
   * show
   *
   * @return void
   */
  public function show()
  {
    $input = $this->builder;
    $action = $this->action;
    echo <<<EOT
<form action="{$action}">
{$input}
</form>
EOT;
  }

  /**
   * build
   *
   * @return void
   */
  public function build()
  {
    $input = $this->builder;
    $action = $this->action;
    return <<<EOT
<form action="{$action}">
{$input}
</form>
EOT;
  }
}