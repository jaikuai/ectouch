<?php

namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use App\Api\Models\Push;
use App\Api\Models\Device;

class MessageController extends Controller
{

    /**
    * POST ecapi.message.system.list
    */
    public function system()
    {
        $rules = [
            'page'      => 'required|integer|min:1',
            'per_page'  => 'required|integer|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $model = Push::getSystemList($this->validated);

        return $this->json($model);
    }

    /**
    * POST ecapi.message.order.list
    */
    public function order()
    {
        $rules = [
            'page'      => 'required|integer|min:1',
            'per_page'  => 'required|integer|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $model = Push::getOrderList($this->validated);

        return $this->json($model);
    }

    /**
    * POST ecapi.message.unread
    */
    public function unread()
    {
        $rules = [
            'after' => 'required|string',
            'type'  => 'int'
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $model = Push::unread($this->validated);

        return $this->json($model);
    }

    /**
    * POST ecapi.push.update
    */
    public function updateDeviceId()
    {
        $rules = [
            'device_id' => 'required|string'
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $model = Device::updateDevice($this->validated);
        return $this->json($model);
    }
}
