<?php namespace professionalweb\crmbuffer\Models;

use professionalweb\crmbuffer\Interfaces\Transport;
use professionalweb\crmbuffer\Interfaces\Payment as IPayment;

/**
 * Payment model
 * @package professionalweb\crmbuffer\Models
 */
class Payment extends Request implements IPayment
{
    public const URL_PAYMENT = 'b2b/payments';

    public function __construct(Transport $transport)
    {
        $transport->setUrl(self::URL_PAYMENT);
        parent::__construct($transport);
    }

    /**
     * Set lead title
     *
     * @param string $title
     *
     * @return IPayment
     */
    public function setTitle(string $title): IPayment
    {
        $this->setField('title', $title);

        return $this;
    }

    /**
     * Set opportunity
     *
     * @param float $amount
     *
     * @return IPayment
     */
    public function setAmount(float $amount): IPayment
    {
        $this->setField('opportunity', $amount);

        return $this;
    }

    /**
     * Set product id
     *
     * @param $productId
     *
     * @return IPayment
     */
    public function setProductId($productId): IPayment
    {
        $this->setField('product_id', $productId);

        return $this;
    }

    /**
     * Set campaign
     *
     * @param string $campaign
     *
     * @return IPayment
     */
    public function setUtmCampaign(string $campaign): IPayment
    {
        $this->setField('UTM_CAMPAIGN', $campaign);

        return $this;
    }

    /**
     * Set utm content
     *
     * @param string $content
     *
     * @return IPayment
     */
    public function setUtmContent(string $content): IPayment
    {
        $this->setField('UTM_CONTENT', $content);

        return $this;
    }

    /**
     * Set utm medium
     *
     * @param string $medium
     *
     * @return IPayment
     */
    public function setUtmMedium(string $medium): IPayment
    {
        $this->setField('UTM_MEDIUM', $medium);

        return $this;
    }

    /**
     * Set utm term
     *
     * @param string $term
     *
     * @return IPayment
     */
    public function setUtmTerm(string $term): IPayment
    {
        $this->setField('UTM_TERM', $term);

        return $this;
    }

    /**
     * Set utm source
     *
     * @param string $source
     *
     * @return IPayment
     */
    public function setUtmSource(string $source): IPayment
    {
        $this->setField('UTM_SOURCE', $source);

        return $this;
    }

    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return IPayment
     */
    public function setCurrency(string $currency): IPayment
    {
        $this->setField('CURRENCY_ID', $currency);

        return $this;
    }

    /**
     * Set contact id
     *
     * @param $contactId
     *
     * @return IPayment
     */
    public function setContactId($contactId): IPayment
    {
        $this->setField('CONTACT_ID', $contactId);

        return $this;
    }

    /**
     * Set source id
     *
     * @param string $sourceId
     *
     * @return IPayment
     */
    public function setSourceId(string $sourceId): IPayment
    {
        $this->setField('source_id', $sourceId);

        return $this;
    }

    /**
     * Set partner id
     *
     * @param string $id
     *
     * @return IPayment
     */
    public function setPartnerId(string $id): IPayment
    {
        $this->setField('partner_id', $id);

        return $this;
    }

    /**
     * Contact is meta-field
     *
     * @param string $contact
     *
     * @return IPayment
     */
    public function setContact(string $contact): IPayment
    {
        $this->setField('contact', $contact);

        return $this;
    }

    /**
     * Meta-field for date
     *
     * @param string $date
     *
     * @return IPayment
     */
    public function setDate(string $date): IPayment
    {
        $this->setField('date', $date);

        return $this;
    }
}