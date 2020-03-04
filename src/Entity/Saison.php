<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SaisonRepository")
 */
class Saison
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero_saison;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_episode;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Serie", inversedBy="saisons")
     */
    private $serie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroSaison(): ?int
    {
        return $this->numero_saison;
    }

    public function setNumeroSaison(int $numero_saison): self
    {
        $this->numero_saison = $numero_saison;

        return $this;
    }

    public function getNbrEpisode(): ?int
    {
        return $this->nbr_episode;
    }

    public function setNbrEpisode(int $nbr_episode): self
    {
        $this->nbr_episode = $nbr_episode;

        return $this;
    }

    public function getSerie(): ?Serie
    {
        return $this->serie;
    }

    public function setSerie(?Serie $serie): self
    {
        $this->serie = $serie;

        return $this;
    }
}
