<?php namespace professionalweb\crmbuffer\Interfaces;

/**
 * Interface for transport to communicate with CRMBuffer service
 * @package professionalweb\crmbuffer\Interfaces
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