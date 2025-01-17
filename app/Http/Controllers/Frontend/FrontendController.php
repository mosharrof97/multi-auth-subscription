<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class FrontendController extends Controller
{
    public function index(){
        $plans = Plan::all();

        return view('frontend.page.frontend', compact('plans'));
    }
}
