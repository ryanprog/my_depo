<?php

namespace App\Controller;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Experiences;
/*use App\Entity\Conclusion;*/
use App\Form\ExperiencesType;

/*use App\Form\ConclusionType;*/



class FormController extends AbstractController
{
    public function create()
    {
        $experiences = new Experiences();
        $form = $this->createForm(ExperiencesType::class, $experiences);
        return $this->render(
            'lucky/create.html.twig',
            [
            'entity' => $experiences,
            'form' => $form->createView(),
            ]
        );
    }
    
    public function delete()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $experiences = $entityManager->getRepository(Experience::class)->findOne(['id' => $id]);
        
        
        $entityManager = $this->getDoctrine()->getManager();
        $enityManager->remove($experiences);
        $entityManager->flush();
    }
    
    public function edit($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $experiences = $entityManager->getRepository(Experiences::class)->findOneBy(['id' => $id]);
        $form = $this->createForm(ExperiencesType::class, $experiences);
        
        return $this->render(
            'lucky/create.html.twig',
            [
            'entity' => $experiences,
            'form' => $form->createView(),
            ]
        );
    }
    
    
    public function valid(Request $request)
    {
        $experiences= new Experiences();
        $form = $this->createForm(ExperiencesType::class, $experiences);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $experiences = $form->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($experiences);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_lucky_number');
        }
    
        return $this->render(
            'lucky/create.html.twig',
            [
            'entity' => $experiences,
            'form' => $form->createView(),
            ]
        )
        ->getForm();
    }
}
