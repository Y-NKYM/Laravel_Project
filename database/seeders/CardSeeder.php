<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            //クラブ
            [
                'name' => 'クラブＡ',
                'number' => '1',
                'image' => 'clubA.png',
            ],
            [
                'name' => 'クラブ２',
                'number' => '2',
                'image' => 'club2.png',
            ],
            [
                'name' => 'クラブ３',
                'number' => '3',
                'image' => 'club3.png',
            ],
            [
                'name' => 'クラブ４',
                'number' => '4',
                'image' => 'club4.png',
            ],
            [
                'name' => 'クラブ５',
                'number' => '5',
                'image' => 'club5.png',
            ],
            [
                'name' => 'クラブ６',
                'number' => '6',
                'image' => 'club6.png',
            ],
            [
                'name' => 'クラブ７',
                'number' => '7',
                'image' => 'club7.png',
            ],
            [
                'name' => 'クラブ８',
                'number' => '8',
                'image' => 'club8.png',
            ],
            [
                'name' => 'クラブ９',
                'number' => '9',
                'image' => 'club9.png',
            ],
            [
                'name' => 'クラブ１０',
                'number' => '10',
                'image' => 'club10.png',
            ],
            [
                'name' => 'クラブＪ',
                'number' => '11',
                'image' => 'clubJ.png',
            ],
            [
                'name' => 'クラブＱ',
                'number' => '12',
                'image' => 'clubQ.png',
            ],
            [
                'name' => 'クラブＫ',
                'number' => '13',
                'image' => 'clubK.png',
            ],
            //スペード
            [
                'name' => 'スペードＡ',
                'number' => '1',
                'image' => 'spadeA.png',
            ],
            [
                'name' => 'スペード２',
                'number' => '2',
                'image' => 'spade2.png',
            ],
            [
                'name' => 'スペード３',
                'number' => '3',
                'image' => 'spade3.png',
            ],
            [
                'name' => 'スペード４',
                'number' => '4',
                'image' => 'spade4.png',
            ],
            [
                'name' => 'スペード５',
                'number' => '5',
                'image' => 'spade5.png',
            ],
            [
                'name' => 'スペード６',
                'number' => '6',
                'image' => 'spade6.png',
            ],
            [
                'name' => 'スペード７',
                'number' => '7',
                'image' => 'spade7.png',
            ],
            [
                'name' => 'スペード８',
                'number' => '8',
                'image' => 'spade8.png',
            ],
            [
                'name' => 'スペード９',
                'number' => '9',
                'image' => 'spade9.png',
            ],
            [
                'name' => 'スペード１０',
                'number' => '10',
                'image' => 'spade10.png',
            ],
            [
                'name' => 'スペードＪ',
                'number' => '11',
                'image' => 'spadeJ.png',
            ],
            [
                'name' => 'スペードＱ',
                'number' => '12',
                'image' => 'spadeQ.png',
            ],
            [
                'name' => 'スペードＫ',
                'number' => '13',
                'image' => 'spadeK.png',
            ],
            
            //ハート
            [
                'name' => 'ハートＡ',
                'number' => '1',
                'image' => 'heartA.png',
            ],
            [
                'name' => 'ハート２',
                'number' => '2',
                'image' => 'heart2.png',
            ],
            [
                'name' => 'ハート３',
                'number' => '3',
                'image' => 'heart3.png',
            ],
            [
                'name' => 'ハート４',
                'number' => '4',
                'image' => 'heart4.png',
            ],
            [
                'name' => 'ハート５',
                'number' => '5',
                'image' => 'heart5.png',
            ],
            [
                'name' => 'ハート６',
                'number' => '6',
                'image' => 'heart6.png',
            ],
            [
                'name' => 'ハート７',
                'number' => '7',
                'image' => 'heart7.png',
            ],
            [
                'name' => 'ハート８',
                'number' => '8',
                'image' => 'heart8.png',
            ],
            [
                'name' => 'ハート９',
                'number' => '9',
                'image' => 'heart9.png',
            ],
            [
                'name' => 'ハート１０',
                'number' => '10',
                'image' => 'heart10.png',
            ],
            [
                'name' => 'ハートＪ',
                'number' => '11',
                'image' => 'heartJ.png',
            ],
            [
                'name' => 'ハートＱ',
                'number' => '12',
                'image' => 'heartQ.png',
            ],
            [
                'name' => 'ハートＫ',
                'number' => '13',
                'image' => 'heartK.png',
            ],
            
            //ダイヤ
            [
                'name' => 'ダイヤＡ',
                'number' => '1',
                'image' => 'dimeA.png',
            ],
            [
                'name' => 'ダイヤ２',
                'number' => '2',
                'image' => 'dime2.png',
            ],
            [
                'name' => 'ダイヤ３',
                'number' => '3',
                'image' => 'dime3.png',
            ],
            [
                'name' => 'ダイヤ４',
                'number' => '4',
                'image' => 'dime4.png',
            ],
            [
                'name' => 'ダイヤ５',
                'number' => '5',
                'image' => 'dime5.png',
            ],
            [
                'name' => 'ダイヤ６',
                'number' => '6',
                'image' => 'dime6.png',
            ],
            [
                'name' => 'ダイヤ７',
                'number' => '7',
                'image' => 'dime7.png',
            ],
            [
                'name' => 'ダイヤ８',
                'number' => '8',
                'image' => 'dime8.png',
            ],
            [
                'name' => 'ダイヤ９',
                'number' => '9',
                'image' => 'dime9.png',
            ],
            [
                'name' => 'ダイヤ１０',
                'number' => '10',
                'image' => 'dime10.png',
            ],
            [
                'name' => 'ダイヤＪ',
                'number' => '11',
                'image' => 'dimeJ.png',
            ],
            [
                'name' => 'ダイヤＱ',
                'number' => '12',
                'image' => 'dimeQ.png',
            ],
            [
                'name' => 'ダイヤＫ',
                'number' => '13',
                'image' => 'dimeK.png',
            ],
            
            //その他
            [
                'name' => '裏',
                'number' => 'reverse',
                'image' => 'reverse.png',
            ],
            [
                'name' => 'ＪＯＫＥＲ',
                'number' => 'Joker',
                'image' => 'reverse.png',
            ],
        ]);
    }
}


