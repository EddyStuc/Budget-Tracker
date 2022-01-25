<?php

namespace Database\Seeders;

use App\Models\Budget;
use App\Models\Category;
use App\Models\Expense;
use App\Models\User;
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
        Category::factory(8)->create();

        $users = User::factory(10)->create();

        foreach ($users as $user) {
            Budget::factory()
                ->create([
                    'user_id' => $user->id
                ]);
            Expense::factory(5)
                ->create([
                    'user_id' => $user->id
                ]);
        }
    }
}
