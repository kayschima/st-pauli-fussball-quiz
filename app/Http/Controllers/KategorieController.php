<?php

namespace App\Http\Controllers;

use App\Http\Requests\KategorieRequest;
use App\Http\Resources\KategorieResource;
use App\Models\Kategorie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class KategorieController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Kategorie::class);

        return KategorieResource::collection(Kategorie::all());
    }

    public function store(KategorieRequest $request)
    {
        $this->authorize('create', Kategorie::class);

        return new KategorieResource(Kategorie::create($request->validated()));
    }

    public function show(Kategorie $kategorie)
    {
        $this->authorize('view', $kategorie);

        return new KategorieResource($kategorie);
    }

    public function update(KategorieRequest $request, Kategorie $kategorie)
    {
        $this->authorize('update', $kategorie);

        $kategorie->update($request->validated());

        return new KategorieResource($kategorie);
    }

    public function destroy(Kategorie $kategorie)
    {
        $this->authorize('delete', $kategorie);

        $kategorie->delete();

        return response()->json();
    }
}
