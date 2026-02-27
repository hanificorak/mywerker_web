<?php

namespace App\Services;

use App\Models\Services;

class ServicesService
{
    public function getServices()
    {

        return Services::all();
    }
}
