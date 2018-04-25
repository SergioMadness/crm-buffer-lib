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

    /**
     * Set visitor id
     *
     * @param string $visitorId
     *
     * @return IContact
     */
    public function setVisitorId(string $visitorId): IContact
    {
        $this->setField('visitorId', $visitorId);

        return $this;
    }

    /**
     * Set source id
     *
     * @param string $sourceId
     *
     * @return IContact
     */
    public function setSourceId(string $sourceId): IContact
    {
        $this->setField('UTM_SOURCE', $sourceId);

        return $this;
    }

    /**
     * Set campaign
     *
     * @param string $campaign
     *
     * @return IContact
     */
    public function setUtmCampaign(string $campaign): IContact
    {
        $this->setField('UTM_CAMPAIGN', $campaign);

        return $this;
    }

    /**
     * Set utm content
     *
     * @param string $content
     *
     * @return IContact
     */
    public function setUtmContent(string $content): IContact
    {
        $this->setField('UTM_CONTENT', $content);

        return $this;
    }

    /**
     * Set utm medium
     *
     * @param string $medium
     *
     * @return IContact
     */
    public function setUtmMedium(string $medium): IContact
    {
        $this->setField('UTM_MEDIUM', $medium);

        return $this;
    }

    /**
     * Set utm term
     *
     * @param string $term
     *
     * @return IContact
     */
    public function setUtmTerm(string $term): IContact
    {
        $this->setField('UTM_TERM', $term);

        return $this;
    }

    /**
     * Set partner id
     *
     * @param string $id
     *
     * @return IContact
     */
    public function setPartnerId(string $id): IContact
    {
        $this->setField('partner_id', $id);

        return $this;
    }
}