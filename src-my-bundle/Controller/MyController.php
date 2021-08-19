<?php

namespace MyBundle\Controller;

use MyBundle\Shared\Action\RouterTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MyController extends AbstractController
{
    //use RouterTrait;

    public function index()
    {
      $url = $this->generateUrl('bundle');

      return new Response('Hello There ' . $url);
    }
}