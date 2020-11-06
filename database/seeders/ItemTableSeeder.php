<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('items')->truncate(); //2回目実行の際にシーダー情報をクリア
      DB::table('items')->insert([
         'name' => 'トムヤムクン',
         'detail' => '本場タイの味',
         'price' => '80',
         'imgpath' => 'トムヤムクン.jpg',
         'type1' => 'スープ',
         'type2' => 'エビ',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'カオマンガイ',
         'detail' => '本場タイの味',
         'price' => '40',
         'imgpath' => 'カオマンガイ.jpg',
         'type1' => 'ライス',
         'type2' => '鳥',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'ガパオライス',
         'detail' => '本場タイの味',
         'price' => '50',
         'imgpath' => 'ガパオライス.jpg',
         'type1' => 'ライス',
         'type2' => '豚',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'プー・パッポンカレー',
         'detail' => '本場タイの味',
         'price' => '200',
         'imgpath' => 'プー・パッポンカレー.jpg',
         'type1' => 'ライス',
         'type2' => 'カレー',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'グリーンカレー',
         'detail' => '本場タイの味',
         'price' => '150',
         'imgpath' => 'グリーンカレー.jpg',
         'type1' => 'ライス',
         'type2' => 'カレー',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'パッタイ（エビ）',
         'detail' => '本場タイの味',
         'price' => '120',
         'imgpath' => 'パッタイ（エビ）.jpg',
         'type1' => '麺類',
         'type2' => '麺',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'パッタイ（豚）',
         'detail' => '本場タイの味',
         'price' => '100',
         'imgpath' => 'パッタイ（豚）.jpg',
         'type1' => '麺類',
         'type2' => '麺',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'ラーブ（アヒル）',
         'detail' => '本場タイの味',
         'price' => '60',
         'imgpath' => 'ラーブ（アヒル）.jpg',
         'type1' => '惣菜',
         'type2' => '鳥',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'コムヤーン',
         'detail' => '本場タイの味',
         'price' => '60',
         'imgpath' => 'コムヤーン.jpg',
         'type1' => '焼き物',
         'type2' => '豚',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'ガイヤーン',
         'detail' => '本場タイの味',
         'price' => '90',
         'imgpath' => 'ガイヤーン.jpg',
         'type1' => '焼き物',
         'type2' => '鳥',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'クイッティアオ',
         'detail' => '本場タイの味',
         'price' => '30',
         'imgpath' => 'クイッティアオ.jpg',
         'type1' => '麺類',
         'type2' => '麺',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'ソムタム・タイ',
         'detail' => '本場タイの味',
         'price' => '50',
         'imgpath' => 'ソムタム・タイ.jpg',
         'type1' => 'サラダ',
         'type2' => 'パパイヤ',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'ソムタム・プー',
         'detail' => '本場タイの味',
         'price' => '60',
         'imgpath' => 'ソムタム・プー.jpg',
         'type1' => 'サラダ',
         'type2' => 'パパイヤ',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'プラーガポン・トート・ナンプラー',
         'detail' => '本場タイの味',
         'price' => '200',
         'imgpath' => 'プラーガポン・トート・ナンプラー.jpg',
         'type1' => '揚げ物',
         'type2' => '魚',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'ガイトートナンプラー',
         'detail' => '本場タイの味',
         'price' => '60',
         'imgpath' => 'ガイトートナンプラー.jpg',
         'type1' => '揚げ物',
         'type2' => '豚',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'ムートートナンプラー',
         'detail' => '本場タイの味',
         'price' => '80',
         'imgpath' => 'ムートートナンプラー.jpg',
         'type1' => '揚げ物',
         'type2' => '鳥',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'マッサマンカレー',
         'detail' => '本場タイの味',
         'price' => '130',
         'imgpath' => 'マッサマンカレー.jpg',
         'type1' => 'ライス',
         'type2' => 'カレー',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'クンパオ',
         'detail' => '本場タイの味',
         'price' => '200',
         'imgpath' => 'クンパオ.jpg',
         'type1' => '焼き物',
         'type2' => 'エビ',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'トムカーガイ',
         'detail' => '本場タイの味',
         'price' => '100',
         'imgpath' => 'トムカーガイ.jpg',
         'type1' => 'スープ',
         'type2' => '鳥',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'ヤムウンセン',
         'detail' => '本場タイの味',
         'price' => '50',
         'imgpath' => 'ヤムウンセン.jpg',
         'type1' => 'サラダ',
         'type2' => '麺',
         'type3' => 'タイ料理',
      ]);

      DB::table('items')->insert([
         'name' => 'サーモン刺身',
         'detail' => '日本の味',
         'price' => '180',
         'imgpath' => 'サーモン刺身.jpg',
         'type1' => '惣菜',
         'type2' => '魚',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => 'サーモンにぎり',
         'detail' => '日本の味',
         'price' => '80',
         'imgpath' => 'サーモンにぎり.jpg',
         'type1' => 'ライス',
         'type2' => '魚',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => 'サーモン丼',
         'detail' => '日本の味',
         'price' => '150',
         'imgpath' => 'サーモン丼.jpg',
         'type1' => 'ライス',
         'type2' => '魚',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => '餃子（30個）',
         'detail' => '日本の味',
         'price' => '300',
         'imgpath' => '餃子（30個）.jpg',
         'type1' => '惣菜',
         'type2' => '豚',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => '豚骨ラーメン',
         'detail' => '日本の味',
         'price' => '200',
         'imgpath' => '豚骨ラーメン.jpg',
         'type1' => '麺類',
         'type2' => '麺',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => '豚やきそば',
         'detail' => '日本の味',
         'price' => '180',
         'imgpath' => 'やきそば.jpg',
         'type1' => '麺類',
         'type2' => '麺',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => 'トムヤムラーメン',
         'detail' => '日本の味',
         'price' => '150',
         'imgpath' => 'トムヤムラーメン.jpg',
         'type1' => '麺類',
         'type2' => '麺',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => 'カレーライス',
         'detail' => '日本の味',
         'price' => '150',
         'imgpath' => 'カレーライス.jpg',
         'type1' => 'ライス',
         'type2' => 'カレー',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => '焼き鳥セット',
         'detail' => '日本の味',
         'price' => '150',
         'imgpath' => '焼き鳥セット.jpg',
         'type1' => '惣菜',
         'type2' => '鳥',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => '焼きサバ定食',
         'detail' => '日本の味',
         'price' => '250',
         'imgpath' => '焼きサバ定食.jpg',
         'type1' => 'ライス',
         'type2' => '魚',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => 'たこやき',
         'detail' => '日本の味',
         'price' => '100',
         'imgpath' => 'たこやき.jpg',
         'type1' => '惣菜',
         'type2' => '魚',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => '醤油ラーメン',
         'detail' => '日本の味',
         'price' => '200',
         'imgpath' => '醤油ラーメン.jpg',
         'type1' => '麺類',
         'type2' => '麺',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => 'ハンバーグ定食',
         'detail' => '日本の味',
         'price' => '250',
         'imgpath' => 'ハンバーグ定食.jpg',
         'type1' => 'ライス',
         'type2' => '豚',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => 'かつ丼',
         'detail' => '日本の味',
         'price' => '190',
         'imgpath' => 'かつ丼.jpg',
         'type1' => 'ライス',
         'type2' => '豚',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => 'えび天丼',
         'detail' => '日本の味',
         'price' => '160',
         'imgpath' => 'えび天丼.jpg',
         'type1' => 'ライス',
         'type2' => 'エビ',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => '豚丼',
         'detail' => '日本の味',
         'price' => '140',
         'imgpath' => '豚丼.jpg',
         'type1' => 'ライス',
         'type2' => '豚',
         'type3' => '日本料理',
      ]);

      DB::table('items')->insert([
         'name' => 'ピザ・マルゲリータ',
         'detail' => 'イタリアの味',
         'price' => '240',
         'imgpath' => 'ピザ・マルゲリータ.jpg',
         'type1' => 'ピザ',
         'type2' => 'ピザ',
         'type3' => 'イタリア料理',
      ]);

      DB::table('items')->insert([
         'name' => 'ピザ・ハワイアン',
         'detail' => 'イタリアの味',
         'price' => '240',
         'imgpath' => 'ピザ・ハワイアン.jpg',
         'type1' => 'ピザ',
         'type2' => 'ピザ',
         'type3' => 'イタリア料理',
      ]);

      DB::table('items')->insert([
         'name' => 'カルボナーラ',
         'detail' => 'イタリアの味',
         'price' => '110',
         'imgpath' => 'カルボナーラ.jpg',
         'type1' => '麺類',
         'type2' => '麺',
         'type3' => 'イタリア料理',
      ]);

      DB::table('items')->insert([
         'name' => 'トマトスパゲッティ',
         'detail' => 'イタリアの味',
         'price' => '100',
         'imgpath' => 'トマトスパゲッティ.jpg',
         'type1' => '麺類',
         'type2' => '麺',
         'type3' => 'イタリア料理',
      ]);

    }
}
