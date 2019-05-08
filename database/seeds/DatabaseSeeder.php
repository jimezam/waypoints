<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate(['users', 'categories']);

        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }

    public function truncate($tables)
    {
        Model::unguard();

        foreach($tables as $table)
            DB::table($table)->truncate();

        Model::reguard();
    }
}
