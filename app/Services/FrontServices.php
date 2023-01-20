<?php

namespace App\Services;
use App\Models\MainHeader;

class FrontServices {

    public function GetMainHeaderData($request)
    {
        $data = MainHeader::latest()->get()->first();
        return $data;
    }
}