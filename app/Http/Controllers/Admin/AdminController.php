<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class AdminController extends Controller
{
    public function __construct()
    {
        $settings = Setting::all();
        $settings = $this->formObject($settings);
        view()->share("admin_name", "Mahmoud Gabr");
        view()->share("site_logo", $settings->logo);
        view()->share("site_title", $settings->title);
        view()->share("site_keywords", $settings->keywords);
        view()->share("site_description", $settings->description);
    }

    public function formObject($settings) {
        $settings_array = [];
        foreach($settings as $key => $value) {
            $settings_array[$value->setting_key] = $value->setting_value;
        }
        return (object) $settings_array;
    }
}
