<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        \App\Models\Version::insert([
            [
                'title' => "1.0",
            ],


        ]);


        \App\Models\Language::insert([
            [
                'id' => "en",
                'title' => "english",
            ],
            [
                'id' => "fa",
                'title' => "persian",
            ],

        ]);

        \App\Models\Setting::insert([
            [
                'default_language_id' => "en",
                'language_id' => "en",
                'version_id' => "1.0",
            ],
        ]);


        \App\Models\Menu::insert([
            [
                'slug' => 'get-started',
                'pid' => null,
                'title' => 'get started',
            ],
            [
                'slug' => 'components',
                'pid' => null,
                'title' => 'components',
            ],
            [
                'slug' => 'installation',
                'pid' => 1,
                'title' => 'installation',
            ],
            [
                'slug' => 'configuration',
                'pid' => 1,
                'title' => 'configuration',
            ],
            [
                'slug' => 'form',
                'pid' => 2,
                'title' => 'form',
            ],
            [
                'slug' => 'button',
                'pid' => 2,
                'title' => 'button',
            ],
        ]);


        \App\Models\MenuTl::insert([
            [
                'menu_id' => 1,
                'language_id' => 'fa',
                'title' => 'شروع',
            ],
            [
                'menu_id' => 2,
                'language_id' => 'fa',
                'title' => 'اجزا',
            ],


        ]);


        \App\Models\User::factory(1)->create();
    }
}
