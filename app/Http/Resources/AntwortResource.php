<?php

namespace App\Http\Resources;

use App\Models\Antwort;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Antwort */ class AntwortResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'antwort' => $this->antwort,
            'richtig' => $this->richtig,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'fragen_id' => $this->fragen_id,

            'fragen' => new FrageResource($this->whenLoaded('fragen')),
        ];
    }
}
