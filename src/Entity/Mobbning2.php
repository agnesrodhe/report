<?php

namespace App\Entity;

use App\Repository\Mobbning2Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Mobbning2Repository::class)
 */
class Mobbning2
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $flickor;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pojkar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $totalt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(string $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getFlickor(): ?string
    {
        return $this->flickor;
    }

    public function setFlickor(?string $flickor): self
    {
        $this->flickor = $flickor;

        return $this;
    }

    public function getPojkar(): ?string
    {
        return $this->pojkar;
    }

    public function setPojkar(?string $pojkar): self
    {
        $this->pojkar = $pojkar;

        return $this;
    }

    public function getTotalt(): ?string
    {
        return $this->totalt;
    }

    public function setTotalt(?string $totalt): self
    {
        $this->totalt = $totalt;

        return $this;
    }
}
