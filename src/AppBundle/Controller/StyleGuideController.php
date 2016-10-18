<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StyleGuideController extends Controller
{
    /**
     * @Route("/style-guide", name="style_guide")
     */
    public function indexAction(Request $request)
    {
        return $this->render('style_guide/index.html.twig');
    }
}
