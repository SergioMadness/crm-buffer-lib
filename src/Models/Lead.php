<?php namespace professionalweb\crmbuffer\Models;

use professionalweb\crmbuffer\Interfaces\Transport;
use professionalweb\crmbuffer\Interfaces\Lead as ILead;

/**
 * Lead model
 * @package professionalweb\crmbuffer\Models
 */
class Lead extends Request implements ILead
{
    public const URL_LEAD = 'b2b/leads';

    public function __construct(Transport $transport)
    {
        $transport->setUrl(self::URL_LEAD);
        parent::__construct($transport);
    }

    /**
     * Set lead title
     *
     * @param string $title
     *
     * @return ILead
     */
    public function setTitle(string $title): ILead
    {
        $this->setField('title', $title);

        return $this;
    }

    /**
     * Set lead name
     *
     * @param string $name
     *
     * @return ILead
     */
    public function setName(string $name): ILead
    {
        $this->setField('name', $name);

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return ILead
     */
    public function setEmail(string $email): ILead
    {
        $this->setField('email', $email);

        return $this;
    }

    /**
     * Set phone number
     *
     * @param string $phone
     *
     * @return ILead
     */
    public function setPhone(string $phone): ILead
    {
        $this->setField('phone', $phone);

        return $this;
    }

    /**
     * Set opportunity
     *
     * @param float $amount
     *
     * @return ILead
     */
    public function setAmount(float $amount): ILead
    {
        $this->setField('opportunity', $amount);

        return $this;
    }

    /**
     * Set user id
     *
     * @param int $userId
     *
     * @return ILead
     */
    public function setUserId(int $userId): ILead
    {
        $this->setField('user_id', $userId);

        return $this;
    }

    /**
     * Set visitor id
     *
     * @param string $visitorId
     *
     * @return ILead
     */
    public function setVisitorId(string $visitorId): ILead
    {
        $this->setField('visitorId', $visitorId);

        return $this;
    }

    /**
     * Set lead's comment
     *
     * @param string $comment
     *
     * @return ILead
     */
    public function setComment(string $comment): ILead
    {
        $this->setField('comment', $comment);

        return $this;
    }

    /**
     * Set product id
     *
     * @param $productId
     *
     * @return ILead
     */
    public function setProductId($productId): ILead
    {
        $this->setField('product_id', $productId);

        return $this;
    }

    /**
     * Set country
     *
     * @param string $county
     *
     * @return ILead
     */
    public function setCountry(string $county): ILead
    {
        $this->setField('ADDRESS_COUNTRY', $county);

        return $this;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return ILead
     */
    public function setCity(string $city): ILead
    {
        $this->setField('ADDRESS_CITY', $city);

        return $this;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return ILead
     */
    public function setPosition(string $position): ILead
    {
        $this->setField('POST', $position);

        return $this;
    }

    /**
     * Set source id
     *
     * @param string $sourceId
     *
     * @return ILead
     */
    public function setSourceId(string $sourceId): ILead
    {
        $this->setField('SOURCE_ID', $sourceId);

        return $this;
    }

    /**
     * Set campaign
     *
     * @param string $campaign
     *
     * @return ILead
     */
    public function setUtmCampaign(string $campaign): ILead
    {
        $this->setField('UTM_CAMPAIGN', $campaign);

        return $this;
    }

    /**
     * Set utm content
     *
     * @param string $content
     *
     * @return ILead
     */
    public function setUtmContent(string $content): ILead
    {
        $this->setField('UTM_CONTENT', $content);

        return $this;
    }

    /**
     * Set utm medium
     *
     * @param string $medium
     *
     * @return ILead
     */
    public function setUtmMedium(string $medium): ILead
    {
        $this->setField('UTM_MEDIUM', $medium);

        return $this;
    }

    /**
     * Set utm term
     *
     * @param string $term
     *
     * @return ILead
     */
    public function setUtmTerm(string $term): ILead
    {
        $this->setField('UTM_TERM', $term);

        return $this;
    }

    /**
     * Set partner id
     *
     * @param string $id
     *
     * @return ILead
     */
    public function setPartnerId(string $id): ILead
    {
        $this->setField('partner_id', $id);

        return $this;
    }

    /**
     * Set utm source
     *
     * @param string $source
     *
     * @return ILead
     */
    public function setUtmSource(string $source): ILead
    {
        $this->setField('UTM_SOURCE', $source);

        return $this;
    }
}