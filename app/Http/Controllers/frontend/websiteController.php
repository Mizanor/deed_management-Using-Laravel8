<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\frontend\image;
use App\Models\frontend\land;

class websiteController extends Controller
{
    public function index()
    {
        $alldata = image::where('id', 1)->first();
        $projects = land::all();
        
        
        
        return view('welcome', compact('alldata', 'projects'));
    }
}
