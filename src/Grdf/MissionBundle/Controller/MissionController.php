<?php

namespace Grdf\MissionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Grdf\MissionBundle\Entity\Mission;
use Grdf\MissionBundle\Form\MissionType;

/**
 * Mission controller.
 *
 */
class MissionController extends Controller
{
    /**
     * Lists all Mission entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $missions = $em->getRepository('MissionBundle:Mission')->findAll();

        return $this->render('mission/index.html.twig', array(
            'missions' => $missions,
        ));
    }

    /**
     * Creates a new Mission entity.
     *
     */
    public function newAction(Request $request)
    {
        $mission = new Mission();
        $form = $this->createForm('Grdf\MissionBundle\Form\MissionType', $mission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mission);
            $em->flush();

            return $this->redirectToRoute('missions_show', array('id' => $mission->getId()));
        }

        return $this->render('mission/new.html.twig', array(
            'mission' => $mission,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Mission entity.
     *
     */
    public function showAction(Mission $mission)
    {
        $deleteForm = $this->createDeleteForm($mission);

        return $this->render('mission/show.html.twig', array(
            'mission' => $mission,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Mission entity.
     *
     */
    public function editAction(Request $request, Mission $mission)
    {
        $deleteForm = $this->createDeleteForm($mission);
        $editForm = $this->createForm('Grdf\MissionBundle\Form\MissionType', $mission);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mission);
            $em->flush();

            return $this->redirectToRoute('missions_edit', array('id' => $mission->getId()));
        }

        return $this->render('mission/edit.html.twig', array(
            'mission' => $mission,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Mission entity.
     *
     */
    public function deleteAction(Request $request, Mission $mission)
    {
        $form = $this->createDeleteForm($mission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mission);
            $em->flush();
        }

        return $this->redirectToRoute('missions_index');
    }

    /**
     * Creates a form to delete a Mission entity.
     *
     * @param Mission $mission The Mission entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Mission $mission)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('missions_delete', array('id' => $mission->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
