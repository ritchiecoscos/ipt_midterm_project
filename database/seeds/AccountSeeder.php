<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'acct_name' => 'Coscos JR. Regular Accountt',
                'init_invest' => 425.12,
                'start_date' => '2026-01-20',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Coscos JN. Regular Account',
                'init_invest' => 53612.23,
                'start_date' => '2017-11-18',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Remotcha PD. Trust Fund',
                'init_invest' => 361367.00,
                'start_date' => '2021-07-02',
                'remarks' => 'Done with normal transaction'
            ]
        ];

        foreach($data as $acc){
            \App\Account::create($acc);
        }
    }
}
