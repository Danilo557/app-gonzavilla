<?php

namespace Database\Factories;

use App\Models\Municipality;
use App\Models\State;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branche>
 */
class BrancheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $state = State::all()->random();
        $municipality = Municipality::where('state_id', $state->id)->inRandomOrder()->first();

        return [
            'address' => $this->faker->address(),
            'phone' => $this->faker->tollFreePhoneNumber(),
            'whatsapp' => $this->faker->phoneNumber(),
            'map' => 'https://maps.app.goo.gl/tjmDEUrEEyZ4cmPb8',
            'type_id' => Type::all()->random()->id,
            'state_id' => $state->id,
            'municipality_id' => $municipality->id,

        ];
    }
}
