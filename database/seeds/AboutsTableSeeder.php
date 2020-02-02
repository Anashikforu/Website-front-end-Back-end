<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('abouts')->truncate();

        DB::table('abouts')->insert([
            'id' => '1',
            'name' => 'Background Picture',
            'heading' => ' ',
            'content' => ' ',
            'image' => 'public/about/image/OqZZPDcP9n7sXNwgZpJ8gsgTPjp0RWhdNK5aItZt.jpeg',
        ]);
        DB::table('abouts')->insert([
            'id' => '2',
            'name' => 'Post 1',
            'heading' => 'CEO',
            'content' => '<p>Bill Gates</p>',
            'image' => 'public/about/image/xVPvsAPJeq0QBsv2b0huNIdQZzl1FcV1kKg64Nzl.jpeg',
        ]);
        DB::table('abouts')->insert([
            'id' => '3',
            'name' => 'Post 2',
            'heading' => 'Managing Director',
            'content' => '<p>Mark Zukerburg</p>',
            'image' => 'public/about/image/GtzZfseTBzxZCHCPlj31nmh35gMbUvcxSaYFaeT3.jpeg',
        ]);
        DB::table('abouts')->insert([
            'id' => '4',
            'name' => 'Post 3',
            'heading' => 'Human Resource',
            'content' => '<p>Ali Murtaza</p>',
            'image' => 'public/about/image/kbCBoT0z1a8Pd1Ep7v8rBijULrutgJLXw2q4ltGF.jpeg',
        ]);

        DB::table('abouts')->insert([
            'id' => '5',
            'name' => 'Content 1',
            'heading' => 'Mainstream popularity',
            'content' => ' ',
            'image' => ' ',
        ]);

        DB::table('abouts')->insert([
            'id' => '6',
            'name' => 'Content 2',
            'heading' => 'Political impact',
            'content' => ' ',
            'image' => ' ',
        ]);

        DB::table('abouts')->insert([
            'id' => '7',
            'name' => 'Content 3',
            'heading' => 'Technology',
            'content' => ' ',
            'image' => ' ',
        ]);

        DB::table('abouts')->insert([
            'id' => '8',
            'name' => 'Content 4',
            'heading' => 'History',
            'content' => ' ',
            'image' => ' ',
        ]);
    }
}
