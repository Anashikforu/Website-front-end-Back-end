<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('services')->truncate();

        DB::table('services')->insert([
            'id' => '1',
            'name' => 'Background Picture',
            'heading' => ' ',
            'content' => ' ',
            'image' => 'public/services/image/TnbgJDWBN36ZDMvNv10MH5Q1KjdpYYLV5XOuEzwf.jpeg',
        ]);
        DB::table('services')->insert([
            'id' => '2',
            'name' => 'Content 1',
            'heading' => 'WEB DESIGN',
            'content' => '<p>Uaerat litora, taciti quaerat dolor ligula laoreet omnis aut scelerisque ex fuga platea eveniet pulvinar praesent</p>',
            'image' => ' ',
        ]);
        DB::table('services')->insert([
            'id' => '3',
            'name' => 'Content 2',
            'heading' => 'DEVELOPMENT',
            'content' => '<p>Uaerat litora, taciti quaerat dolor ligula laoreet omnis aut scelerisque ex fuga platea eveniet pulvinar praesent</p>',
            'image' => ' ',
        ]);
        DB::table('services')->insert([
            'id' => '4',
            'name' => 'Content 3',
            'heading' => 'PHOTOGRAPHY',
            'content' => '<p>Uaerat litora, taciti quaerat dolor ligula laoreet omnis aut scelerisque ex fuga platea eveniet pulvinar praesent</p>',
            'image' => ' ',
        ]);

        DB::table('services')->insert([
            'id' => '5',
            'name' => 'Content 4',
            'heading' => 'BRANDING',
            'content' => '<p>Uaerat litora, taciti quaerat dolor ligula laoreet omnis aut scelerisque ex fuga platea eveniet pulvinar praesent</p>',
            'image' => ' ',
        ]);

        DB::table('services')->insert([
            'id' => '6',
            'name' => 'Content 5',
            'heading' => 'SUPPORT',
            'content' => '<p>Uaerat litora, taciti quaerat dolor ligula laoreet omnis aut scelerisque ex fuga platea eveniet pulvinar praesent</p>',
            'image' => ' ',
        ]);

        DB::table('services')->insert([
            'id' => '7',
            'name' => 'Content 6',
            'heading' => 'MARKETING',
            'content' => '<p>Uaerat litora, taciti quaerat dolor ligula laoreet omnis aut scelerisque ex fuga platea eveniet pulvinar praesent</p>',
            'image' => ' ',
        ]);

    }
}
