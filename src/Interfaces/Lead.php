<?php namespace professionalweb\crmbuffer\Interfaces;

/**
 * Interface for Lead model
 * @package professionalweb\crmbuffer\Interfaces
 */
interface Lead extends Request
{
    /**
     * Set lead title
     *
     * @param string $title
     *
     * @return Lead
     */
    public function setTitle(string $title): self;

    /**
     * Set lead name
     *
     * @param string $name
     *
     * @return Lead
     */
    public function setName(string $name): self;

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Lead
     */
    public function setEmail(string $email): self;

    /**
     * Set phone number
     *
     * @param string $phone
     *
     * @return Lead
     */
    public function setPhone(string $phone): self;

    /**
     * Set opportunity
     *
     * @param float $amount
     *
     * @return Lead
     */
    public function setAmount(float $amount): self;

    /**
     * Set user id
     *
     * @param int $userId
     *
     * @return Lead
     */
    public function setUserId(int $userId): self;

    /**
     * Set visitor id
     *
     * @param string $visitorId
     *
     * @return Lead
     */
    public function setVisitorId(string $visitorId): self;

    /**
     * Set lead's comment
     *
     * @param string $comment
     *
     * @return Lead
     */
    public function setComment(string $comment): self;

    /**
     * Set product id
     *
     * @param $productId
     *
     * @return Lead
     */
    public function setProductId($productId): self;

    /**
     * Set country
     *
     * @param string $county
     *
     * @return Lead
     */
    public function setCountry(string $county): self;

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Lead
     */
    public function setCity(string $city): self;

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Lead
     */
    public function setPosition(string $position): self;

    /**
     * Set source id
     *
     * @param string $sourceId
     *
     * @return Lead
     */
    public function setSourceId(string $sourceId): self;

    /**
     * Set campaign
     *
     * @param string $campaign
     *
     * @return Lead
     */
    public function setUtmCampaign(string $campaign): self;

    /**
     * Set utm content
     *
     * @param string $content
     *
     * @return Lead
     */
    public function setUtmContent(string $content): self;

    /**
     * Set utm medium
     *
     * @param string $medium
     *
     * @return Lead
     */
    public function setUtmMedium(string $medium): self;

    /**
     * Set utm term
     *
     * @param string $term
     *
     * @return Lead
     */
    public function setUtmTerm(string $term): self;

    /**
     * Set utm source
     *
     * @param string $source
     *
     * @return Lead
     */
    public function setUtmSource(string $source): self;

    /**
     * Set partner id
     *
     * @param string $id
     *
     * @return Lead
     */
    public function setPartnerId(string $id): self;
}