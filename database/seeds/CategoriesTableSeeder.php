<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakeValues = [
            [
                'name' => 'Notebooks',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'status' => true,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Smartphones',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'status' => true,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Smart TV',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'status' => true,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        ];

        \Contactamax\Entities\Category::insert($fakeValues);
    }
}
