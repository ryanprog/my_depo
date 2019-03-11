<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DescriptionGeneralTitreRepository")
 */
class DescriptionGeneralTitre
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
    private $titre_sous_nom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreSousNom(): ?string
    {
        return $this->titre_sous_nom;
    }

    public function setTitreSousNom(string $titre_sous_nom): self
    {
        $this->titre_sous_nom = $titre_sous_nom;

        return $this;
    }
}
