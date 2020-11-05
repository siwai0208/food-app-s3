<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->truncate(); //2回目実行の際にシーダー情報をクリア	
        DB::table('shops')->insert([	
           'name' =>'よよい軒',
           'email' =>'yoyoi@example.com',
           'password' =>'yoyoi123',
           'phone' =>'09-1111-1111',
           'detail' =>'日本料理を提供しています',
           'imgpath' =>'よよい軒.jpg',
        ]);	
     
        DB::table('shops')->insert([	
           'name' =>'アロイ・レストラン',
           'email' =>'aroi@example.com',
           'password' =>'aroi123',
           'phone' =>'09-2222-2222',
           'detail' =>'創業30年のタイ料理レストランです',
           'imgpath' =>'アロイ・レストラン.jpg',
        ]);	
     
        DB::table('shops')->insert([	
           'name' =>'三郎ラーメン',
           'email' =>'saburo@example.com',
           'password' =>'saburo123',
           'phone' =>'09-3333-3333',
           'detail' =>'日系ラーメンを提供しています',
           'imgpath' =>'三郎ラーメン.jpg',
        ]);	
     
        DB::table('shops')->insert([	
           'name' =>'バーン・タニタ',
           'email' =>'baan@example.com',
           'password' =>'baan123',
           'phone' =>'09-4444-4444',
           'detail' =>'創業50年のタイ料理レストランです',
           'imgpath' =>'バーン・タニタ.jpg',
        ]);	
     
        DB::table('shops')->insert([	
           'name' =>'ピザ・モット',
           'email' =>'pizza@example.com',
           'password' =>'pizza123',
           'phone' =>'09-5555-5555',
           'detail' =>'イタリア料理を提供しています',
           'imgpath' =>'ピザ・モット.jpg',
        ]);
    }
}
