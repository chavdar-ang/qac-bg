<?php

use App\Topic;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        $topics = Topic::all();

        factory(App\Post::class, 50)->create()->each(function ($item) use ($topics) {
            $item->topics()->attach($topics->random(rand(1,3))->pluck('id'));
        });
    }
}
