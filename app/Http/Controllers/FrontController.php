<?php

namespace App\Http\Controllers;

use App\Services\FrontServices;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request, FrontServices $frontServices)
    {
        $main_header = $frontServices->GetMainHeaderData($request);
        $main_sliders = $frontServices->GetMainSlidersData($request);
        $basic_info = $frontServices->GetBasicInfoData($request);
        $we_are = $frontServices->GetWhoWeAreData($request);
        $project_categories = $frontServices->GetProjectCategoriesData($request);
        return view('index', compact('main_header', 'main_sliders', 'basic_info', 'we_are', 'project_categories'));
    }

    public function comingsoon()
    {
        return abort(503);
    }
}
