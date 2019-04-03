<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ActivityRepository")
 */
class Activity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Sport", inversedBy="distance", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $sport;

    /**
     * @ORM\Column(type="float")
     * @Assert\Range(
     *      min = 1,
     *      max = 300,
     *      minMessage = "La distance ne peut être pas null !",
     *      maxMessage = "Une distance supérieure à 300km est impossible !"
     * )
     */
    private $distance;

    /**
     * @ORM\Column(type="datetime")
     */
    private $duration;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Minimum 1 caractère",
     *      maxMessage = "Maximum 50 caractères"
     * )
     */
    private $place;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $partner;

    /**
     * @ORM\Column(type="float")
     */
    private $averagePace;

    /**
     * @ORM\Column(type="float")
     * @Assert\Range(
     *      min = 1,
     *      max = 25,
     *      minMessage = "La vitesse ne peut être pas null !",
     *      maxMessage = "La vitesse ne peut pas être supérieure à 25km/h !"
     * )
     */
    private $averageSpeed;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $heartRate;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Activitytype", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $activitytype;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSport(): ?sport
    {
        return $this->sport;
    }

    public function setSport(sport $sport): self
    {
        $this->sport = $sport;

        return $this;
    }

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(float $distance): self
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

    public function getAveragePace(): ?float
    {
        return $this->averagePace;
    }

    public function setAveragePace(float $averagePace): self
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

    public function getActivitytype(): ?Activitytype
    {
        return $this->activitytype;
    }

    public function setActivitytype(Activitytype $activitytype): self
    {
        $this->activitytype = $activitytype;

        return $this;
    }
}
