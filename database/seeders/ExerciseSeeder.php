<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Exercise;
 use Illuminate\Support\Facades\File;

class ExerciseSeeder extends Seeder
{
    public function run()
    {
         $json = File::get(storage_path('app/public/asd.json'));

        $exercises = json_decode($json);

        foreach ($exercises as $exercise) {
            Exercise::create([
                'body_part' => $exercise->bodyPart,
                'equipment' => $exercise->equipment,
                'gif_url' => $exercise->gifUrl,
                'name' => $exercise->name,
                'target' => $exercise->target,
                'secondary_muscles' => json_encode($exercise->secondaryMuscles),
                'instructions' => json_encode($exercise->instructions)
            ]);
        }
    }
}

 