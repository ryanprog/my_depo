<?php

namespace App\Controller;

use App\Entity\Competences2;
use App\Form\Competences2Type;
use App\Repository\Competences2Repository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/competences2")
 */
class Competences2Controller extends Controller
{
    /**
     * @Route("/", name="competences2_index", methods={"GET"})
     */
    public function index(Competences2Repository $competences2Repository): Response
    {
        return $this->render('competences2/index.html.twig', [
            'competences2s' => $competences2Repository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="competences2_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $competences2 = new Competences2();
        $form = $this->createForm(Competences2Type::class, $competences2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($competences2);
            $entityManager->flush();

            return $this->redirectToRoute('competences2_index');
        }

        return $this->render('competences2/new.html.twig', [
            'competences2' => $competences2,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="competences2_show", methods={"GET"})
     */
    public function show(Competences2 $competences2): Response
    {
        return $this->render('competences2/show.html.twig', [
            'competences2' => $competences2,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="competences2_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Competences2 $competences2): Response
    {
        $form = $this->createForm(Competences2Type::class, $competences2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('competences2_index', [
                'id' => $competences2->getId(),
            ]);
        }

        return $this->render('competences2/edit.html.twig', [
            'competences2' => $competences2,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="competences2_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Competences2 $competences2): Response
    {
        if ($this->isCsrfTokenValid('delete'.$competences2->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($competences2);
            $entityManager->flush();
        }

        return $this->redirectToRoute('competences2_index');
    }
}
