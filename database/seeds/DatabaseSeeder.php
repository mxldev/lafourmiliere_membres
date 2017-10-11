<?php

use App\User;
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
        // Ask for db migration refresh, default is no
        if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {
            // Call the php artisan migrate:refresh
            $this->command->call('migrate:refresh');
            $this->command->warn("Data cleared, starting from blank database.");
        }

        // create one user for each role
        $this->createUser("admin");
        $this->createUser("accountant");
        $this->createUser("user");
    }

    private function createUser($role)
    {
        $user = factory(User::class)->create();
        $user->role = $role;
        $user->save();
    }
}
