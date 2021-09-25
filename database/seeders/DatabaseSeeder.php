<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $contact = new Contact();
        $contact->name = "Mariia Chcuena";
        $contact->email = "testmail@mail.com";
        $contact->phone = "1434354545";
        $contact->msg = "Hola como están? queria tomar un curso, empezando por la clase de prueba.";
        $contact->updated_at = Carbon::now();
        $contact->created_at = Carbon::now();
        $contact->save();

    }
}
