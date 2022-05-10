<?php

namespace App\Entity;

use App\Repository\VideoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VideoRepository::class)]
class Video
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\Column(type: 'text', nullable: true)]
    private $description;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $thumbnail;

    #[ORM\Column(type: 'string', length: 255)]
    private $videofile;

    #[ORM\ManyToOne(targetEntity: visibility::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $visibility;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(?string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function getVideofile(): ?string
    {
        return $this->videofile;
    }

    public function setVideofile(string $videofile): self
    {
        $this->videofile = $videofile;

        return $this;
    }

    public function getVisibility(): ?visibility
    {
        return $this->visibility;
    }

    public function setVisibility(?visibility $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }
}
