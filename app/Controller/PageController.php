<?php

namespace ThorEngine\Controller;

class PageController 
{
  function about()
  {
    require __DIR__ . '/../View/about.php';
  }

  function contact()
  {
    require __DIR__ . '/../View/contact.php';
  }

  function facilities()
  {
    require __DIR__ . '/../View/facilities.php';
  }

  function rooms()
  {
    require __DIR__ . '/../View/rooms.php';
  }
}