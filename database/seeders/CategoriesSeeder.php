<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::firstOrCreate(['name'=>'html'],
        [
            'name' => 'Html',
            'slug' => 'html',
            'description' => 'abgubgrf ruhhljfdg jdhbua uihghioa duihao gf aiohgaoihg aighaogr iuhg aiohg aoriugh',
        ]);

        Category::firstOrCreate(['name'=>'css'],
        [
            'name' => 'Css',
            'slug' => 'css',
            'description' => 'abgubgrf ruhhljfdg jdhbua uihghioa duihao gf aiohgaoihg aighaogr iuhg aiohg aoriugh',
        ]);

        Category::firstOrCreate(['name'=>'php'],
        [
            'name' => 'Php',
            'slug' => 'php',
            'description' => 'abgubgrf ruhhljfdg jdhbua uihghioa duihao gf aiohgaoihg aighaogr iuhg aiohg aoriugh',
        ]);

        Category::firstOrCreate(['name'=>'laravel'],
        [
            'name' => 'Laravel',
            'slug' => 'laravel',
            'description' => 'abgubgrf ruhhljfdg jdhbua uihghioa duihao gf aiohgaoihg aighaogr iuhg aiohg aoriugh',
        ]);

        Category::firstOrCreate(['name'=>'codignator'],
        [
            'name' => 'Codignator',
            'slug' => 'codignator',
            'description' => 'abgubgrf ruhhljfdg jdhbua uihghioa duihao gf aiohgaoihg aighaogr iuhg aiohg aoriugh',
        ]);

        Category::firstOrCreate(['name'=>'cakephp'],
        [
            'name' => 'CakePhp',
            'slug' => 'cakephp',
            'description' => 'abgubgrf ruhhljfdg jdhbua uihghioa duihao gf aiohgaoihg aighaogr iuhg aiohg aoriugh',
        ]);
    }
}
