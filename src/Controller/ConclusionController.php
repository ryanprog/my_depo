<?php

namespace App\Controller;

use App\Entity\Conclusion;
use App\Form\Conclusion1Type;
use App\Repository\ConclusionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/conclusion")
 */
class ConclusionController extends Controller
{
    /**
     * @Route("/", name="conclusion_index", methods={"GET"})
     */
    public function index(ConclusionRepository $conclusionRepository): Response
    {
        return $this->render('conclusion/index.html.twig', [
            'conclusions' => $conclusionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="conclusion_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $conclusion = new Conclusion();
        $form = $this->createForm(Conclusion1Type::class, $conclusion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($conclusion);
            $entityManager->flush();

            return $this->redirectToRoute('conclusion_index');
        }

        return $this->render('conclusion/new.html.twig', [
            'conclusion' => $conclusion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="conclusion_show", methods={"GET"})
     */
    public function show(Conclusion $conclusion): Response
    {
        return $this->render('conclusion/show.html.twig', [
            'conclusion' => $conclusion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="conclusion_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Conclusion $conclusion): Response
    {
        $form = $this->createForm(Conclusion1Type::class, $conclusion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('conclusion_index', [
                'id' => $conclusion->getId(),
            ]);
        }

        return $this->render('conclusion/edit.html.twig', [
            'conclusion' => $conclusion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="conclusion_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Conclusion $conclusion): Response
    {
        if ($this->isCsrfTokenValid('delete'.$conclusion->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($conclusion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('conclusion_index');
    }
}
