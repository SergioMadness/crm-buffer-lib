<?php namespace professionalweb\crmbuffer\Interfaces;

/**
 * Interface for contact
 * @package professionalweb\crmbuffer\Interfaces
 */
interface Contact extends Request
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return Contact
     */
    public function setName(string $name): self;

    /**
     * Set last name
     *
     * @param string $lastName
     *
     * @return Contact
     */
    public function setLastName(string $lastName): self;

    /**
     * Set second name
     *
     * @param string $secondName
     *
     * @return Contact
     */
    public function setSecondName(string $secondName): self;

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Contact
     */
    public function setEmail(string $email): self;

    /**
     * Set phone number
     *
     * @param string $phone
     *
     * @return Contact
     */
    public function setPhone(string $phone): self;

    /**
     * Set birth date
     *
     * @param string $date
     *
     * @return Contact
     */
    public function setBirthDate(string $date): self;

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Contact
     */
    public function setComments(string $comments): self;

    /**
     * Set lead id
     *
     * @param $leadId
     *
     * @return Contact
     */
    public function setLeadId($leadId): self;

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Contact
     */
    public function setPosition(string $position): self;

    /**
     * Set visitor id
     *
     * @param string $visitorId
     *
     * @return Contact
     */
    public function setVisitorId(string $visitorId): self;
}