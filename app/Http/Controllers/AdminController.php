<?php

namespace App\Http\Controllers;

use App\Models\CurrentPrice;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('admin.dashboard');
    }
    public function showSetPrice()
    {
        // dd(CurrentPrice::first());
        return view('admin.setprice', ['prices' => CurrentPrice::latest()->first()]);
    }
}