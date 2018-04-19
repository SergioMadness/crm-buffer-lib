<?php namespace professionalweb\crmbuffer\Models;

use professionalweb\crmbuffer\Interfaces\Transport;
use professionalweb\crmbuffer\Interfaces\Contact as IContact;

/**
 * Contact
 * @package professionalweb\crmbuffer\Models
 */
class Contact extends Request implements IContact
{

    public const URL_CONTACT = 'b2b/contacts';

    public function __construct(Transport $transport)
    {
        $transport->setUrl(self::URL_CONTACT);
        parent::__construct($transport);
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return IContact
     */
    public function setName(string $name): IContact
    {
        $this->setField('name', $name);

        return $this;
    }

    /**
     * Set last name
     *
     * @param string $lastName
     *
     * @return IContact
     */
    public function setLastName(string $lastName): IContact
    {
        $this->setField('last_name', $lastName);

        return $this;
    }

    /**
     * Set second name
     *
     * @param string $secondName
     *
     * @return IContact
     */
    public function setSecondName(string $secondName): IContact
    {
        $this->setField('second_name', $secondName);

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return IContact
     */
    public function setEmail(string $email): IContact
    {
        $this->setField('email', $email);

        return $this;
    }

    /**
     * Set phone number
     *
     * @param string $phone
     *
     * @return IContact
     */
    public function setPhone(string $phone): IContact
    {
        $this->setField('phone', $phone);

        return $this;
    }

    /**
     * Set birth date
     *
     * @param string $date
     *
     * @return IContact
     */
    public function setBirthDate(string $date): IContact
    {
        $this->setField('BIRTHDAY', $date);

        return $this;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return IContact
     */
    public function setComments(string $comments): IContact
    {
        $this->setField('COMMENTS', $comments);

        return $this;
    }

    /**
     * Set lead id
     *
     * @param $leadId
     *
     * @return IContact
     */
    public function setLeadId($leadId): IContact
    {
        $this->setField('LEAD_ID', $leadId);

        return $this;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return IContact
     */
    public function setPosition(string $position): IContact
    {
        $this->setField('POST', $position);

        return $this;
    }
}