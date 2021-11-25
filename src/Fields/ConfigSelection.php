<?php

namespace Mcgo\StatamicConfigFieldtype\Fields;

class ConfigSelection extends \Statamic\Fields\Fieldtype
{
    protected function configFieldItems(): array
    {
        return [
            'config_key' => [
                'display' => 'Config Key',
                'instructions' => 'Which key is the base key that holds all values that could be selected by this field? e.g. To provide a list of all defined service providers this would app.providers',
                'type' => 'text',
            ],
        ];
    }
}
