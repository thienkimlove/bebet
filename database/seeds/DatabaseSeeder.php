<?php

use App\Setting;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");

        Model::unguard();

        Setting::truncate();
        
        $settings = [
            [
                'name' => 'META_INDEX_TITLE',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_INDEX_DESC',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_INDEX_KEYWORDS',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_CATEGORY_DESC',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_CATEGORY_KEYWORDS',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_POST_KEYWORDS',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_CONTACT_TITLE',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_CONTACT_DESC',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_CONTACT_KEYWORDS',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_VIDEO_TITLE',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_VIDEO_DESC',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_VIDEO_KEYWORDS',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_QUESTION_TITLE',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_QUESTION_DESC',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_QUESTION_KEYWORDS',
                'value' => env('SITE_NAME')
            ],

            [
                'name' => 'META_DELIVERY_TITLE',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_DELIVERY_DESC',
                'value' => env('SITE_NAME')
            ],
            [
                'name' => 'META_DELIVERY_KEYWORDS',
                'value' => env('SITE_NAME')
            ],
        ];

        Setting::insert($settings);

        User::truncate();

        factory(User::class)->create([
            'password' => bcrypt('232323'),
            'email' => 'tieumaster@yahoo.com'
        ]);

        \App\Category::create([
            'name' => 'Tin tức',
            'seo_name' => 'Tin tức',
            'desc' => 'Tin tức',
            'keywords' => 'Tin tức'
        ]);

        \App\Category::create([
            'name' => 'Cẩm nang mẹ và bé',
            'seo_name' => 'Cẩm nang mẹ và bé',
            'desc' => 'Cẩm nang mẹ và bé',
            'keywords' => 'Cẩm nang mẹ và bé'
        ]);

        Model::reguard();

        DB::statement("SET foreign_key_checks=1");

    }
}
