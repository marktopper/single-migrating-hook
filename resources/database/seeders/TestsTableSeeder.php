<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Don't run if there is already data in the table.
        if (DB::table('tests')->count() > 0) {
            return;
        }

        DB::table('tests')->insert([
          ['name' => 'foo'],
          ['name' => 'bar'],
          ['name' => 'baz'],
        ]);
    }
}
