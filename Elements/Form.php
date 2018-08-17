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