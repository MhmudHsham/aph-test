<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Setting;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $settings = Setting::all();
        $settings = $this->formObject($settings);
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
