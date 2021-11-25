<?php

namespace Mcgo\StatamicConfigFieldtype;

use Mcgo\StatamicConfigFieldtype\Fields\ConfigSelection;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $fieldtypes = [
        ConfigSelection::class
    ];

    protected $scripts = [
        __DIR__ . '/../resources/dist/js/cp.js',
    ];

    public function bootAddon()
    {
        //
    }
}
