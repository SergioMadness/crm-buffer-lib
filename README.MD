Library to communicate with [CRMBuffer](https://github.com/SergioMadness/crm-buffer) service
====

Project structure
-------------------
```
Facades/
Interfaces/
Models/
Services/
```


Requirements
------------
 - PHP 7.1+


Installation
------------
Add repository to composer.json
```json
"repositories": [
    {
      "type": "git",
      "url": "https://github.com/SergioMadness/crm-buffer-lib.git"
    }
]
```

Add the following to the `require` section in your `composer.json` manually:

```json
"professionalweb/crm-buffer": "@dev"
```
Run `composer update` afterwards.

Or just execute
```bash
composer require professionalweb/crm-buffer:@dev
```


Initialization
--------------
## config/app.php
```php
<?php
return [
    'providers' => [
        ...
        \professionalweb\crmbuffer\CRMBufferProvider::class,
        ...
    ],
];
```

## config/crm-buffer.php
```php
<?php

return [
    'url'           => 'https://crm-buffer.com/api/v1',
    'client_id'     => '%your_client_id%',
    'client_secret' => '%your_client_secret%',
];
```

Use example
-----------
```php
<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use professionalweb\crmbuffer\Interfaces\CRMBufferService;

/**
 * Process new lead
 * @package App\Jobs
 */
class NewLead implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $title;

    public $name;

    public $email;

    public $phone;

    public $comment;

    public $visitorId;

    public $productId;

    public $country;

    public $city;

    public $position;

    /**
     * Execute the job.
     *
     * @param CRMBufferService $crmService
     *
     * @return void
     */
    public function handle(CRMBufferService $crmService)
    {
        $lead = $crmService->lead();
        if ($this->title) {
            $lead->setTitle($this->title);
        }
        if ($this->name) {
            $lead->setName($this->name);
        }
        if ($this->email) {
            $lead->setEmail($this->email);
        }
        if ($this->phone) {
            $lead->setPhone($this->phone);
        }
        if ($this->visitorId) {
            $lead->setVisitorId($this->visitorId);
        }
        if ($this->comment) {
            $lead->setComment($this->comment);
        }
        if ($this->productId) {
            $lead->setProductId($this->productId);
        }
        if ($this->country) {
            $lead->setCountry($this->country);
        }
        if ($this->city) {
            $lead->setCity($this->city);
        }
        if ($this->productId) {
            $lead->setProductId($this->productId);
        }
        if ($this->position) {
            $lead->setPosition($this->position);
        }
        $lead->send();
    }
}
```