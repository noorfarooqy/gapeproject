<?php

namespace App\Http\Controllers;

use App\Services\FrontServices;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request, FrontServices $frontServices)
    {
        $main_header = $frontServices->GetMainHeaderData($request);
        return view('index', compact('main_header'));
    }
}
