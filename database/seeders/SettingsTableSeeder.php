<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->truncate();
        $settings = [
            ['id' => 1, 'key' => 'site_name', 'value' => 'SmartApp'],
            ['id' => 2, 'key' => 'site_title', 'value' => 'Call tracking, attribution, reporting and analytics for marketers, digital agencies, call centers, pay per call, and performance networks.'],
            ['id' => 3, 'key' => 'default_email_address', 'value' => 'admin@admin.com'],
            ['id' => 4, 'key' => 'contact_no', 'value' => '1234567890'],
            ['id' => 5, 'key' => 'currency_code', 'value' => 'USD'],
            ['id' => 6, 'key' => 'currency_symbol', 'value' => '$'],
            ['id' => 7, 'key' => 'site_full_logo', 'value' => 'img/setting/nVwGtMKHjltJa1K8c1TbmzPHp.png'],
            ['id' => 8, 'key' => 'site_small_logo', 'value' => ''],
            ['id' => 9, 'key' => 'site_favicon', 'value' => 'img/setting/ECxnit8HM0vhs4Y1EJhFjCqoz.png'],
            ['id' => 10, 'key' => 'site_version', 'value' => 'ver:1.0'],
            ['id' => 11, 'key' => 'footer_copyright_text', 'value' => 'Design & Develop by SmartMedia'],
            ['id' => 12, 'key' => 'seo_meta_title', 'value' => 'Call tracking, attribution, reporting and analytics for marketers, digital agencies, call centers, pay per call, and performance networks.'],
            ['id' => 13, 'key' => 'seo_meta_description', 'value' => 'Call tracking, attribution, reporting and analytics for marketers, digital agencies, call centers, pay per call, and performance networks.'],
            ['id' => 14, 'key' => 'social_facebook', 'value' => ''],
            ['id' => 15, 'key' => 'social_twitter', 'value' => ''],
            ['id' => 16, 'key' => 'social_instagram', 'value' => ''],
            ['id' => 17, 'key' => 'social_linkedin', 'value' => ''],
            ['id' => 18, 'key' => 'google_analytics', 'value' => ''],
            ['id' => 19, 'key' => 'facebook_pixels', 'value' => ''],
            ['id' => 20, 'key' => 'fb_account_id', 'value' => '4144593335570630'],
            ['id' => 21, 'key' => 'fb_app_id', 'value' => '2.53E+14'],
            ['id' => 22, 'key' => 'fb_access_token', 'value' => 'EAADmSlH9wEMBOZCZC201ESdUa0LMm2ZC12YjSVLldpbqiaQRwoe0JiJjAcv4JgHwJ3KLxdl71jRIYF8t7T1ZAwBV6PZCNbvKaHHwlM4EPwOYwhDZCC9Dx3mGYbT5uRdEGgZA3Wh5OkvyZArhTupFZAVzz2Xp4jpAW4w0V4VIYWHkUBPWOitcQOlErMUMbT00Ug5dwV264aPqxqHuaVN4f'],
            ['id' => 23, 'key' => 'fb_app_secret', 'value' => '97e4d5e30554a076a267a38243004b04'],
            ['id' => 24, 'key' => 'ringba_access_token', 'value' => '09f0c9f0c6cc3339a32dd546b76a44b668599600da8147e79e10dccd3fc7a005cb3c276500f080e3e08c8c210ef678053fc98d0f02370325fc8a6162c82c7982c92e49b448e48404d43a0b17e07d217fa14bb7faeee19a38ead602a2deee3b83959df4975fa613fa622d879da265fa0c5da2fb50'],
            ['id' => 25, 'key' => 'ringba_account_id', 'value' => 'RA3c07bc4623ba460f9d379b95b3d5ed41'],
            ['id' => 26, 'key' => 'fb_api_version', 'value' => 'v17.0'],
            ['id' => 27, 'key' => 'fb_business_id', 'value' => '4144593335570630'],
            ['id' => 28, 'key' => 'fb_business_id2', 'value' => '4144593335570630'],
            ['id' => 29, 'key' => 'reference_estimated_sale_duration', 'value' => '480'],
            ['id' => 30, 'key' => 'retreaver_api_key', 'value' => 't8J3N-N3Jnz2RkeFtZw5'],
            ['id' => 31, 'key' => 'retreaver_company_id', 'value' => '162145'],
        ];

        \DB::table('settings')->insert($settings);
    }
}
