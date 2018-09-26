<?php namespace professionalweb\IntegrationHub\Connector\Services;

use professionalweb\IntegrationHub\Connector\Interfaces\Event;
use professionalweb\IntegrationHub\Connector\Interfaces\Transport;
use professionalweb\IntegrationHub\Connector\Interfaces\IntegrationHubService as IIntegrationHubService;

/**
 * Service to work with IntegrationHub service
 * @package professionalweb\IntegrationHub\Connector\Services
 */
class IntegrationHubService implements IIntegrationHubService
{
    /**
     * @var Transport
     */
    private $transport;

    public function __construct(Transport $transport)
    {
        $this->setTransport($transport);
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

    public function event(): Event
    {
        return app(Event::class);
    }
}