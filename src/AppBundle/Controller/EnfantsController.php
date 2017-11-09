<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Enfants;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Enfant controller.
 *
 * @Route("enfants")
 */
class EnfantsController extends Controller
{
    /**
     * Lists all enfant entities.
     *
     * @Route("/", name="enfants_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $enfants = $em->getRepository('AppBundle:Enfants')->findAll();
        $jouets = $em->getRepository('AppBundle:Jouet')->findAll();

        return $this->render('enfants/index.html.twig', array(
            'enfants' => $enfants,
            'jouet' => $jouet,
        ));
    }

    /**
     * Creates a new enfant entity.
     *
     * @Route("/new", name="enfants_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $enfant = new Enfants();
        $form = $this->createForm('AppBundle\Form\EnfantsType', $enfant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enfant);
            $em->flush();

            return $this->redirectToRoute('enfants_show', array('id' => $enfant->getId()));
        }

        return $this->render('enfants/new.html.twig', array(
            'enfant' => $enfant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a enfant entity.
     *
     * @Route("/{id}", name="enfants_show")
     * @Method("GET")
     */
    public function showAction(Enfants $enfant)
    {
        $deleteForm = $this->createDeleteForm($enfant);

        return $this->render('enfants/show.html.twig', array(
            'enfant' => $enfant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing enfant entity.
     *
     * @Route("/{id}/edit", name="enfants_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Enfants $enfant)
    {
        $deleteForm = $this->createDeleteForm($enfant);
        $editForm = $this->createForm('AppBundle\Form\EnfantsType', $enfant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('enfants_edit', array('id' => $enfant->getId()));
        }

        return $this->render('enfants/edit.html.twig', array(
            'enfant' => $enfant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a enfant entity.
     *
     * @Route("/{id}", name="enfants_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Enfants $enfant)
    {
        $form = $this->createDeleteForm($enfant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($enfant);
            $em->flush();
        }

        return $this->redirectToRoute('enfants_index');
    }

    /**
     * Creates a form to delete a enfant entity.
     *
     * @param Enfants $enfant The enfant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Enfants $enfant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('enfants_delete', array('id' => $enfant->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
