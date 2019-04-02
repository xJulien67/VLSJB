<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActivitytypeRepository")
 */
class Activitytype
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
    private $activitytype;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActivitytype(): ?string
    {
        return $this->activitytype;
    }

    public function setActivitytype(string $activitytype): self
    {
        $this->activitytype = $activitytype;

        return $this;
    }

    public function __toString()
    {
        return $this->getActivitytype();
    }
}
