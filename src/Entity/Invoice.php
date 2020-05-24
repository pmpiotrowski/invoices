<?php

namespace App\Entity;

use App\Repository\InvoiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InvoiceRepository::class)
 */
class Invoice
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
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $number;

    /**
     * @ORM\Column(type="date")
     */
    private $invoicing_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $invoicing_place;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $sale_date;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $seller_nip;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $seller_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true))
     */
    private $seller_street;

    /**
     * @ORM\Column(type="string", length=255, nullable=true))
     */
    private $seller_postal_code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $seller_city;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $seller_account_bank_number;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $seller_bank;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $buyer_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $buyer_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true))
     */
    private $buyer_nip;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $buyer_street;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $buyer_postal_code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true))
     */
    private $buyer_city;

    /**
     * @ORM\Column(type="string", length=255, nullable=true))
     */
    private $payment_period;

    /**
     * @ORM\Column(type="string", length=255, nullable=true))
     */
    private $status;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0, nullable=true))
     */
    private $amount_paid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true))
     */
    private $invoice_issuer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true))
     */
    private $invoice_recipient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $currency;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true))
     */
    private $netto_sum;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true))
     */
    private $vat_sum;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true))
     */
    private $brutto_sum;

    /**
     * @ORM\OneToMany(targetEntity=InvoiceItem::class, mappedBy="invoice", orphanRemoval=true, cascade={"persist"})
     */
    private $items;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getInvoicingDate(): ?\DateTimeInterface
    {
        return $this->invoicing_date;
    }

    public function setInvoicingDate(\DateTimeInterface $invoicing_date): self
    {
        $this->invoicing_date = $invoicing_date;

        return $this;
    }

    public function getInvoicingPlace(): ?string
    {
        return $this->invoicing_place;
    }

    public function setInvoicingPlace(string $invoicing_place): self
    {
        $this->invoicing_place = $invoicing_place;

        return $this;
    }

    public function getSaleDate(): ?\DateTimeInterface
    {
        return $this->sale_date;
    }

    public function setSaleDate(?\DateTimeInterface $sale_date): self
    {
        $this->sale_date = $sale_date;

        return $this;
    }

    public function getSellerNip(): ?string
    {
        return $this->seller_nip;
    }

    public function setSellerNip(string $seller_nip): self
    {
        $this->seller_nip = $seller_nip;

        return $this;
    }

    public function getSellerName(): ?string
    {
        return $this->seller_name;
    }

    public function setSellerName(string $seller_name): self
    {
        $this->seller_name = $seller_name;

        return $this;
    }

    public function getSellerPostalCode(): ?string
    {
        return $this->seller_postal_code;
    }

    public function setSellerPostalCode(string $seller_postal_code): self
    {
        $this->seller_postal_code = $seller_postal_code;

        return $this;
    }

    public function getSellerCity(): ?string
    {
        return $this->seller_city;
    }

    public function setSellerCity(string $seller_city): self
    {
        $this->seller_city = $seller_city;

        return $this;
    }

    public function getSellerAccountBankNumber(): ?string
    {
        return $this->seller_account_bank_number;
    }

    public function setSellerAccountBankNumber(string $seller_account_bank_number): self
    {
        $this->seller_account_bank_number = $seller_account_bank_number;

        return $this;
    }

    public function getSellerBank(): ?string
    {
        return $this->seller_bank;
    }

    public function setSellerBank(string $seller_bank): self
    {
        $this->seller_bank = $seller_bank;

        return $this;
    }

    public function getBuyerType(): ?string
    {
        return $this->buyer_type;
    }

    public function setBuyerType(string $buyer_type): self
    {
        $this->buyer_type = $buyer_type;

        return $this;
    }

    public function getBuyerName(): ?string
    {
        return $this->buyer_name;
    }

    public function setBuyerName(string $buyer_name): self
    {
        $this->buyer_name = $buyer_name;

        return $this;
    }

    public function getBuyerStreet(): ?string
    {
        return $this->buyer_street;
    }

    public function setBuyerStreet(string $buyer_street): self
    {
        $this->buyer_street = $buyer_street;

        return $this;
    }

    public function getBuyerPostalCode(): ?string
    {
        return $this->buyer_postal_code;
    }

    public function setBuyerPostalCode(string $buyer_postal_code): self
    {
        $this->buyer_postal_code = $buyer_postal_code;

        return $this;
    }

    public function getBuyerCity(): ?string
    {
        return $this->buyer_city;
    }

    public function setBuyerCity(string $buyer_city): self
    {
        $this->buyer_city = $buyer_city;

        return $this;
    }

    public function getPaymentPeriod(): ?string
    {
        return $this->payment_period;
    }

    public function setPaymentPeriod(string $payment_period): self
    {
        $this->payment_period = $payment_period;

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

    public function getAmountPaid(): ?string
    {
        return $this->amount_paid;
    }

    public function setAmountPaid(string $amount_paid): self
    {
        $this->amount_paid = $amount_paid;

        return $this;
    }

    public function getInvoiceIssuer(): ?string
    {
        return $this->invoice_issuer;
    }

    public function setInvoiceIssuer(string $invoice_issuer): self
    {
        $this->invoice_issuer = $invoice_issuer;

        return $this;
    }

    public function getInvoiceRecipient(): ?string
    {
        return $this->invoice_recipient;
    }

    public function setInvoiceRecipient(string $invoice_recipient): self
    {
        $this->invoice_recipient = $invoice_recipient;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getNettoSum(): ?string
    {
        return $this->netto_sum;
    }

    public function setNettoSum(string $netto_sum): self
    {
        $this->netto_sum = $netto_sum;

        return $this;
    }

    public function getVatSum(): ?string
    {
        return $this->vat_sum;
    }

    public function setVatSum(string $vat_sum): self
    {
        $this->vat_sum = $vat_sum;

        return $this;
    }

    public function getBruttoSum(): ?string
    {
        return $this->brutto_sum;
    }

    public function setBruttoSum(string $brutto_sum): self
    {
        $this->brutto_sum = $brutto_sum;

        return $this;
    }

    /**
     * @return Collection|InvoiceItem[]
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(InvoiceItem $item): self
    {
        if (!$this->items->contains($item)) {
            $this->items[] = $item;
            $item->setInvoice($this);
        }

        return $this;
    }

    public function removeItem(InvoiceItem $item): self
    {
        if ($this->items->contains($item)) {
            $this->items->removeElement($item);
            // set the owning side to null (unless already changed)
            if ($item->getInvoice() === $this) {
                $item->setInvoice(null);
            }
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBuyerNip()
    {
        return $this->buyer_nip;
    }

    /**
     * @param mixed $buyer_nip
     */
    public function setBuyerNip($buyer_nip): void
    {
        $this->buyer_nip = $buyer_nip;
    }

    /**
     * @return mixed
     */
    public function getSellerStreet()
    {
        return $this->seller_street;
    }

    /**
     * @param mixed $seller_street
     */
    public function setSellerStreet($seller_street): void
    {
        $this->seller_street = $seller_street;
    }

}
