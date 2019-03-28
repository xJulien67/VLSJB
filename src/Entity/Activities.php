<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActivitiesRepository")
 */
class Activities
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Sports", inversedBy="distance", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $sport;

    /**
     * @ORM\Column(type="integer")
     */
    private $distance;

    /**
     * @ORM\Column(type="datetime")
     */
    private $duration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $place;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $partner;

    /**
     * @ORM\Column(type="integer")
     */
    private $averagePace;

    /**
     * @ORM\Column(type="float")
     */
    private $averageSpeed;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $heartRate;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\ActivitiesType", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $activitiestype;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSport(): ?Sports
    {
        return $this->sport;
    }

    public function setSport(Sports $sport): self
    {
        $this->sport = $sport;

        return $this;
    }

    public function getDistance(): ?int
    {
        return $this->distance;
    }

    public function setDistance(int $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getDuration(): ?\DateTimeInterface
    {
        return $this->duration;
    }

    public function setDuration(\DateTimeInterface $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(string $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getPartner(): ?string
    {
        return $this->partner;
    }

    public function setPartner(string $partner): self
    {
        $this->partner = $partner;

        return $this;
    }

    public function getAveragePace(): ?int
    {
        return $this->averagePace;
    }

    public function setAveragePace(int $averagePace): self
    {
        $this->averagePace = $averagePace;

        return $this;
    }

    public function getAverageSpeed(): ?float
    {
        return $this->averageSpeed;
    }

    public function setAverageSpeed(float $averageSpeed): self
    {
        $this->averageSpeed = $averageSpeed;

        return $this;
    }

    public function getHeartRate(): ?int
    {
        return $this->heartRate;
    }

    public function setHeartRate(?int $heartRate): self
    {
        $this->heartRate = $heartRate;

        return $this;
    }

    public function getActivitiestype(): ?ActivitiesTypes
    {
        return $this->activitiestype;
    }

    public function setActivitiestype(ActivitiesTypes $activitiestype): self
    {
        $this->activitiestype = $activitiestype;

        return $this;
    }
}
