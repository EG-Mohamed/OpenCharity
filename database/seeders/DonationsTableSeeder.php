<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DonationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('donations')->delete();
        
        \DB::table('donations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'uuid' => '019d9770-d419-7028-af1d-ab09511d78a5',
                'donation_target_id' => NULL,
                'donor_name' => 'Howard Heath',
                'donor_email' => 'wyjoba@mailinator.com',
                'donor_phone' => '+12431568995',
                'amount' => '60.00',
                'currency' => 'EGP',
                'status' => 'pending',
                'payment_gateway' => 'paymob',
                'payment_method' => 'card',
                'transaction_id' => NULL,
                'paid_at' => NULL,
                'anonymous' => 0,
                'notes' => NULL,
                'created_at' => '2026-04-16 19:57:27',
                'updated_at' => '2026-04-17 22:35:55',
                'deleted_at' => '2026-04-17 22:35:55',
            ),
            1 => 
            array (
                'id' => 2,
                'uuid' => '019d9771-1384-729a-a54b-c2c5038893b4',
                'donation_target_id' => NULL,
                'donor_name' => 'Howard Heath',
                'donor_email' => 'wyjoba@mailinator.com',
                'donor_phone' => '+12431568995',
                'amount' => '60.00',
                'currency' => 'EGP',
                'status' => 'pending',
                'payment_gateway' => 'paymob',
                'payment_method' => 'card',
                'transaction_id' => NULL,
                'paid_at' => NULL,
                'anonymous' => 0,
                'notes' => NULL,
                'created_at' => '2026-04-16 19:57:43',
                'updated_at' => '2026-04-17 22:35:55',
                'deleted_at' => '2026-04-17 22:35:55',
            ),
            2 => 
            array (
                'id' => 3,
                'uuid' => '019d9771-2fd4-70eb-813d-4b27d5597db7',
                'donation_target_id' => NULL,
                'donor_name' => 'Howard Heath',
                'donor_email' => 'wyjoba@mailinator.com',
                'donor_phone' => '+12431568995',
                'amount' => '60.00',
                'currency' => 'EGP',
                'status' => 'pending',
                'payment_gateway' => 'paymob',
                'payment_method' => 'card',
                'transaction_id' => '3',
                'paid_at' => NULL,
                'anonymous' => 0,
                'notes' => NULL,
                'created_at' => '2026-04-16 19:57:50',
                'updated_at' => '2026-04-17 22:35:55',
                'deleted_at' => '2026-04-17 22:35:55',
            ),
            3 => 
            array (
                'id' => 4,
                'uuid' => '019d9d28-b2ca-7106-82a9-168a44eb389d',
                'donation_target_id' => 1,
                'donor_name' => 'gdf',
                'donor_email' => NULL,
                'donor_phone' => '+201141173045',
                'amount' => '700.00',
                'currency' => 'EGP',
                'status' => 'paid',
                'payment_gateway' => 'paymob',
                'payment_method' => 'card',
                'transaction_id' => '446378496',
                'paid_at' => '2026-04-17 22:37:04',
                'anonymous' => 0,
                'notes' => NULL,
                'created_at' => '2026-04-17 22:36:23',
                'updated_at' => '2026-04-17 22:37:04',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}