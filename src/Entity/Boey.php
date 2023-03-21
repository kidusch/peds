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

    #[ORM\Column]
    private ?int $TransactionType = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $InvoiceNo = null;

    #[ORM\Column(nullable: true)]
    private ?int $PaymentType = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TableNumber = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $SalesPerson = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $HoldMemo = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CustomerName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CustomerTIN = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CustomerVAT = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CashierUpdated = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $POSId = null;

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

    public function getTransactionType(): ?int
    {
        return $this->TransactionType;
    }

    public function setTransactionType(int $TransactionType): self
    {
        $this->TransactionType = $TransactionType;

        return $this;
    }

    public function getInvoiceNo(): ?string
    {
        return $this->InvoiceNo;
    }

    public function setInvoiceNo(?string $InvoiceNo): self
    {
        $this->InvoiceNo = $InvoiceNo;

        return $this;
    }

    public function getPaymentType(): ?int
    {
        return $this->PaymentType;
    }

    public function setPaymentType(?int $PaymentType): self
    {
        $this->PaymentType = $PaymentType;

        return $this;
    }

    public function getTableNumber(): ?string
    {
        return $this->TableNumber;
    }

    public function setTableNumber(?string $TableNumber): self
    {
        $this->TableNumber = $TableNumber;

        return $this;
    }

    public function getSalesPerson(): ?string
    {
        return $this->SalesPerson;
    }

    public function setSalesPerson(?string $SalesPerson): self
    {
        $this->SalesPerson = $SalesPerson;

        return $this;
    }

    public function getHoldMemo(): ?string
    {
        return $this->HoldMemo;
    }

    public function setHoldMemo(?string $HoldMemo): self
    {
        $this->HoldMemo = $HoldMemo;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(?\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getCustomerName(): ?string
    {
        return $this->CustomerName;
    }

    public function setCustomerName(?string $CustomerName): self
    {
        $this->CustomerName = $CustomerName;

        return $this;
    }

    public function getCustomerTIN(): ?string
    {
        return $this->CustomerTIN;
    }

    public function setCustomerTIN(?string $CustomerTIN): self
    {
        $this->CustomerTIN = $CustomerTIN;

        return $this;
    }

    public function getCustomerVAT(): ?string
    {
        return $this->CustomerVAT;
    }

    public function setCustomerVAT(?string $CustomerVAT): self
    {
        $this->CustomerVAT = $CustomerVAT;

        return $this;
    }

    public function getCashierUpdated(): ?string
    {
        return $this->CashierUpdated;
    }

    public function setCashierUpdated(?string $CashierUpdated): self
    {
        $this->CashierUpdated = $CashierUpdated;

        return $this;
    }

    public function getPOSId(): ?string
    {
        return $this->POSId;
    }

    public function setPOSId(?string $POSId): self
    {
        $this->POSId = $POSId;

        return $this;
    }
}
