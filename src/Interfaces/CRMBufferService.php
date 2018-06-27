<?php namespace professionalweb\crmbuffer\Interfaces;

/**
 * Interface for service to work with CRMBuffer service
 * @package professionalweb\crmbuffer\Interfaces
 */
interface CRMBufferService extends Sendable
{
    /**
     * Start to work with lead
     *
     * @return Lead
     */
    public function lead(): Lead;

    /**
     * Start to work with contact
     *
     * @return Contact
     */
    public function contact(): Contact;

    /**
     * Start to work with payment
     *
     * @return Payment
     */
    public function payment(): Payment;
}