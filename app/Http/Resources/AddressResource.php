<?php

namespace App\Http\Resources;

use Faker\Factory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    use WithFaker;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $faker = Factory::create();

        return [
            'street' => $faker->streetName,
            'city' => $faker->city,
            'country' => $faker->country,
        ];
    }
}
