<?php

namespace App\Services;
use App\Models\BasicInfo;
use App\Models\MainHeader;
use App\Models\MainSliders;
use App\Models\ProjectCategories;
use App\Models\Projects;
use App\Models\WhoWeAre;

class FrontServices {

    public function GetMainHeaderData($request)
    {
        $data = MainHeader::latest()->get()->first();
        return $data;
    }
    public function GetMainSlidersData($request)
    {
        $data = MainSliders::latest()->limit(4)->get();
        return $data;
    }
    public function GetBasicInfoData($request)
    {
        $data = BasicInfo::latest()->get()->first();
        return $data;
    }
    public function GetWhoWeAreData($request)
    {
        $data = WhoWeAre::latest()->get()->first();
        return $data;
    }
    public function GetProjectCategoriesData($request)
    {
        $data = ProjectCategories::with('Projects')->latest()->limit(4)->get();
        return $data;
    }
}