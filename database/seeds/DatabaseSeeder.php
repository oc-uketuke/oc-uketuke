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
        $this->call(people_table_seeder::class);
        $this->call(taiken_table_seeder::class);
        $this->call(oc_taiken1_table_seeder::class);
        $this->call(oc_taiken2_table_seeder::class);
        $this->call(oc_taiken3_table_seeder::class);
        $this->call(opencanpass_table_seeder::class);

    }
}
