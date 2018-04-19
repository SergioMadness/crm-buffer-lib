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
}