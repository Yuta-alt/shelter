<?php

use Illuminate\Database\Seeder;
use Flynsarmy\CsvSeeder\CsvSeeder;

class SheltersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        // 0629取組リスト
        // base_pathの記載　参照(https://readouble.com/laravel/5.7/ja/helpers.html#method-base-path)
        // エイリアスにCarbonの登録（config直下のapp.php） 右の記載=>　'Carbon' => 'Carbon\Carbon'
        // +Carbonの登録コマンド => $ composer require nesbot/carbon
        // メモリ不足はcloud9立ち上げごとに行う必要あり
            // $ sudo /bin/dd if=/dev/zero of=/var/swap.1 bs=1M count=2048
            // $ sudo /sbin/mkswap /var/swap.1
            // $ sudo /sbin/swapon /var/swap.1　の３点セット　からの
            // $ free -m　で確認
        // mysql -u root からの　select * from myshelter.shelters;　で取り込んだ表一覧の展開
        
        $file = new SplFileObject(base_path('shelter_list/Mie_write.csv'));
        $file->setFlags(
            \SplFileObject::READ_CSV |
            \SplFileObject::READ_AHEAD |
            \SplFileObject::SKIP_EMPTY |
            \SplFileObject::DROP_NEW_LINE
        );
        $list = [];
        $now = Carbon::now();
        foreach($file as $line) {
            $list[] = [
                "place" => $line[0],
                "cities" => $line[1],
                "address" => $line[2],
                "created_at" => $now,
                "updated_at" => $now,
            ];
        }

        DB::table("myshelter.shelters")->insert($list);
    }
}