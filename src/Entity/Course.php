<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\CourseRepository")
 */
class Course
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $studyMethod;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isBeginner;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isIntermediate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getStudyMethod(): ?string
    {
        return $this->studyMethod;
    }

    public function setStudyMethod(string $studyMethod): self
    {
        $this->studyMethod = $studyMethod;

        return $this;
    }

    public function getIsBeginner(): ?bool
    {
        return $this->isBeginner;
    }

    public function setIsBeginner(bool $isBeginner): self
    {
        $this->isBeginner = $isBeginner;

        return $this;
    }

    public function getIsIntermediate(): ?bool
    {
        return $this->isIntermediate;
    }

    public function setIsIntermediate(bool $isIntermediate): self
    {
        $this->isIntermediate = $isIntermediate;

        return $this;
    }
}
