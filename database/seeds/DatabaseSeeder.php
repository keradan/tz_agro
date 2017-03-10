<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MallsTableSeeder::class);

        $this->command->info('Tables: "users", "malls" have been seeded.');
    }
}
