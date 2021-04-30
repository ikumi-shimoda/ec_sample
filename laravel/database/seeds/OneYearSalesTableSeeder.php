<?php

use Illuminate\Database\Seeder;

class OneYearSalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('one_year_sales')->truncate();
        DB::table('one_year_sales')->insert([
            [
                'name' => 'スカート',
                'price' => '6000',
                'category' => 3,
                'purchase' => 11,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cill',
                'image' => '01.jpg',
            ],
            [
                'name' => 'ニット',
                'price' => '7000',
                'category' => 1,
                'purchase' => 8,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cill',
                'image' => '02.jpg',
            ],
            [
                'name' => 'パーカー',
                'price' => '8000',
                'category' => 1,
                'purchase' => 6,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cill',
                'image' => '03.jpg',
            ],
            [
                'name' => 'コート',
                'price' => '12000',
                'category' => 1,
                'purchase' => 10,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cill',
                'image' => '04.jpg',
            ],
            [
                'name' => 'サングラス',
                'price' => '5000',
                'category' => 4,
                'purchase' => 7,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cill',
                'image' => '05.jpg',
            ],
            [
                'name' => 'ブレスレット',
                'price' => '9000',
                'category' => 4,
                'purchase' => 3,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cill',
                'image' => '06.jpg',
            ],
            [
                'name' => 'ドレス',
                'price' => '18000',
                'category' => 1,
                'purchase' => 4,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cill',
                'image' => '07.jpg',
            ],
            [
                'name' => 'ワンピース',
                'price' => '7000',
                'category' => 2,
                'purchase' => 15,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cill',
                'image' => '08.jpg',
            ],
        ]);
    }
}
