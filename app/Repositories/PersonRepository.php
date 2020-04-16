<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Person;

class PersonRepository extends ModuleRepository
{
    use HandleTranslations, HandleMedias, HandleFiles, HandleRevisions;

    public function __construct(Person $model)
    {
        $this->model = $model;
    }
}
