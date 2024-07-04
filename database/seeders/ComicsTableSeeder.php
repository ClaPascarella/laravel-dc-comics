<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fumetto = new Comic();
        $fumetto->title = "Action Comics #1000: The Deluxe Edition";
        $fumetto->description = "The celebration of 1,000 issues of Action Comics";
        $fumetto->thumb = "https://imgs.search.brave.com/aUNyvZBXUulb963JH7KnQm9AMr8bcBoLsiHREOqayIU/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvOWZm/ZWYzMDMtMGZhYy00/OGRkLTg3ODctYzUy/NTk0MDk2ODAwXzEu/MTc1ZDk1Mjg2NzY0/OGEwOTczMTY2NGMy/MTE1NjNlYWIuanBl/Zz9vZG5XaWR0aD02/MTImb2RuSGVpZ2h0/PTYxMiZvZG5CZz1m/ZmZmZmY";
        $fumetto->price = 19.99;
        $fumetto->series = "Batman: White Knight Presents: Harley Quinn";
        $fumetto->sale_date = 2018;
        $fumetto->type = "comic book";
        $fumetto->artists = "Clay Mann";
        $fumetto->writers =  "Brad Meltzer";
        $fumetto->save();
    }
}
