<?php

namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use App\Api\Models\Version;

class VersionController extends Controller
{
    /**
     * POST ecapi.version.check
     */
    public function check()
    {
        $data = Version::checkVersion();
        return $this->json($data);
    }
}
