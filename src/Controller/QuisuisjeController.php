<?php

namespace App\Controller;

use App\Entity\Quisuisje;
use App\Form\QuisuisjeType;
use App\Repository\QuisuisjeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/quisuisje")
 */
class QuisuisjeController extends Controller
{
    /**
     * @Route("/", name="quisuisje_index", methods={"GET"})
     */
    public function index(QuisuisjeRepository $quisuisjeRepository): Response
    {
        return $this->render('quisuisje/index.html.twig', [
            'quisuisjes' => $quisuisjeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="quisuisje_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $quisuisje = new Quisuisje();
        $form = $this->createForm(QuisuisjeType::class, $quisuisje);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($quisuisje);
            $entityManager->flush();

            return $this->redirectToRoute('quisuisje_index');
        }

        return $this->render('quisuisje/new.html.twig', [
            'quisuisje' => $quisuisje,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="quisuisje_show", methods={"GET"})
     */
    public function show(Quisuisje $quisuisje): Response
    {
        return $this->render('quisuisje/show.html.twig', [
            'quisuisje' => $quisuisje,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="quisuisje_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Quisuisje $quisuisje): Response
    {
        $form = $this->createForm(QuisuisjeType::class, $quisuisje);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('quisuisje_index', [
                'id' => $quisuisje->getId(),
            ]);
        }

        return $this->render('quisuisje/edit.html.twig', [
            'quisuisje' => $quisuisje,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="quisuisje_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Quisuisje $quisuisje): Response
    {
        if ($this->isCsrfTokenValid('delete'.$quisuisje->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($quisuisje);
            $entityManager->flush();
        }

        return $this->redirectToRoute('quisuisje_index');
    }
}
