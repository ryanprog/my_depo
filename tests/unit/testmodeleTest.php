<?php namespace App\Tests;
use App\Entity\Experiences;

class testmodeleTest extends \Codeception\Test\Unit
{
    /**
     * @var \App\Tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testmodeleExperience()
    {
        $exp = new Experiences();
        $exp->setLieu("Saint-Tropez");
        $this->assertEquals("Saint-Tropez", $exp->getLieu());
        $exp->setLieu("Paris");
        $this->assertEquals("Paris", $exp->getLieu());
        $exp->setLieu("Thonon");
        $this->assertEquals("Thonon", $exp->getLieu());
        
        $exp->setDate("2013");
        $this->assertEquals("2013", $exp->getDate());
        $exp->setDate("août 2017");
        $this->assertEquals("août 2017", $exp->getDate());
        $exp->setDate("2018");
        $this->assertEquals("2018", $exp->getDate());
        
        
        $exp->setSecteur("informatique");
        $this->assertEquals("informatique", $exp->getSecteur());
        $exp->setSecteur("Gestion des stocks");
        $this->assertEquals("Gestion des stocks", $exp->getSecteur());
        $exp->setSecteur("Clip musciale");
        $this->assertEquals("Clip musciale", $exp->getSecteur());
        
        $exp->setname("Stage au Musée du Louvre");
        $this->assertEquals("Stage au Musée du Louvre", $exp->getName());
        $exp->setname("S.N.D.D 74");
        $this->assertEquals("S.N.D.D 74", $exp->getName());
        $exp->setname("Audiovisuel");
        $this->assertEquals("Audiovisuel", $exp->getName());
        
        $exp->setExperience1("Découverte du système informatique du Louvre");
        $this->assertEquals("Découverte du système informatique du Louvre", $exp->getExperience1());
        $exp->setExperience1("Gestion des stocks de l'entreprise");
        $this->assertEquals("Gestion des stocks de l'entreprise", $exp->getExperience1());
        $exp->setExperience1("Création d'un clip vidéo musicale en adéquation avec la demande du client.");
        $this->assertEquals("Création d'un clip vidéo musicale en adéquation avec la demande du client.", $exp->getExperience1());
        
        $exp->setExperience2("Découverte de la Joconde sans personne pour faire chier autour");
        $this->assertEquals("Découverte de la Joconde sans personne pour faire chier autour", $exp->getExperience2());
        $exp->setExperience2("Amélioration du site internet");
        $this->assertEquals("Amélioration du site internet", $exp->getExperience2());
        $exp->setExperience2("Création d'un scénario adapté et original.");
        $this->assertEquals("Création d'un scénario adapté et original.", $exp->getExperience2());
        
        $exp->setExperience3("Découverte du domaine multimédia dans le Louvre");
        $this->assertEquals("Découverte du domaine multimédia dans le Louvre", $exp->getExperience3());
        $exp->setExperience3("Création de contenu adapté à la demande du client");
        $this->assertEquals("Création de contenu adapté à la demande du client", $exp->getExperience3());
        $exp->setExperience3("Maitrise du matériel hautement coûteux et ouai c'est chère le bon matos !");
        $this->assertEquals("Maitrise du matériel hautement coûteux et ouai c'est chère le bon matos !", $exp->getExperience3());
    }
}