<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Competences2Repository")
 */
class Competences2
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $competence1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $competence2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $competence3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $competence4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $competence5;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $competence6;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompetence1(): ?string
    {
        return $this->competence1;
    }

    public function setCompetence1(string $competence1): self
    {
        $this->competence1 = $competence1;

        return $this;
    }

    public function getCompetence2(): ?string
    {
        return $this->competence2;
    }

    public function setCompetence2(string $competence2): self
    {
        $this->competence2 = $competence2;

        return $this;
    }

    public function getCompetence3(): ?string
    {
        return $this->competence3;
    }

    public function setCompetence3(string $competence3): self
    {
        $this->competence3 = $competence3;

        return $this;
    }

    public function getCompetence4(): ?string
    {
        return $this->competence4;
    }

    public function setCompetence4(string $competence4): self
    {
        $this->competence4 = $competence4;

        return $this;
    }

    public function getCompetence5(): ?string
    {
        return $this->competence5;
    }

    public function setCompetence5(string $competence5): self
    {
        $this->competence5 = $competence5;

        return $this;
    }

    public function getCompetence6(): ?string
    {
        return $this->competence6;
    }

    public function setCompetence6(string $competence6): self
    {
        $this->competence6 = $competence6;

        return $this;
    }
}
