<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use Faker\Generator as Faker;


class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {


        $restaurants = [
            [
                "Name" => "VERO SAPORE GRECO",
                "Image" => "https://www.verosaporegreco.com/wp-content/uploads/2023/08/vero-sapore-greco-brescia-vero-sapore-greco-brescia.jpg",
                "Opening_time" => "11:00:00",
                "Address" => "via Luigi Einaudi, a Roncadelle (Milano)",
            ],
            [
                "Name" => "PIEDRA DEL SOL",
                "Image" => "https://piedradelsol.it/wp-content/uploads/2021/08/Gallery-BORSIERI-1.jpg",
                "Opening_time" => "12:00:00",
                "Address" => "Via Madonna del Paradiso 3, Milano",
            ],
            [
                "Name" => "Wagamama",
                "Image" => "https://rs-menus-api.roocdn.com/images/d12095af-9784-4a4d-b062-01e623fca4d8/image.jpeg",
                "Opening_time" => "12:00:00",
                "Address" => "Via Vitruvio 39, Milano, 20124",
            ],
            [
                "Name" => "Trattoria del sole",
                "Image" => "",
                "Opening_time" => "12:00:00",
                "Address" => "Via Napoli 40, Milano",
            ],
            [
                "Name" => "Exki",
                "Image" => "https://www.iomangioveg.it/images/sobipro/entries/951/img_exki.gif",
                "Opening_time" => "12:00:00",
                "Address" => "Strada 1, Palazzo F2,Milano,20090",
            ],
            [
                "Name" => "Bollpizzino",
                "Image" => "https://scontent.fbds1-1.fna.fbcdn.net/v/t39.30808-6/274868708_2059377684240099_1345037647838983312_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5614bc&_nc_ohc=pM5OuunGv68AX8JsDWA&_nc_ht=scontent.fbds1-1.fna&oh=00_AfBuXmYiF2SMGcN9uoKeoL9z8yn5obzCTmdapi94rbDwAQ&oe=6504ED99",
                "Opening_time" => "11:00:00",
                "Address" => "3 Viale Francesco Restelli, Milano, 20124",
            ],
            [
                "Name" => "Burger King",
                "Image" => "https://lh3.googleusercontent.com/p/AF1QipPTqVvivhbI3bZo1KMFeusH8U-0k0o2xIfXuXqF=s1360-w1360-h1020",
                "Opening_time" => "11:00:00",
                "Address" => "Piazzale Luigi Cadorna, 16, 20123 Milano",
            ],
            [
                "Name" => "KFC",
                "Image" => "https://lh3.googleusercontent.com/p/AF1QipPBdEYjlbIeq9lFW7VsgQKNEbpZIzR-rszYtkKx=s1360-w1360-h1020",
                "Opening_time" => "11:00:00",
                "Address" => "Via Orefici, 10, 20123 Milano",
            ],
            [
                "Name" => "Ristorante da Simona",
                "Image" => "https://media-cdn.tripadvisor.com/media/photo-s/1d/4b/c0/cb/caption.jpg",
                "Opening_time" => "19:00:00",
                "Address" => "Viale Diocleziano 167, Milano",
            ],
            [
                "Name" => "Starbucks",
                "Image" => "https://www.beverfood.com/wp-content/uploads/2020/07/starbucks-grazie-alla-piattaforma-deliveroo-avvia-la-food-delivery-a-milano-e-torino-starbucks-deliverroo.jpg",
                "Opening_time" => "06:00:00",
                "Address" => "Via Borgogna angolo Via Durini, Milano, 20122",
            ]
        ];



        foreach ($restaurants as $restaurant) {

            $newRestaurant = new Restaurant();

            $newRestaurant->name = $restaurant["Name"];


            $newRestaurant->image = $restaurant["Image"];
            $newRestaurant->opening_time = $restaurant["Opening_time"];
            $newRestaurant->address = $restaurant["Address"];
            $newRestaurant->P_IVA = mt_rand(100000000, 999999999);
            $newRestaurant->save();
        }
    }
}
