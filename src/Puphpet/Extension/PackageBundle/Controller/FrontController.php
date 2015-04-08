<?php

namespace Puphpet\Extension\PackageBundle\Controller;

use Puphpet\MainBundle\Extension;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller implements Extension\ControllerInterface
{
    public function indexAction(array $data, $extra = '')
    {
        return $this->render('PuphpetMainBundle:extensions/package:form.html.twig', [
            'server' => $data,
            'extra'  => $extra,
        ]);
    }
}
