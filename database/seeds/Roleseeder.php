<?php

use Illuminate\Database\Seeder;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = [
            'admin',
            'member'
        ];

        foreach($roles as $role) {

            \Apps\Models\Role::create
                [
                    'name'=> $role



            ];



            }
        }
        ]

    }
}
