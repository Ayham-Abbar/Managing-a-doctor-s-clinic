<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorManagementController extends Controller
{
    // public function index()
    // {
    //     return view('admin.page.doctor');
    // }
    public function create()
    {
        return view('admin.page.doctor');
    }
}
