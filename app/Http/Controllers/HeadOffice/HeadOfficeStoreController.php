<?php

namespace App\Http\Controllers\HeadOffice;

use App\HeadOffice;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class HeadOfficeStoreController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(HeadOffice $head_office)
    {
        $stores = $head_office->stores;

        return $this->showAll($stores);
    }
}
