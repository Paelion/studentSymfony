<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NoteRepository")
 */
class Note
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
    private $resultat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $datePublication;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\matiere", inversedBy="notes")
     */
    private $matiereId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResultat(): ?string
    {
        return $this->resultat;
    }

    public function setResultat(string $resultat): self
    {
        $this->resultat = $resultat;

        return $this;
    }

    public function getDatePublication(): ?string
    {
        return $this->datePublication;
    }

    public function setDatePublication(string $datePublication): self
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    public function getMatiereId(): ?matiere
    {
        return $this->matiereId;
    }

    public function setMatiereId(?matiere $matiereId): self
    {
        $this->matiereId = $matiereId;

        return $this;
    }
}
