<?php namespace professionalweb\IntegrationHub\Connector\Facades;

use Illuminate\Support\Facades\Facade;
use professionalweb\IntegrationHub\Connector\Interfaces\IntegrationHubService;

class IntegrationHub extends Facade
{
    protected static function getFacadeAccessor()
    {
        return IntegrationHubService::class;
    }
}