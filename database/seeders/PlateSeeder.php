<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Plate;
use App\Models\Restaurant;

class PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        // $restaurantIds = Restaurant::all()->pluck('id');

        $restaurants= Restaurant::all();
        $id_restaurant= $restaurants->pluck('id');

        $plates = [
            [
                "Name"=> "BURGER PROVATO",
                "Image"=> "https://www.verosaporegreco.com/MenuDigitale/app/web/upload/products/45_2e0a0fe9afc03f8e567b3d6ee95107b2.jpg",
                "Description"=> "Hamburger di pecora leggero e gustoso, formaggio Kasseri DOP a scaglie, salsa a scelta, pomodoro e crauti viola all’ oximeli",
                "Price"=> "€10.00",
            ],
            [
                "Name"=> "FETA STAGIONATA AL FORNO",
                "Image"=> "https://www.verosaporegreco.com/MenuDigitale/app/web/upload/products/1_1dd23c73d8fe69696396dd928acea1a9.jpg",
                "Description"=> "Feta DOP stagionata in barile, impreziosita con pomodoro, peperoni, olio extra vergine di oliva e origano",
                "Price"=> "€7,50",
            ],
            [
                "Name"=> "NTOLMADAKIA",
                "Image"=> "https://www.verosaporegreco.com/MenuDigitale/app/web/upload/products/7_c7941eaabf858b7fbaa239cb4fdf86c9.jpg",
                "Description"=> "Le famose foglie di vite ripiene di riso accompagnate dalla crema di ceci e tahini",
                "Price"=> "€8,00",
            ],
            [
                "Name"=> "ORATA INTERA ALLA GRIGLIA",
                "Image"=> "https://www.verosaporegreco.com/MenuDigitale/app/web/upload/products/28_ed8006fe36bfddcb5fc33e336565a77c.jpg",
                "Description"=> "Orata allevata in mare aperto, alla griglia, con insalatina greca",
                "Price"=> "€18,00",
            ],
            [
                "Name"=> "KALAMARO FRITTO",
                "Image"=> "https://www.verosaporegreco.com/MenuDigitale/app/web/upload/products/30_60856398d4a575f42e41c29ce5c85bc6.jpg",
                "Description"=> "Calamaro fritto con insalatina greca",
                "Price"=> "€18,00"
            ],
            [
                "Name"=> "PITA SUVLAKI POLLO O MAIALE",
                "Image"=> "https://www.verosaporegreco.com/MenuDigitale/app/web/upload/products/32_cc39583510797ae5b72f2501aeddd4f8.jpg",
                "Description"=> "Pita artigianale, 2 suvlaki di maiale o di pollo, pomodoro fresco, patate fritte e origano (con 1 salsa a scelta)",
                "Price"=> "€9.00",
            ],
            [
                "Name"=> "PEINIRLI CON LUCANICO",
                "Image"=> "https://www.verosaporegreco.com/MenuDigitale/app/web/upload/products/42_0eec2d5b0cd92e9d786dd1de5e2b98ee.jpeg",
                "Description"=> "Peinirli con impasto integrale, formaggio Kasseri e lucanico",
                "Price"=> "€9.00",
            ],
            [
                "Name"=> "BAKLAVAS AL PISTACCHIO",
                "Image"=> "https://www.verosaporegreco.com/MenuDigitale/app/web/upload/products/52_49433920ce527c352edb06f0973c6a38.jpg",
                "Description"=> "Strati alternati di pasta fillo con pistacchio tritato e miele",
                "Price"=> "€7.00",
            ],
            [
                "Name"=> "CREMA DI YOGURT GRECO CON MIELE E NOCI",
                "Image"=> "https://www.verosaporegreco.com/MenuDigitale/app/web/upload/products/54_1e1ddd0e5f90620612d55fc894923de4.jpg",
                "Description"=> "Base di yogurt greco coperto di noci e miele",
                "Price"=> "€7.00",
            ],
            [
                "Name"=> "CREMA DI YOGURT GRECO CON MIELE E NOCI",
                "Image"=> "https://www.verosaporegreco.com/MenuDigitale/app/web/upload/products/54_1e1ddd0e5f90620612d55fc894923de4.jpg",
                "Description"=> "Base di yogurt greco coperto di noci e miele",
                "Price"=> "€7.00",
            ],
        ];
    }
}
