<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //todo: show
    public function show()
    {
        return view('admin.dashboard.dashboard');
    }
}
