<?php


class HelloWorld

{

  public function apa()

  {

    echo $this->text;

  }

}

class HelloWorld2 extends HelloWorld

{

   public $text = 'hello world';

}

$hello = new HelloWorld2();

$hello->apa();