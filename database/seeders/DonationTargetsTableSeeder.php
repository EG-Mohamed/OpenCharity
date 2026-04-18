<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DonationTargetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('donation_targets')->delete();

        DB::table('donation_targets')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'type' => 'family',
                    'family_id' => 1,
                    'charity_case_id' => NULL,
                    'title' => 'تبرع لاسرة | نص تجريبي يكون هنا',
                    'description' => 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النصوص في أدوات منصة نفذلي، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى تولدها الأداة، أيضاً ستجد العديد من الأدوات الاخرى التي ستساعدك في حياتك اليومية .',
                    'goal_amount' => '1000.00',
                    'collected_amount' => '0.00',
                    'status' => 'active',
                    'starts_at' => NULL,
                    'ends_at' => NULL,
                    'created_at' => '2026-04-16 19:41:53',
                    'updated_at' => '2026-04-16 19:41:53',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'type' => 'case',
                    'family_id' => NULL,
                    'charity_case_id' => 1,
                    'title' => 'تبرع لحالة | نص تجريبي يكون هنا',
                    'description' => 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النصوص في أدوات منصة نفذلي، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى تولدها الأداة، أيضاً ستجد العديد من الأدوات الاخرى التي ستساعدك في حياتك اليومية .',
                    'goal_amount' => '1500.00',
                    'collected_amount' => '0.00',
                    'status' => 'active',
                    'starts_at' => NULL,
                    'ends_at' => NULL,
                    'created_at' => '2026-04-16 19:42:07',
                    'updated_at' => '2026-04-16 19:42:07',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'type' => 'case',
                    'family_id' => 1,
                    'charity_case_id' => 1,
                    'title' => 'تبرع لاسرة و حالة | نص تجريبي يكون هنا',
                    'description' => 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النصوص في أدوات منصة نفذلي، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى تولدها الأداة، أيضاً ستجد العديد من الأدوات الاخرى التي ستساعدك في حياتك اليومية .',
                    'goal_amount' => '2000.00',
                    'collected_amount' => '0.00',
                    'status' => 'active',
                    'starts_at' => NULL,
                    'ends_at' => NULL,
                    'created_at' => '2026-04-16 19:42:18',
                    'updated_at' => '2026-04-16 19:42:18',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'type' => 'campaign',
                    'family_id' => NULL,
                    'charity_case_id' => NULL,
                    'title' => 'تبرع لحملة | نص تجريبي يكون هنا',
                    'description' => 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النصوص في أدوات منصة نفذلي، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى تولدها الأداة، أيضاً ستجد العديد من الأدوات الاخرى التي ستساعدك في حياتك اليومية .',
                    'goal_amount' => '5000.00',
                    'collected_amount' => '0.00',
                    'status' => 'active',
                    'starts_at' => NULL,
                    'ends_at' => NULL,
                    'created_at' => '2026-04-16 19:42:27',
                    'updated_at' => '2026-04-16 19:42:27',
                    'deleted_at' => NULL,
                ),
        ));


    }
}