<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class PersonController extends ModuleController
{
    protected $moduleName = 'people';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
