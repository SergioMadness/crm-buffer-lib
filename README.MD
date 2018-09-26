Library to communicate with [IntegrationHub](https://github.com/SergioMadness/integration-hub) service
====


Requirements
------------
 - PHP 7.1+


Installation
------------
Add the following to the `require` section in your `composer.json` manually:

```json
"professionalweb/integration-hub-connector": "^1.0"
```
Run `composer update` afterwards.

Or just execute
```bash
composer require professionalweb/integration-hub-connector
```


Initialization
--------------

## config/integration-hub.php
```php
<?php

return [
    'url'           => 'https://integration-hub.com/api/v1',
    'client_id'     => '%your_client_id%',
    'client_secret' => '%your_client_secret%',
];
```