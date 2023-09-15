<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Restaurant;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $categoriesList = [
            'italiano',
            'messicano',
            'pizzeria',
            'fast food',
            'vegetariano',
            'caffetteria',
            'greco',
            'cinese',
            'giapponese',
        ];

        foreach ($categoriesList as $category) {

            $newCategory = new Category();

            $newCategory->name = $category;
            $newCategory->save();
        }
    }
}
