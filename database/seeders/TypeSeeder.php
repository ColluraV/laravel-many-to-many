<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            "HTML",
            "CSS",
            "Bootsrap",
            "JavaScript",
            "GitHub",
            "Vue.js",
            "PHP",
            "MySql",
            "Laravel",
            "Sass",
        ];
        foreach ($types as $type) {
            $newType = new Type();
            $newType->label = $type;
            $newType->save();
        }
    }
}
