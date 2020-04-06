<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert([
            ['comment' => 'Laravel是一套简洁、优雅的PHP Web开发框架(PHP Web Framework)。它可以让你从面条一样杂乱的代码中解脱出来；它可以帮你构建一个完美的网络APP，而且每行代码都可以简洁、富于表达力',
            'article_id' => rand(1,3) ],
            ['comment' => 'Swoole虽然是标准的PHP扩展，实际上与普通的扩展不同。普通的扩展只是提供一个库函数。而Swoole扩展在运行后会接管PHP的控制权，进入事件循环。当IO事件发生后底层会自动回调指定的PHP函数出来；它可以帮你构建一个完美的网络APP，而且每行代码都可以简洁、富于表达力',
            'article_id' => rand(1,3) ],
            ['comment' => 'Swoole虽然是标准的PHP扩展，实际上与普通的扩展不同。普通的扩展只是提供一个库函数。而Swoole扩展在运行后会接管PHP的控制权，进入事件循环。当IO事件发生后底层会自动回调指定的PHP函数可以帮你构建一个完美的网络APP，而且每行代码都可以简洁、富于表达力',
            'article_id' => rand(1,3) ],
            ['comment' => '会接管PHP的控制权，进入事件循环。当IO事件发生后底层会自动回调指定的PHP函数可以帮你构建一个完美的网络APP，而且每行代码都可以简洁、富于表达力',
            'article_id' => rand(1,3) ],
            ['comment' => 'Swoole虽然是标准的PHP扩展，实际上与普通的扩展不同。普通的扩展只是提供一个库函数。而Swoole扩展在运行后会接管PHP的而且每行代码都可以简洁、富于表达力',
            'article_id' => rand(1,3) ],
        ]);
    }
}
