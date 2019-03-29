<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SportsRepository")
 */
class Sports
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
    private $sportname;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Activities", mappedBy="sport", cascade={"persist", "remove"})
     */
    private $distance;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSportname(): ?string
    {
        return $this->sportname;
    }

    public function setSportname(string $sportname): self
    {
        $this->sportname = $sportname;

        return $this;
    }

    public function getDistance(): ?Activities
    {
        return $this->distance;
    }

    public function setDistance(Activities $distance): self
    {
        $this->distance = $distance;

        // set the owning side of the relation if necessary
        if ($this !== $distance->getSport()) {
            $distance->setSport($this);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getSportname();
    }
}
