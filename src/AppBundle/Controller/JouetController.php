<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Jouet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Jouet controller.
 *
 * @Route("jouet")
 */
class JouetController extends Controller
{
    /**
     * Lists all jouet entities.
     *
     * @Route("/", name="jouet_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $jouets = $em->getRepository('AppBundle:Jouet')->findAll();
        $jouets = $em->getRepository('AppBundle:Enfants')->findAll();

        return $this->render('jouet/index.html.twig', array(
            'jouet' => $jouet,
            'enfant' => $enfants
        ));
    }

    /**
     * Finds and displays a jouet entity.
     *
     * @Route("/{id}", name="jouet_show")
     * @Method("GET")
     */
    public function showAction(Jouet $jouet)
    {

        return $this->render('jouet/show.html.twig', array(
            'jouet' => $jouet,
        ));
    }
}
