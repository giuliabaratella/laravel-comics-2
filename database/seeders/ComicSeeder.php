<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;


class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('db.comics');

        foreach ($data as $item) {
            $new_comic = new Comic();
            $new_comic->title = $item["title"];
            $new_comic->description = $item["description"];
            $new_comic->thumb = $item["thumb"];
            $new_comic->price = $item["price"];
            $new_comic->sale_date = $item["sale_date"];
            $new_comic->series = $item["series"];
            $new_comic->type = $item["type"];
            $new_comic->save();
        }
    }
}
