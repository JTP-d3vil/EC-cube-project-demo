<?php

namespace Customize\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Eccube\Controller\AbstractController;

class user_dataNameCHanger extends AbstractController
{
    /**
     * @Route(name="document")
     * 
     */
    public function index(Request $request)
    {
            return [];
    }
}