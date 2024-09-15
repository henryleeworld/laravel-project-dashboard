<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();
        User::factory()->create([
            'name' => __('Administrator'),
            'email' => 'admin@admin.com',
        ])->syncRoles([RoleEnum::ADMIN]);
    }
}
