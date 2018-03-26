<?php

namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use App\Api\Models\Invoice;

class InvoiceController extends Controller
{

    /**
    * POST ecapi.invoice.type.list
    */
    public function type()
    {
        $data = Invoice::getTypeList();
        return $this->json($data);
    }

    /**
    * POST ecapi.invoice.content.list
    */
    public function content()
    {
        $data = Invoice::getContentList();
        return $this->json($data);
    }

    /**
    * POST ecapi.invoice.status.get
    */
    public function status()
    {
        $data = Invoice::getStatus();
        return $this->json($data);
    }
}
