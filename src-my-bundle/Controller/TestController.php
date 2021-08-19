<?php

namespace MyBundle\Controller;

use Doctrine\ORM\EntityManagerInterface;
use MyBundle\Shared\Action\RouterTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    private EntityManagerInterface $em;
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function index()
    {
      return new Response('Hello There Test Controller');
    }
}