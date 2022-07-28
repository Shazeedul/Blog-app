<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::firstOrCreate(['name'=>'html'],
        [
            'name' => 'Html Tags',
            'slug' => 'html-tags',
            'description' => 'abgubgrf ruhhljfdg jdhbua uihghioa duihao gf aiohgaoihg aighaogr iuhg aiohg aoriugh',
        ]);

        Tag::firstOrCreate(['name'=>'css'],
        [
            'name' => 'Css Attribute',
            'slug' => 'css-attribute',
            'description' => 'abgubgrf ruhhljfdg jdhbua uihghioa duihao gf aiohgaoihg aighaogr iuhg aiohg aoriugh',
        ]);

        Tag::firstOrCreate(['name'=>'php'],
        [
            'name' => 'Php Development',
            'slug' => 'php-development',
            'description' => 'abgubgrf ruhhljfdg jdhbua uihghioa duihao gf aiohgaoihg aighaogr iuhg aiohg aoriugh',
        ]);

        Tag::firstOrCreate(['name'=>'laravel'],
        [
            'name' => 'Laravel Beginner',
            'slug' => 'laravel-beginner',
            'description' => 'abgubgrf ruhhljfdg jdhbua uihghioa duihao gf aiohgaoihg aighaogr iuhg aiohg aoriugh',
        ]);

        Tag::firstOrCreate(['name'=>'codignator'],
        [
            'name' => 'Codignator',
            'slug' => 'codignator',
            'description' => 'abgubgrf ruhhljfdg jdhbua uihghioa duihao gf aiohgaoihg aighaogr iuhg aiohg aoriugh',
        ]);

        Tag::firstOrCreate(['name'=>'cakephp'],
        [
            'name' => 'Cake Php',
            'slug' => 'cake-php',
            'description' => 'abgubgrf ruhhljfdg jdhbua uihghioa duihao gf aiohgaoihg aighaogr iuhg aiohg aoriugh',
        ]);
    }
}
