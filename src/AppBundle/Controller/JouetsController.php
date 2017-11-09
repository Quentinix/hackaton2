<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Jouets;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Jouet controller.
 *
 * @Route("jouets")
 */
class JouetsController extends Controller
{
    /**
     * Lists all jouet entities.
     *
     * @Route("/", name="jouets_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $jouets = $em->getRepository('AppBundle:Jouets')->findAll();

        return $this->render('jouets/index.html.twig', array(
            'jouets' => $jouets,
        ));
    }

    /**
     * Creates a new jouet entity.
     *
     * @Route("/new", name="jouets_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $jouet = new Jouets();
        $form = $this->createForm('AppBundle\Form\JouetsType', $jouet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($jouet);
            $em->flush();

            return $this->redirectToRoute('jouets_show', array('id' => $jouet->getId()));
        }

        return $this->render('jouets/new.html.twig', array(
            'jouet' => $jouet,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a jouet entity.
     *
     * @Route("/{id}", name="jouets_show")
     * @Method("GET")
     */
    public function showAction(Jouets $jouet)
    {
        $deleteForm = $this->createDeleteForm($jouet);

        return $this->render('jouets/show.html.twig', array(
            'jouet' => $jouet,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing jouet entity.
     *
     * @Route("/{id}/edit", name="jouets_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Jouets $jouet)
    {
        $deleteForm = $this->createDeleteForm($jouet);
        $editForm = $this->createForm('AppBundle\Form\JouetsType', $jouet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('jouets_edit', array('id' => $jouet->getId()));
        }

        return $this->render('jouets/edit.html.twig', array(
            'jouet' => $jouet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a jouet entity.
     *
     * @Route("/{id}", name="jouets_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Jouets $jouet)
    {
        $form = $this->createDeleteForm($jouet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($jouet);
            $em->flush();
        }

        return $this->redirectToRoute('jouets_index');
    }

    /**
     * Creates a form to delete a jouet entity.
     *
     * @param Jouets $jouet The jouet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Jouets $jouet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('jouets_delete', array('id' => $jouet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
