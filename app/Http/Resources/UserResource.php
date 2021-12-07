<?php

namespace App\Http\Resources;

use App\Models\Meta;
use Faker\Factory;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
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
            'id' => $this->id,
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->email,
            'address' => AddressResource::collection($this->address),
            'phone' => $this->when($this->getMeta(Meta::TYPE_PHONE), function () use ($faker) {
                return $faker->phoneNumber;
            }),
        ];
    }
}
