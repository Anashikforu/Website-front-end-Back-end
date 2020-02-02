<?php

use Illuminate\Database\Seeder;

class HomepagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('homepages')->truncate();

        DB::table('homepages')->insert([
            'id' => '1',
            'name' => 'Background Picture',
            'heading' => ' ',
            'content' => ' ',
            'image' => 'public/image/1FvhlRjBMVfWdl27mv1CeKPcFU9CZBsDxybiLO7e.jpeg',
        ]);

        DB::table('homepages')->insert([
            'id' => '2',
            'name' => 'Background Picture 2',
            'heading' => ' ',
            'content' => ' ',
            'image' => 'public/image/Ibmd9RzqEjvukPyqjKrq5yxazmHGgbBtdqW2CQ0n.gif',
        ]);

        DB::table('homepages')->insert([
            'id' => '3',
            'name' => 'Background Picture 3',
            'heading' => ' ',
            'content' => ' ',
            'image' => 'public/image/1FvhlRjBMVfWdl27mv1CeKPcFU9CZBsDxybiLO7e.jpeg',
        ]);

        DB::table('homepages')->insert([
            'id' => '4',
            'name' => 'Section Picture',
            'heading' => ' ',
            'content' => ' ',
            'image' => 'public/image/dz9zd8ZGRW2uKHkYa7GyigtjzAoM2XJt9gWIMuWd.jpeg',
        ]);

    }
}
