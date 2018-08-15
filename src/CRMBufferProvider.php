<?php namespace professionalweb\crmbuffer;

use Illuminate\Support\ServiceProvider;
use professionalweb\crmbuffer\Models\Lead;
use professionalweb\crmbuffer\Models\Payment;
use professionalweb\crmbuffer\Models\Request;
use professionalweb\crmbuffer\Models\Contact;
use professionalweb\crmbuffer\Facades\CRMBuffer;
use professionalweb\crmbuffer\Interfaces\Lead as ILead;
use professionalweb\crmbuffer\Services\CRMBufferService;
use professionalweb\crmbuffer\Interfaces\Payment as IPayment;
use professionalweb\crmbuffer\Interfaces\Request as IRequest;
use professionalweb\crmbuffer\Interfaces\Contact as IContact;
use professionalweb\crmbuffer\Interfaces\Transport as ITransport;
use professionalweb\crmbuffer\Interfaces\CRMBufferService as ICRMBufferService;

class CRMBufferProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(IRequest::class, Request::class);
        $this->app->bind(ILead::class, Lead::class);
        $this->app->bind(IContact::class, Contact::class);
        $this->app->bind(IPayment::class, Payment::class);
        $this->app->bind(ITransport::class, function () {
            return new Transport(
                config('crm-buffer.url'),
                config('crm-buffer.client_id'),
                config('crm-buffer.client_secret')
            );
        });
        $this->app->bind(ICRMBufferService::class, CRMBufferService::class);
        $this->app->alias(CRMBuffer::class, 'CRMBuffer');
    }
}