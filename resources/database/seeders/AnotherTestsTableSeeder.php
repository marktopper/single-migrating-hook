<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnotherTestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Don't run if there is already data in the table.
        if (DB::table('another_tests')->count() > 0) {
            return;
        }

        DB::table('another_tests')->insert([
          ['name' => 'foo'],
          ['name' => 'bar'],
          ['name' => 'baz'],
        ]);
    }
}
