<?php

namespace App\Http\Resources\Auth\Register;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use \Illuminate\Http\Request;

class RegisterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'fullname' => $this->person->fullname,
            'document_number' => $this->person->document_number,
            'email' => $this->email,
            'created_at' => $this->created_at,
        ];
    }
}
