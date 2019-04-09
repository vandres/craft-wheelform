<?php
namespace wheelform\models\fields;

class Hidden extends BaseFieldType
{
    public $name = "Hidden";

    public $type = "hidden";

    public function fieldRules()
    {
        return [];
    }

    public function getOptions()
    {
        return [
            'test' => [
                'type' => 'string',
            ]
        ];
    }
}
