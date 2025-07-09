<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display the settings page.
     */
    public function index()
    {
        $settings = Setting::all()->keyBy('key');
        
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Update the settings.
     */
    public function update(Request $request)
    {
        $request->validate([
            'site_title' => 'required|string|max:255',
            'site_description' => 'required|string',
            'site_description_ar' => 'required|string',
            'contact_phone' => 'required|string|max:50',
            'contact_email' => 'required|email|max:255',
            'contact_address' => 'required|string',
            'contact_address_ar' => 'required|string',
            'whatsapp_number' => 'required|string|max:50',
            'instagram_handle' => 'required|string|max:100',
            'google_analytics_id' => 'nullable|string|max:100|regex:/^(G-[A-Z0-9]+|UA-[0-9]+-[0-9]+)?$/',
            'gtm_id' => 'nullable|string|max:50|regex:/^(GTM-[A-Z0-9]+)?$/',
            'company_hours' => 'required|string',
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'required|string',
        ]);

        // Update all settings
        foreach ($request->all() as $key => $value) {
            if ($key !== '_token' && $key !== '_method') {
                $type = $this->getSettingType($key);
                Setting::set($key, $value, $type);
            }
        }

        return redirect()->route('admin.settings.index')
                        ->with('success', __('messages.settings_updated_successfully'));
    }

    /**
     * Get the appropriate setting type based on key.
     */
    private function getSettingType($key)
    {
        $textareaFields = ['site_description', 'site_description_ar', 'company_hours', 'hero_subtitle'];
        $emailFields = ['contact_email'];

        if (in_array($key, $textareaFields)) {
            return 'textarea';
        } elseif (in_array($key, $emailFields)) {
            return 'email';
        } else {
            return 'text';
        }
    }
} 