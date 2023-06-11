<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('topics')->insert([
            [
                'name' => 'Student guide',
                'slug' => 'student-guide'
            ],
            [
                'name' => 'Job offer',
                'slug' => 'job-offer'
            ],
            [
                'name' => 'Looking for a job',
                'slug' => 'job-looking'
            ],
            [
                'name' => 'Accommodation offer',
                'slug' => 'accommodation-offer'
            ],
            [
                'name' => 'Looking for accommodation',
                'slug' => 'accommodation-looking'
            ],
            [
                'name' => 'Scholarship',
                'slug' => 'scholarship'
            ],
            [
                'name' => 'Other',
                'slug' => 'other'
            ],
        ]);
    }
}
