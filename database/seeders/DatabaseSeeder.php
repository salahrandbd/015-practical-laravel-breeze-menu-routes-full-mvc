<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Plan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    Plan::create(['name' => 'Bronze', 'amount' => 999]);
    Plan ::create(['name' => 'Silver', 'amount' => 1999]);
    Plan::create(['name' => 'Gold', 'amount' => 2999]);
  }
}
