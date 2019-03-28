<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActivitiestypeRepository")
 */
class Activitiestype
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
    private $activitiestype;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sport;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActivitiestype(): ?string
    {
        return $this->activitiestype;
    }

    public function setActivitiestype(string $activitiestype): self
    {
        $this->activitiestype = $activitiestype;

        return $this;
    }

    public function getSport(): ?string
    {
        return $this->sport;
    }

    public function setSport(string $sport): self
    {
        $this->sport = $sport;

        return $this;
    }
}
