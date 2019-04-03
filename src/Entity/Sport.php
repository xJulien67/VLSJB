<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SportRepository")
 */
class Sport
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
     * @ORM\OneToMany(targetEntity="App\Entity\Activity", mappedBy="sport", cascade={"persist", "remove"})
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

    public function __toString()
    {
        return $this->getSportname();
    }
}
