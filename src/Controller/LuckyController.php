<?php
// src/AppBundle/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Experiences;
use App\Entity\APropos;
use App\Entity\NomTitreCV;
use App\Entity\Competences;
use App\Entity\Competences2;
use App\Entity\Quisuisje;
use App\Entity\Conclusion;
use App\Entity\Prenom;
use App\Entity\message;
use App\Entity\Personne;
use App\Form\ContactType;

class LuckyController extends Controller
{
    public function number(Request $request)
    {
        $experiences = $this->getDoctrine()->getRepository(Experiences::class)->findAll();
        $A_propos = $this->getDoctrine()->getRepository(APropos::class)->findAll();
        $nom_titre_cv = $this->getDoctrine()->getRepository(NomTitreCV::class)->findAll();
        $competences = $this->getDoctrine()->getRepository(Competences::class)->findAll();
        $competences2 = $this->getDoctrine()->getRepository(Competences2::class)->findAll();
        $quisuisje = $this->getDoctrine()->getRepository(Quisuisje::class)->findAll();
        $conclusion = $this->getDoctrine()->getRepository(Conclusion::class)->findAll();
        $personne = $this->getDoctrine()->getRepository(Personne::class)->findAll();
        
        $contact = new Personne();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('app_lucky_number');
        }
        
        return $this->render('lucky/number.html.twig', array(
            'experiences' => $experiences,
            'APropos' => $A_propos,
            'NomTitreCV' => $nom_titre_cv,
            'Competences' => $competences,
            'Competences2' => $competences2,
            'Quisuisje' => $quisuisje,
            'Conclusion' => $conclusion,
            'Personne' => $contact,
            'form' => $form->createView()
        ));
    }
    
    public function admin()
    {
        return $this->redirectToRoute('app_lucky_number');
    }
}
