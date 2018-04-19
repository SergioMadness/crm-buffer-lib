<?php namespace professionalweb\crmbuffer\Interfaces;

/**
 * Interface for request
 * @package professionalweb\crmbuffer\Interfaces
 */
interface Request extends Sendable
{
    /**
     * Set field
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return Request
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
     * @return Request
     */
    public function setData(array $data): self;
}