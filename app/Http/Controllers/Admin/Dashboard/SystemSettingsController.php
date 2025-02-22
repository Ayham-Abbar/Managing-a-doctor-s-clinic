<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SystemSettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key');
        return view('admin.page.Setting.index', compact('settings'));
    }
    public function update(Request $request) {
        $data = $request->validate([
            'site_name' => 'required|string|max:255',
            'contact_email' => 'required|email',
            'contact_phone' => 'nullable|string',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
        ]);
        foreach ($data as $key => $value) {
            Setting::setSetting($key, $value);
        }
        return redirect()->back()->with('success', 'Settings updated successfully!');
    }
}
