<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'general.system_name',
                'value' => '"مسار الخير"',
                'created_at' => '2026-04-16 20:56:49',
                'updated_at' => '2026-04-18 22:01:38',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'branding.logo',
                'value' => '"settings/branding/01KPH89B73VHAA53EE2PTXP6XF.png"',
                'created_at' => '2026-04-16 20:56:49',
                'updated_at' => '2026-04-18 22:03:15',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'branding.favicon',
                'value' => '"settings/branding/01KPH89B747PT6BW7JQR81ERQ2.png"',
                'created_at' => '2026-04-16 20:56:49',
                'updated_at' => '2026-04-18 22:01:38',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'media.hero_background_image',
                'value' => NULL,
                'created_at' => '2026-04-16 20:56:49',
                'updated_at' => '2026-04-16 20:56:49',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'media.about_image',
                'value' => NULL,
                'created_at' => '2026-04-16 20:56:49',
                'updated_at' => '2026-04-16 20:56:49',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'contact.primary_phone',
                'value' => '"+201141173045"',
                'created_at' => '2026-04-16 20:56:49',
                'updated_at' => '2026-04-16 21:05:54',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'contact.secondary_phone',
                'value' => '"+201094619204"',
                'created_at' => '2026-04-16 20:56:49',
                'updated_at' => '2026-04-16 21:05:54',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'contact.email',
                'value' => '"me@msaied.com"',
                'created_at' => '2026-04-16 20:56:49',
                'updated_at' => '2026-04-18 22:01:38',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'contact.address',
                'value' => '"العنون هنا بالتفصيل"',
                'created_at' => '2026-04-16 20:56:49',
                'updated_at' => '2026-04-16 21:05:54',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'contact.latitude',
                'value' => '30.02867753',
                'created_at' => '2026-04-16 20:56:49',
                'updated_at' => '2026-04-18 22:01:38',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'contact.longitude',
                'value' => '31.24786377',
                'created_at' => '2026-04-16 20:56:49',
                'updated_at' => '2026-04-18 22:01:38',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'general.description',
                'value' => '"مؤسسة مسار هي مؤسسة افتراضية تجريبة لمحاكة التجربة علي النظام"',
                'created_at' => '2026-04-16 21:14:08',
                'updated_at' => '2026-04-18 22:01:38',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'contact.social_links.0.icon',
                'value' => '"fab-facebook-f"',
                'created_at' => '2026-04-16 21:14:08',
                'updated_at' => '2026-04-16 21:14:08',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'contact.social_links.0.url',
                'value' => '"https://facebook.com"',
                'created_at' => '2026-04-16 21:14:08',
                'updated_at' => '2026-04-18 22:01:38',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'donations.online_enabled',
                'value' => 'true',
                'created_at' => '2026-04-18 16:42:06',
                'updated_at' => '2026-04-18 17:53:56',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'branding.primary_color',
                'value' => '"#cc1414"',
                'created_at' => '2026-04-18 16:46:44',
                'updated_at' => '2026-04-18 22:02:52',
            ),
        ));
        
        
    }
}