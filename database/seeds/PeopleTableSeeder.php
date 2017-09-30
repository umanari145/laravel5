<?php
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people = [
            'name' => 'tarou',
            'short_name' => 'ta',
            'mail' => 'tarou@gmail.com',
            'age' => 22
        ];

        DB::table('people')->insert($people);

        $people = [
            'name' => 'ichirou',
            'short_name' => 'ichi',
            'mail' => 'ichirou@gmail.com',
            'age' => 32
        ];

        DB::table('people')->insert($people);

    }
}
