<?php

namespace GestVeterinaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@GestVeterinaire/Default/index.html.twig');
    }
}
