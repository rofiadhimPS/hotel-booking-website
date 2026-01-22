<?php

namespace ThorEngine\Controller;

class HomeController 
{
  function index()
  {
    $model = [
      "title" => "MR Hotel - HOME"
    ];

    require __DIR__ . '/../View/Home/index.php';
  }

  
}