<?php namespace professionalweb\IntegrationHub\Connector\Interfaces;

/**
 * Interface for transport to communicate with IntegrationHub service
 * @package professionalweb\IntegrationHub\Connector\Interfaces
 */
interface Transport extends Sendable
{
    /**
     * Set url to send request
     *
     * @param string $url
     *
     * @return Transport
     */
    public function setUrl(string $url): self;

    /**
     * Set data to send to service
     *
     * @param array $data
     *
     * @return Transport
     */
    public function setData(array $data): self;
}