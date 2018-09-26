<?php namespace professionalweb\IntegrationHub\Connector\Interfaces;

/**
 * Has send() method
 * @package professionalweb\IntegrationHub\Connector\Interfaces
 */
interface Sendable
{
    /**
     * @return mixed
     */
    public function send();
}