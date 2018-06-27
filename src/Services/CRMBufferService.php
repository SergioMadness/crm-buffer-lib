<?php namespace professionalweb\crmbuffer\Services;

use professionalweb\crmbuffer\Interfaces\Lead;
use professionalweb\crmbuffer\Interfaces\Contact;
use professionalweb\crmbuffer\Interfaces\Payment;
use professionalweb\crmbuffer\Interfaces\Transport;
use professionalweb\crmbuffer\Interfaces\CRMBufferService as ICRMBufferService;

/**
 * Service to work with CRMBuffer service
 * @package professionalweb\crmbuffer\Services
 */
class CRMBufferService implements ICRMBufferService
{
    /**
     * @var Transport
     */
    private $transport;

    public function __construct(Transport $transport)
    {
        $this->setTransport($transport);
    }

    /**
     * Start to work with lead
     *
     * @return Lead
     */
    public function lead(): Lead
    {
        return app(Lead::class);
    }

    public function send()
    {
        // TODO: Implement send() method.
    }

    /**
     * Get transport
     *
     * @return Transport
     */
    public function getTransport(): Transport
    {
        return $this->transport;
    }

    /**
     * Set transport
     *
     * @param Transport $transport
     *
     * @return $this
     */
    public function setTransport(Transport $transport): self
    {
        $this->transport = $transport;

        return $this;
    }


    /**
     * Start to work with contact
     *
     * @return Contact
     */
    public function contact(): Contact
    {
        return app(Contact::class);
    }

    /**
     * Start to work with payment
     *
     * @return Payment
     */
    public function payment(): Payment
    {
        return app(Payment::class);
    }
}