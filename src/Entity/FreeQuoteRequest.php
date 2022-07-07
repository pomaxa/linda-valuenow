<?php

namespace App\Entity;

use App\Repository\FreeQuoteRequestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FreeQuoteRequestRepository::class)]
class FreeQuoteRequest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $eirCode;

    #[ORM\Column(type: 'string', length: 255)]
    private $address;

    #[ORM\Column(type: 'integer')]
    private $bedroomCount;

    #[ORM\Column(type: 'string', length: 255)]
    private $requestReason;

    #[ORM\Column(type: 'string', length: 255)]
    private $fullName;

    #[ORM\Column(type: 'string', length: 255)]
    private $phone;

    #[ORM\Column(type: 'string', length: 255)]
    private $status;

    #[ORM\Column(type: 'datetime_immutable')]
    private $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEirCode(): ?string
    {
        return $this->eirCode;
    }

    public function setEirCode(string $eirCode): self
    {
        $this->eirCode = $eirCode;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getBedroomCount(): ?int
    {
        return $this->bedroomCount;
    }

    public function setBedroomCount(int $bedroomCount): self
    {
        $this->bedroomCount = $bedroomCount;

        return $this;
    }

    public function getRequestReason(): ?string
    {
        return $this->requestReason;
    }

    public function setRequestReason(string $requestReason): self
    {
        $this->requestReason = $requestReason;

        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
