<?php namespace professionalweb\crmbuffer\Interfaces;

/**
 * Interface for Payment model
 * @package professionalweb\crmbuffer\Interfaces
 */
interface Payment extends Request
{
    /**
     * Set lead title
     *
     * @param string $title
     *
     * @return Payment
     */
    public function setTitle(string $title): self;

    /**
     * Set opportunity
     *
     * @param float $amount
     *
     * @return Payment
     */
    public function setAmount(float $amount): self;

    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return Payment
     */
    public function setCurrency(string $currency): self;

    /**
     * Set product id
     *
     * @param $productId
     *
     * @return Payment
     */
    public function setProductId($productId): self;

    /**
     * Set contact id
     *
     * @param $contactId
     *
     * @return Payment
     */
    public function setContactId($contactId): self;

    /**
     * Set campaign
     *
     * @param string $campaign
     *
     * @return Payment
     */
    public function setUtmCampaign(string $campaign): self;

    /**
     * Set utm content
     *
     * @param string $content
     *
     * @return Payment
     */
    public function setUtmContent(string $content): self;

    /**
     * Set utm medium
     *
     * @param string $medium
     *
     * @return Payment
     */
    public function setUtmMedium(string $medium): self;

    /**
     * Set utm term
     *
     * @param string $term
     *
     * @return Payment
     */
    public function setUtmTerm(string $term): self;

    /**
     * Set utm source
     *
     * @param string $source
     *
     * @return Payment
     */
    public function setUtmSource(string $source): self;

    /**
     * Set source id
     *
     * @param string $sourceId
     *
     * @return Payment
     */
    public function setSourceId(string $sourceId): self;

    /**
     * Set partner id
     *
     * @param string $id
     *
     * @return Payment
     */
    public function setPartnerId(string $id): self;

    /**
     * Contact is meta-field
     *
     * @param string $contact
     *
     * @return Payment
     */
    public function setContact(string $contact): self;

    /**
     * Meta-field for date
     *
     * @param string $date
     *
     * @return Payment
     */
    public function setDate(string $date): self;

    /**
     * Set order id
     *
     * @param string $orderId
     *
     * @return Payment
     */
    public function setOrderId(string $orderId): self;
}