<?php namespace professionalweb\IntegrationHub\Connector;

use Illuminate\Support\ServiceProvider;
use professionalweb\IntegrationHub\Connector\Models\Event;
use professionalweb\IntegrationHub\Connector\Interfaces\DataSigner;
use professionalweb\IntegrationHub\Connector\Facades\IntegrationHub;
use professionalweb\IntegrationHub\Connector\Interfaces\Event as IEvent;
use professionalweb\IntegrationHub\Connector\Services\DataSignersService;
use professionalweb\IntegrationHub\Connector\Services\IntegrationHubService;
use professionalweb\IntegrationHub\Connector\Interfaces\Transport as ITransport;
use professionalweb\IntegrationHub\Connector\Interfaces\IntegrationHubService as IIntegrationHubService;

class IntegrationHubProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(IEvent::class, Event::class);
        $this->app->bind(ITransport::class, function () {
            return new Transport(
                config('integration-hub.url'),
                config('integration-hub.client_id'),
                config('integration-hub.client_secret')
            );
        });
        $this->app->bind(IIntegrationHubService::class, IntegrationHubService::class);
        $this->app->alias(IntegrationHub::class, 'IntegrationHub');

        $this->app->singleton(DataSigner::class, DataSignersService::class);
    }
}