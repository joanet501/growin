<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
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
        return [
            'name' => Auth::user()->name,
            'picture' => Auth::user()->picture,
            'email' => Auth::user()->email,
            'gardens' => GardenResource::collection(Auth::user()->gardens),
        ];
    }
}
