<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index(){
        $plans = Plan::all();

        return view('admin.page.plan.list', compact('plans'));
    }

    public function create(){
        
        return view('admin.page.plan.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>['required'],
            'duration_in_days'=>['required'],
            'price'=>['required'],
        ]);

        Plan::create([
            'name'=> $request->name,
            'duration_in_days'=> $request->duration_in_days,
            'price'=> $request->price,
        ]);

        return redirect()->route('admin.plan');
    }
}
