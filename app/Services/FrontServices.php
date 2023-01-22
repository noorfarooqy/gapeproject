<?php

namespace App\Services;
use App\Models\BasicInfo;
use App\Models\MainHeader;
use App\Models\MainSliders;
use App\Models\ProjectCategories;
use App\Models\Projects;
use App\Models\SiteNews;
use App\Models\Team;
use App\Models\Teams;
use App\Models\Testimonials;
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

    public function GetTestimoniesData($request)
    {
        $data = Testimonials::latest()->limit(4)->get();
        return $data;
    }
    public function GetTeamsData($request)
    {
        $data = Teams::latest()->limit(3)->get();
        return $data;
    }
    public function GetNewsData($request)
    {
        $data = SiteNews::latest()->limit(2)->get();
        return $data;
    }
}