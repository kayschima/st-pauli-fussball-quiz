<?php

namespace App\Http\Resources;

use App\Models\Frage;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Frage */ class FrageResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'frage' => $this->frage,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'schwierigkeiten_id' => $this->schwierigkeiten_id,
            'kategorien_id' => $this->kategorien_id,

            'schwierigkeiten' => new SchwierigkeitResource($this->whenLoaded('schwierigkeiten')),
            'kategorien' => new KategorieResource($this->whenLoaded('kategorien')),
        ];
    }
}
