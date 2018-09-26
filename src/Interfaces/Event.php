<?php namespace professionalweb\IntegrationHub\Connector\Interfaces;

/**
 * Interface for request
 * @package professionalweb\IntegrationHub\Connector\Interfaces
 */
interface Event extends Sendable
{
    /**
     * Set field
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return Event
     */
    public function setField(string $key, $value): self;

    /**
     * Get value by key
     *
     * @param string $key
     *
     * @return mixed
     */
    public function getField(string $key);

    /**
     * Set all data
     *
     * @param array $data
     *
     * @return Event
     */
    public function setData(array $data): self;
}