<?php

namespace Database\Seeders;
use App\Models\Specialty;
use App\Models\User;
use Illuminate\Database\Seeder;

class SpecialtiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialties = [
            'Neurologia',
            'Quirurgica',
            'Pediatra',
            'Cardologia',
            'Urologia',
            'Medicina Forense',
            'Dermatologia'

        ];
        foreach($specialties as $specialtyName){

            $specialty = Specialty::create([
                'name' => $specialtyName
            ]);
            $specialty->users()->saveMany(
                User::factory(4)->state(['role' => 'doctor'])->make()
            );
        }
        User::find(2)->specialties()->save($specialty);
    }
}
