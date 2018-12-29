<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class SettingController extends AdminController
{
    public function getSettings() {
        $settings = Setting::all();
        $settings = $this->formObject($settings);
        return view("admin.settings", compact("settings"));
    }

    public function formObject($settings) {
        $settings_array = [];
        foreach($settings as $key => $value) {
            $settings_array[$value->setting_key] = $value->setting_value;
        }
        return (object) $settings_array;
    }

    public function setSettings(Request $request) {
        foreach ($request->all() as $setting_key => $setting_value) {
            if($request->logo && $request->logo != "") {
                $image = $request->file('logo');
                $logo = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/settings');
                try {
                    $image->move($destinationPath, $logo);
                } catch(\Exception $e) {
                    // dd($e->getMessage());
                }
                Setting::where("setting_key", "logo")->update(["setting_value" => $logo]);
            } else {
                Setting::where("setting_key", $setting_key)->update(["setting_value" => $setting_value]);
            }
        }
        return redirect()->back()->with(['message' => "Settings updated successfully."]);
    }
}
