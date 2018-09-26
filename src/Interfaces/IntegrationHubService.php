<?php namespace professionalweb\IntegrationHub\Connector\Interfaces;

/**
 * Interface for service to work with IntegrationHub service
 * @package professionalweb\IntegrationHub\Connector\Interfaces
 */
interface IntegrationHubService extends Sendable
{
    public function event(): Event;
}