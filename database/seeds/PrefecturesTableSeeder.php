<?php

use Illuminate\Database\Seeder;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('prefectures')->insert([
            ['prefecture_name' => '北海道'],
            ['prefecture_name' => '青森県'],
            ['prefecture_name' => '岩手県'],
            ['prefecture_name' => '宮城県'],
            ['prefecture_name' => '秋田県'],
            ['prefecture_name' => '山形県'],
            ['prefecture_name' => '福島県'],
            ['prefecture_name' => '茨城県'],
            ['prefecture_name' => '栃木県'],
            [ 'prefecture_name' => '群馬県'],
            [ 'prefecture_name' => '埼玉県'],
            [ 'prefecture_name' => '千葉県'],
            [ 'prefecture_name' => '東京都'],
            [ 'prefecture_name' => '神奈川県'],
            [ 'prefecture_name' => '新潟県'],
            [ 'prefecture_name' => '富山県'],
            [ 'prefecture_name' => '石川県'],
            [ 'prefecture_name' => '福井県'],
            [ 'prefecture_name' => '山梨県'],
            [ 'prefecture_name' => '長野県'],
            [ 'prefecture_name' => '岐阜県'],
            [ 'prefecture_name' => '静岡県'],
            [ 'prefecture_name' => '愛知県'],
            [ 'prefecture_name' => '三重県'],
            [ 'prefecture_name' => '滋賀県'],
            [ 'prefecture_name' => '京都府'],
            [ 'prefecture_name' => '大阪府'],
            [ 'prefecture_name' => '兵庫県'],
            [ 'prefecture_name' => '奈良県'],
            [ 'prefecture_name' => '和歌山県'],
            [ 'prefecture_name' => '鳥取県'],
            [ 'prefecture_name' => '島根県'],
            [ 'prefecture_name' => '岡山県'],
            [ 'prefecture_name' => '広島県'],
            [ 'prefecture_name' => '山口県'],
            [ 'prefecture_name' => '徳島県'],
            [ 'prefecture_name' => '香川県'],
            [ 'prefecture_name' => '愛媛県'],
            [ 'prefecture_name' => '高知県'],
            [ 'prefecture_name' => '福岡県'],
            [ 'prefecture_name' => '佐賀県'],
            [ 'prefecture_name' => '長崎県'],
            [ 'prefecture_name' => '熊本県'],
            [ 'prefecture_name' => '大分県'],
            [ 'prefecture_name' => '宮崎県'],
            [ 'prefecture_name' => '鹿児島県'],
            [ 'prefecture_name' => '沖縄県'],
        ]);

    }

    }
