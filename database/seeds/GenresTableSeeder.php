<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('genres')->insert([
        ['genre_name' => 'J-pop'],
        ['genre_name' => 'Rock'],
        ['genre_name' => '洋楽系'],
        ['genre_name' => 'Dubstep'],
        ['genre_name' => 'クラシック'],
        ['genre_name' => 'HIPHOP'],
        ['genre_name' => 'TRAP'],
        ['genre_name' => 'RAP'],
        ['genre_name' => 'EDM'],
        [ 'genre_name' => 'K-POP'],
        [ 'genre_name' => 'R&B'],
        [ 'genre_name' => 'レゲエ'],
        [ 'genre_name' => 'ジャズ'],
        [ 'genre_name' => 'アニメ'],
        [ 'genre_name' => 'ノベル'],
        [ 'genre_name' => 'キャラクター'],
        [ 'genre_name' => '似顔絵'],
        [ 'genre_name' => 'ファッション'],
        [ 'genre_name' => 'リアル'],
        [ 'genre_name' => 'コミック'],
        [ 'genre_name' => 'ポップ'],
        [ 'genre_name' => 'エッセイ'],
        [ 'genre_name' => 'ゆるかわ'],
        [ 'genre_name' => 'ペン画'],
        [ 'genre_name' => '水彩'],
        [ 'genre_name' => 'サイン風'],
        [ 'genre_name' => 'モダン'],
        [ 'genre_name' => 'レトロ'],
    ]);

    }
}
