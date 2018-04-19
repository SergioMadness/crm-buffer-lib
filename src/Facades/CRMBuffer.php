<?php namespace professionalweb\crmbuffer\Facades;

use Illuminate\Support\Facades\Facade;
use professionalweb\crmbuffer\Interfaces\CRMBufferService;

class CRMBuffer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return CRMBufferService::class;
    }
}