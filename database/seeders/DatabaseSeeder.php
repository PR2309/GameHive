<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            "name" => "Admin",
            "username" => "admin",
            "email" => "admin@admin.com",
            "role" => 3,
            "password" => "admin",
        ]);

        // \App\Models\Category::create([
        //     "title" => "Uncategorized",
        //     "slug" => "uncategorized",
        // ]);

        \App\Models\SiteSetting::create([
            "site_title" => "GameHive",
            "tagline" => "A community forum for Game Lovers",
            "description" => "This thread is all about sharing your current favorite games, cool strategies you've picked up, and connecting with other players who enjoy the same titles. Whether you're into competitive shooters, open-world adventures, or cozy indies, drop your thoughts, tips, or even LFG (looking for group) requests here. Let's build a community where everyone can level up together! 🎮✨",
            "logo_dark" => "logo_dark.png",
            "logo_light" => "logo_light.png",
            "copyright_text" => "© 2022, Oredoo, All Rights Reserved.",
            "enable_registration" => "1",
        ]);

        \App\Models\Menu::create([
            "header_menu" => json_encode([["href"=>"http://127.0.0.1:8000/","icon"=>"","text"=>"Home","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"AboutUs","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"ContactUs","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"PrivacyPolicy","tooltip"=>"","children"=>[]]]),
            "footer_menu" => json_encode([["href"=>"http://127.0.0.1:8000/","icon"=>"","text"=>"Home","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"AboutUs","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"ContactUs","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"PrivacyPolicy","tooltip"=>"","children"=>[]]]),
        ]);
    }
}
