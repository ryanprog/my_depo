<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\ExperiencesRepository")
 */
class Experiences
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
    private $Date;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $lieu;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $Secteur;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $experience1;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $experience2;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $Experience3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?string
    {
        return $this->Date;
    }

    public function setDate(string $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getSecteur(): ?string
    {
        return $this->Secteur;
    }

    public function setSecteur(string $Secteur): self
    {
        $this->Secteur = $Secteur;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getExperience1(): ?string
    {
        return $this->experience1;
    }

    public function setExperience1(string $experience1): self
    {
        $this->experience1 = $experience1;

        return $this;
    }

    public function getExperience2(): ?string
    {
        return $this->experience2;
    }

    public function setExperience2(string $experience2): self
    {
        $this->experience2 = $experience2;

        return $this;
    }

    public function getExperience3(): ?string
    {
        return $this->Experience3;
    }

    public function setExperience3(string $Experience3): self
    {
        $this->Experience3 = $Experience3;

        return $this;
    }
}
