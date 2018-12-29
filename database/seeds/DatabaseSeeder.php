<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            "name" => "Mahmoud Gabr",
            "email" => "mhmudhsham8@gmail.com",
            "password" => bcrypt(123456)
        ]);

        // $this->call(UsersTableSeeder::class);
        $setting = Setting::create([
            "setting_key" => "title",
            "setting_value" => "APH"
        ]);

        $setting = Setting::create([
            "setting_key" => "keywords",
            "setting_value" => "APH"
        ]);

        $setting = Setting::create([
            "setting_key" => "description",
            "setting_value" => "APH"
        ]);

        $setting = Setting::create([
            "setting_key" => "author",
            "setting_value" => "APH"
        ]);

        $setting = Setting::create([
            "setting_key" => "email",
            "setting_value" => "APH"
        ]);

        $setting = Setting::create([
            "setting_key" => "fax",
            "setting_value" => "APH"
        ]);

        $setting = Setting::create([
            "setting_key" => "logo",
            "setting_value" => "APH"
        ]);

        $setting = Setting::create([
            "setting_key" => "map",
            "setting_value" => "APH"
        ]);

        $setting = Setting::create([
            "setting_key" => "about_us",
            "setting_value" => "APH"
        ]);

        $setting = Setting::create([
            "setting_key" => "facebook",
            "setting_value" => "APH"
        ]);

        $setting = Setting::create([
            "setting_key" => "twitter",
            "setting_value" => "APH"
        ]);

        $setting = Setting::create([
            "setting_key" => "youtube",
            "setting_value" => "APH"
        ]);

        $setting = Setting::create([
            "setting_key" => "phone",
            "setting_value" => "32434"
        ]);

        $setting = Setting::create([
            "setting_key" => "address",
            "setting_value" => "APH"
        ]);
    }
}
