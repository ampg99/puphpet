<?php

namespace Puphpet\Extension\XhprofBundle\Controller;

use Puphpet\MainBundle\Extension;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller implements Extension\ControllerInterface
{
    public function indexAction(array $data, $extra = '')
    {
        return $this->render('PuphpetMainBundle:extensions/xhprof:form.html.twig', [
            'xhprof' => $data,
        ]);
    }
}
