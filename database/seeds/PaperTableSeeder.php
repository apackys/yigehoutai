<?php

use Illuminate\Database\Seeder;

class PaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data=[[
           'paper_name' => '五年高考三年模拟',
           'start_time' => strtotime('+7 days'),
           'duration' =>'120',
       ],
       [
        'paper_name' => '黄冈中学密卷',
        'start_time' => strtotime('+5 days'),
        'duration' =>'120',
       ],[
        'paper_name' => '衡水中学试题',
        'start_time' => strtotime('+9 days'),
        'duration' =>'120',
    ],[
        'paper_name' => '长郡中学模拟',
        'start_time' => strtotime('+6 days'),
        'duration' =>'120',
    ]
       ];
       DB::table('paper')->insert($data);
    }
}
