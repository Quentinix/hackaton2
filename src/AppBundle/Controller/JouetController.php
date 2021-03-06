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

        $jouet = $em->getRepository('AppBundle:Jouet')->findAll();
        $enfants = $em->getRepository('AppBundle:Enfants')->findAll();

        return $this->render('jouet/index.html.twig', array(
            'jouet' => $jouet,
            'enfants' => $enfants
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

    /**
    *@Route("/lutin/{id_jouet}", name="lutin")
    */
    public function listeJouetsAFabriquerAction() {
        $em = $this->getDoctrine()->getManager();
        $jouet = $em->getRepository('AppBundle:Jouet')->findAll();
        // var_dump($jouet);

        foreach ($jouet as $array) {
                $value = $array->getQuantiteStock();
                var_dump($value);
                // var_dump($jouet->getQuantiteStock(['nom']));
        }
        // var_dump($quantite_stock);
        // if ($quantite_stock<$quantitie_commandee) {

        // $quantitie_a_produire--;

        return $this->render('jouet/index.html.twig');
    }
}
//
// $em = $this->getDoctrine()->getManager();
//         $personnage = new Personnage();
//
//         $personnage->setPrenom($prenom);
//         $personnage->setNom($nom);
//         $personnage->setSexe($sexe);
//         $personnage->setBio($bio);
//
//         $em->persist($personnage);
//
//         $em->flush();
