<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'first_name'    => $this->first_name,
            'middle_name'   => $this->middle_name,
            'last_name'     =>  $this->last_name,
            'address'       => $this->address,
            'country'       => $this->country,
            'state'         => $this->state,
            'city'          => $this->city,
            'department' => $this->department,
            'zip_code'      => $this->zip_code,
            'birthdate'     => $this->birthdate,
            'date_hired'    => $this->date_hired,
        ];
    }
}
