<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomepageController
{
  public function homepage()
  {
      return new Response(content:'INIT Project with a page');
  }
}
