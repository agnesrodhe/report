<?php

namespace App\Entity;

use App\Repository\DigitalKnowledgeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DigitalKnowledgeRepository::class)
 */
class DigitalKnowledge
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
    private $knowledge;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sextontjugofyra;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fjugofemtrettiofyra;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $trettiofemfyrtiofyra;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fyrtiofemfemtiofyra;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $femtiofemsextiofyra;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sextiofemsjutiofyra;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getKnowledge(): ?string
    {
        return $this->knowledge;
    }

    public function setKnowledge(string $knowledge): self
    {
        $this->knowledge = $knowledge;

        return $this;
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

    public function getSextontjugofyra(): ?string
    {
        return $this->sextontjugofyra;
    }

    public function setSextontjugofyra(string $sextontjugofyra): self
    {
        $this->sextontjugofyra = $sextontjugofyra;

        return $this;
    }

    public function getFjugofemtrettiofyra(): ?string
    {
        return $this->fjugofemtrettiofyra;
    }

    public function setFjugofemtrettiofyra(string $fjugofemtrettiofyra): self
    {
        $this->fjugofemtrettiofyra = $fjugofemtrettiofyra;

        return $this;
    }

    public function getTrettiofemfyrtiofyra(): ?string
    {
        return $this->trettiofemfyrtiofyra;
    }

    public function setTrettiofemfyrtiofyra(string $trettiofemfyrtiofyra): self
    {
        $this->trettiofemfyrtiofyra = $trettiofemfyrtiofyra;

        return $this;
    }

    public function getFyrtiofemfemtiofyra(): ?string
    {
        return $this->fyrtiofemfemtiofyra;
    }

    public function setFyrtiofemfemtiofyra(string $fyrtiofemfemtiofyra): self
    {
        $this->fyrtiofemfemtiofyra = $fyrtiofemfemtiofyra;

        return $this;
    }

    public function getFemtiofemsextiofyra(): ?string
    {
        return $this->femtiofemsextiofyra;
    }

    public function setFemtiofemsextiofyra(string $femtiofemsextiofyra): self
    {
        $this->femtiofemsextiofyra = $femtiofemsextiofyra;

        return $this;
    }

    public function getSextiofemsjutiofyra(): ?string
    {
        return $this->sextiofemsjutiofyra;
    }

    public function setSextiofemsjutiofyra(string $sextiofemsjutiofyra): self
    {
        $this->sextiofemsjutiofyra = $sextiofemsjutiofyra;

        return $this;
    }
}