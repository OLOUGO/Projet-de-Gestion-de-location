<?php

namespace Database\Factories;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ville = $this->faker->city;
        $pays = $this->faker->country;
        return [
            "nom" =>$this->faker->lastName,
            "prenom" =>$this->faker->firstName,
            "sexe" =>array_rand(["M","F"],1),
            "dateNaissance" =>$this->faker->dateTimeBetween("1998-01-01","2020-01-01"),
            "lieuNaissance" =>"$pays, $ville",
            "nationalite" =>$pays,
            "pays" =>$pays,
            "ville" =>$ville,
            "adresse" =>$this->faker->address,
            "telephone1" =>$this->faker->phoneNumber,
            "telephone2" =>$this->faker->phoneNumber,
            "pieceIdentite" =>array_rand(["Passeport","Permis de conduire","CNI"],1),
            "noPieceIdentite" =>$this->faker->creditCardNumber,
        ];
    }
}
