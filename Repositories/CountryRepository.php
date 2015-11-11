<?php

namespace modules\Dashboard\Repositories;

use Modules\Dashboard\Entities\Country;
use Prettus\Repository\Eloquent\BaseRepository;

class CountryRepository extends BaseRepository
{
    public function model()
    {
        return Country::class;
    }
}
