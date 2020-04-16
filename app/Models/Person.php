<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Model;

class Person extends Model
{
    use HasTranslation, HasMedias, HasFiles, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'description',
        'url',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];

    public $mediasParams = [
        'profile' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
                ],
            ],
        ],
    ];
}
