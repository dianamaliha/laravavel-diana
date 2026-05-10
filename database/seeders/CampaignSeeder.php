<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campaign;

class CampaignSeeder extends Seeder
{
    public function run(): void
    {
        Campaign::create([
            'title' => 'Bantu Korban Banjir',
            'description' => 'Donasi untuk korban banjir',
            'target_donation' => 1000000,
            'collected_donation' => 250000,
            'deadline' => '2026-12-31'
        ]);

        Campaign::create([
            'title' => 'Beasiswa Anak Yatim',
            'description' => 'Pendidikan untuk anak yatim',
            'target_donation' => 2000000,
            'collected_donation' => 500000,
            'deadline' => '2026-11-30'
        ]);
    }
}