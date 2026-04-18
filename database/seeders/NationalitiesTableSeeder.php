<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NationalitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nationalities')->delete();
        
        \DB::table('nationalities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '{"ar": "أفغاني", "en": "Afghan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '{"ar": "ألباني", "en": "Albanian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '{"ar": "جزائري", "en": "Algerian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '{"ar": "أمريكي", "en": "American"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '{"ar": "أندوري", "en": "Andorran"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '{"ar": "أنغولي", "en": "Angolan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '{"ar": "انتيغوا", "en": "Antiguans"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '{"ar": "أرجنتيني", "en": "Argentinean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '{"ar": "أرميني", "en": "Armenian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '{"ar": "أسترالي", "en": "Australian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '{"ar": "نمساوي", "en": "Austrian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => '{"ar": "أذربيجاني", "en": "Azerbaijani"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => '{"ar": "باهامى", "en": "Bahamian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => '{"ar": "بحريني", "en": "Bahraini"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => '{"ar": "بنجلاديشي", "en": "Bangladeshi"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '{"ar": "باربادوسي", "en": "Barbadian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '{"ar": "بربودا", "en": "Barbudans"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => '{"ar": "بوتسواني", "en": "Batswana"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => '{"ar": "بيلاروسي", "en": "Belarusian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => '{"ar": "بلجيكي", "en": "Belgian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => '{"ar": "بليزي", "en": "Belizean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => '{"ar": "بنيني", "en": "Beninese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => '{"ar": "بوتاني", "en": "Bhutanese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => '{"ar": "بوليفي", "en": "Bolivian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => '{"ar": "بوسني", "en": "Bosnian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => '{"ar": "برازيلي", "en": "Brazilian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => '{"ar": "بريطاني", "en": "British"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => '{"ar": "بروناى", "en": "Bruneian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => '{"ar": "بلغاري", "en": "Bulgarian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => '{"ar": "بوركيني", "en": "Burkinabe"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => '{"ar": "بورمي", "en": "Burmese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => '{"ar": "بوروندي", "en": "Burundian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => '{"ar": "كمبودي", "en": "Cambodian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => '{"ar": "كاميروني", "en": "Cameroonian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => '{"ar": "كندي", "en": "Canadian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => '{"ar": "االرأس الأخضر", "en": "Cape Verdean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => '{"ar": "وسط أفريقيا", "en": "Central African"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => '{"ar": "تشادي", "en": "Chadian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => '{"ar": "شيلي", "en": "Chilean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => '{"ar": "صينى", "en": "Chinese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => '{"ar": "كولومبي", "en": "Colombian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => '{"ar": "جزر القمر", "en": "Comoran"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => '{"ar": "كونغولي", "en": "Congolese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => '{"ar": "كوستاريكي", "en": "Costa Rican"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => '{"ar": "كرواتية", "en": "Croatian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => '{"ar": "كوبي", "en": "Cuban"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => '{"ar": "قبرصي", "en": "Cypriot"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => '{"ar": "تشيكي", "en": "Czech"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => '{"ar": "دانماركي", "en": "Danish"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => '{"ar": "جيبوتي", "en": "Djibouti"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => '{"ar": "دومينيكاني", "en": "Dominican"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => '{"ar": "هولندي", "en": "Dutch"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => '{"ar": "تيموري شرقي", "en": "East Timorese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => '{"ar": "اكوادوري", "en": "Ecuadorean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => '{"ar": "مصري", "en": "Egyptian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => '{"ar": "إماراتي", "en": "Emirian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => '{"ar": "غيني  استوائي", "en": "Equatorial Guinean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => '{"ar": "إريتري", "en": "Eritrean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => '{"ar": "إستوني", "en": "Estonian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => '{"ar": "حبشي", "en": "Ethiopian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => '{"ar": "فيجي", "en": "Fijian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => '{"ar": "فلبيني", "en": "Filipino"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => '{"ar": "فنلندي", "en": "Finnish"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => '{"ar": "فرنسي", "en": "French"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => '{"ar": "جابوني", "en": "Gabonese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => '{"ar": "غامبيي", "en": "Gambian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => '{"ar": "جورجي", "en": "Georgian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => '{"ar": "ألماني", "en": "German"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => '{"ar": "غاني", "en": "Ghanaian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => '{"ar": "إغريقي", "en": "Greek"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => '{"ar": "جرينادي", "en": "Grenadian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => '{"ar": "غواتيمالي", "en": "Guatemalan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => '{"ar": "غيني بيساوي", "en": "Guinea-Bissauan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => '{"ar": "غيني", "en": "Guinean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => '{"ar": "جوياني", "en": "Guyanese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => '{"ar": "هايتي", "en": "Haitian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => '{"ar": "هرسكي", "en": "Herzegovinian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => '{"ar": "هندوراسي", "en": "Honduran"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => '{"ar": "هنغاري", "en": "Hungarian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => '{"ar": "إيسلندي", "en": "Icelander"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => '{"ar": "هندي", "en": "Indian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => '{"ar": "إندونيسي", "en": "Indonesian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => '{"ar": "إيراني", "en": "Iranian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => '{"ar": "عراقي", "en": "Iraqi"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => '{"ar": "إيرلندي", "en": "Irish"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => '{"ar": "إيطالي", "en": "Italian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => '{"ar": "إفواري", "en": "Ivorian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => '{"ar": "جامايكي", "en": "Jamaican"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => '{"ar": "ياباني", "en": "Japanese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => '{"ar": "أردني", "en": "Jordanian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => '{"ar": "كازاخستاني", "en": "Kazakhstani"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => '{"ar": "كيني", "en": "Kenyan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => '{"ar": "كيتياني ونيفيسياني", "en": "Kittian and Nevisian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => '{"ar": "كويتي", "en": "Kuwaiti"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => '{"ar": "قيرغيزستان", "en": "Kyrgyz"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => '{"ar": "لاوسي", "en": "Laotian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => '{"ar": "لاتفي", "en": "Latvian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => '{"ar": "لبناني", "en": "Lebanese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => '{"ar": "ليبيري", "en": "Liberian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => '{"ar": "ليبي", "en": "Libyan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => '{"ar": "ليختنشتايني", "en": "Liechtensteiner"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => '{"ar": "لتواني", "en": "Lithuanian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => '{"ar": "لكسمبرغي", "en": "Luxembourger"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => '{"ar": "مقدوني", "en": "Macedonian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => '{"ar": "مدغشقري", "en": "Malagasy"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => '{"ar": "مالاوى", "en": "Malawian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => '{"ar": "ماليزي", "en": "Malaysian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => '{"ar": "مالديفي", "en": "Maldivan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => '{"ar": "مالي", "en": "Malian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => '{"ar": "مالطي", "en": "Maltese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => '{"ar": "مارشالي", "en": "Marshallese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => '{"ar": "موريتاني", "en": "Mauritanian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => '{"ar": "موريشيوسي", "en": "Mauritian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => '{"ar": "مكسيكي", "en": "Mexican"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => '{"ar": "ميكرونيزي", "en": "Micronesian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => '{"ar": "مولدوفي", "en": "Moldovan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => '{"ar": "موناكو", "en": "Monacan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => '{"ar": "منغولي", "en": "Mongolian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => '{"ar": "مغربي", "en": "Moroccan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => '{"ar": "ليسوتو", "en": "Mosotho"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => '{"ar": "لتسواني", "en": "Motswana"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => '{"ar": "موزمبيقي", "en": "Mozambican"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => '{"ar": "ناميبي", "en": "Namibian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => '{"ar": "ناورو", "en": "Nauruan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => '{"ar": "نيبالي", "en": "Nepalese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => '{"ar": "نيوزيلندي", "en": "New Zealander"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => '{"ar": "ني فانواتي", "en": "Ni-Vanuatu"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => '{"ar": "نيكاراغوا", "en": "Nicaraguan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => '{"ar": "نيجري", "en": "Nigerien"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => '{"ar": "كوري شمالي", "en": "North Korean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => '{"ar": "إيرلندي شمالي", "en": "Northern Irish"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => '{"ar": "نرويجي", "en": "Norwegian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => '{"ar": "عماني", "en": "Omani"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => '{"ar": "باكستاني", "en": "Pakistani"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => '{"ar": "بالاوي", "en": "Palauan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => '{"ar": "فلسطيني", "en": "Palestinian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => '{"ar": "بنمي", "en": "Panamanian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => '{"ar": "بابوا غينيا الجديدة", "en": "Papua New Guinean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => '{"ar": "باراغواياني", "en": "Paraguayan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => '{"ar": "بيروفي", "en": "Peruvian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => '{"ar": "بولندي", "en": "Polish"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => '{"ar": "برتغالي", "en": "Portuguese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => '{"ar": "قطري", "en": "Qatari"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => '{"ar": "روماني", "en": "Romanian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => '{"ar": "روسي", "en": "Russian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => '{"ar": "رواندي", "en": "Rwandan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => '{"ar": "لوسياني", "en": "Saint Lucian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => '{"ar": "سلفادوري", "en": "Salvadoran"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => '{"ar": "ساموايان", "en": "Samoan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => '{"ar": "سان مارينيز", "en": "San Marinese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => '{"ar": "ساو توميان", "en": "Sao Tomean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => '{"ar": "سعودي", "en": "Saudi"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => '{"ar": "سكتلندي", "en": "Scottish"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => '{"ar": "سنغالي", "en": "Senegalese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => '{"ar": "صربي", "en": "Serbian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => '{"ar": "سيشلي", "en": "Seychellois"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => '{"ar": "سيرا ليوني", "en": "Sierra Leonean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => '{"ar": "سنغافوري", "en": "Singaporean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => '{"ar": "سلوفاكي", "en": "Slovakian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => '{"ar": "سلوفيني", "en": "Slovenian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => '{"ar": "جزر سليمان", "en": "Solomon Islander"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => '{"ar": "صومالي", "en": "Somali"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => '{"ar": "جنوب افريقيي", "en": "South African"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => '{"ar": "كوري جنوبي", "en": "South Korean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => '{"ar": "إسباني", "en": "Spanish"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => '{"ar": "سري لانكي", "en": "Sri Lankan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => '{"ar": "سوداني", "en": "Sudanese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => '{"ar": "سورينامي", "en": "Surinamer"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => '{"ar": "سوازي", "en": "Swazi"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => '{"ar": "سويدي", "en": "Swedish"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => '{"ar": "سويسري", "en": "Swiss"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => '{"ar": "سوري", "en": "Syrian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => '{"ar": "تايواني", "en": "Taiwanese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => '{"ar": "طاجيكي", "en": "Tajik"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => '{"ar": "تنزاني", "en": "Tanzanian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => '{"ar": "التايلاندي", "en": "Thai"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => '{"ar": "توغواني", "en": "Togolese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => '{"ar": "تونجاني", "en": "Tongan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => '{"ar": "ترينيدادي أو توباغوني", "en": "Trinidadian or Tobagonian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => '{"ar": "تونسي", "en": "Tunisian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => '{"ar": "تركي", "en": "Turkish"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => '{"ar": "توفالي", "en": "Tuvaluan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => '{"ar": "أوغندي", "en": "Ugandan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => '{"ar": "أوكراني", "en": "Ukrainian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => '{"ar": "أوروجواي", "en": "Uruguayan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => '{"ar": "أوزبكستاني", "en": "Uzbekistani"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => '{"ar": "فنزويلي", "en": "Venezuelan"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => '{"ar": "فيتنامي", "en": "Vietnamese"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => '{"ar": "ويلزي", "en": "Welsh"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => '{"ar": "يمني", "en": "Yemenite"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => '{"ar": "زامبي", "en": "Zambian"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => '{"ar": "زيمبابوي", "en": "Zimbabwean"}',
                'is_active' => 1,
                'created_at' => '2026-04-18 00:29:27',
                'updated_at' => '2026-04-18 00:29:27',
            ),
        ));
        
        
    }
}