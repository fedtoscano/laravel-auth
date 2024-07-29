<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            $project = new Project();

            $project->name = $faker->sentence(4);
            $project->description = $faker->sentence(10);
            $project->client = $faker->name();
            $project->start_date = $faker->dateTime("now");
            $project->end_date = $faker->dateTimeThisYear();
            $project->status = $faker->boolean();
            $project->budget = $faker->numberBetween(500, 2500);
            $project->repository = $faker->url();

            $languages = ["HTML", "CSS", "Javascript", "Bootstrap", "Tailwind", "Sass", "PHP", "Laravel", "MySql"];
            $techStack = $faker->randomElements($languages, $faker->numberBetween(1, 4));
            $project->tech_stack = json_encode($techStack);

            $project->project_manager = $faker->name();

            // Generare un array di nomi casuali per i membri del team
            $teamMembers = [];
            for ($j = 0; $j < $faker->numberBetween(1, 4); $j++) {
                $teamMembers[] = $faker->name;
            }

            // Assegna l'array di membri del team codificato in JSON alla proprietà appropriata del progetto
            $project->team_members = json_encode($teamMembers);

            $project->save();
        }
    }
}
