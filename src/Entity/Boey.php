<?php

namespace App\Entity;

use App\Repository\BoeyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BoeyRepository::class)]
class Boey
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $HoldSalesIdentifierId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHoldSalesIdentifierId(): ?string
    {
        return $this->HoldSalesIdentifierId;
    }

    public function setHoldSalesIdentifierId(string $HoldSalesIdentifierId): self
    {
        $this->HoldSalesIdentifierId = $HoldSalesIdentifierId;

        return $this;
    }
}
