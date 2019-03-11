<?php

namespace App\Controller;

use App\Entity\APropos;
use App\Form\AProposType;
use App\Repository\AProposRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/a/propos")
 */
class AProposController extends Controller
{
    /**
     * @Route("/", name="a_propos_index", methods={"GET"})
     */
    public function index(AProposRepository $aProposRepository): Response
    {
        return $this->render('a_propos/index.html.twig', [
            'a_propos' => $aProposRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="a_propos_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $aPropo = new APropos();
        $form = $this->createForm(AProposType::class, $aPropo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($aPropo);
            $entityManager->flush();

            return $this->redirectToRoute('a_propos_index');
        }

        return $this->render('a_propos/new.html.twig', [
            'a_propo' => $aPropo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="a_propos_show", methods={"GET"})
     */
    public function show(APropos $aPropo): Response
    {
        return $this->render('a_propos/show.html.twig', [
            'a_propo' => $aPropo,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="a_propos_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, APropos $aPropo): Response
    {
        $form = $this->createForm(AProposType::class, $aPropo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('a_propos_index', [
                'id' => $aPropo->getId(),
            ]);
        }

        return $this->render('a_propos/edit.html.twig', [
            'a_propo' => $aPropo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="a_propos_delete", methods={"DELETE"})
     */
    public function delete(Request $request, APropos $aPropo): Response
    {
        if ($this->isCsrfTokenValid('delete'.$aPropo->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($aPropo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('a_propos_index');
    }
}
