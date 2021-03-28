<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->truncate();
        DB::table('infos')->insert([
            [
                'title' => '新宿店がNEW OPEN',
                'contents'    => '新宿点がNEW OPENしました。ぜひご来店ください。',
                'created_at' => Carbon::create(2021, 2, 21),
            ],
            [
                'title' => 'TVで紹介されました！',
                'contents'    => 'お昼の情報番組で取材を受けました、人気のアイテムを見に来てください。',
                'created_at' => Carbon::create(2021, 3, 2),
            ],
            [
                'title' => '営業時間変更のお知らせ',
                'contents'    => '緊急事態宣言により、ショップの時短営業を行います。申し訳ございません。',
                'created_at' => Carbon::create(2021, 3, 20),
            ],
        ]);
    }
}
