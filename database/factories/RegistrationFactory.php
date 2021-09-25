<?php

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => 'gustavo zapalata',
            'email'     => 'gustavo@gustavo.com',
            'country'   => 'Arentina',
            'city'      => 'buenos aires',
            'language'  => 'english',
            'text'      => 'bla bla lblasd ae rwer wer wer wer'
        ];
    }
}
