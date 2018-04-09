<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/cv/{name}/{firstname}", name="homepage")
     * @Template()
     */
    public function indexAction($name = 'Marie', $firstname ='Dumas')//Request $request
    {
        return array('name'=>$name, 'firstname'=>$firstname);
    }
}
