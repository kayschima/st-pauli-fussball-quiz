<?php

namespace App\Http\Controllers;

use App\Http\Requests\AntwortRequest;
use App\Http\Resources\AntwortResource;
use App\Models\Antwort;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AntwortController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Antwort::class);

        return AntwortResource::collection(Antwort::all());
    }

    public function store(AntwortRequest $request)
    {
        $this->authorize('create', Antwort::class);

        return new AntwortResource(Antwort::create($request->validated()));
    }

    public function show(Antwort $antwort)
    {
        $this->authorize('view', $antwort);

        return new AntwortResource($antwort);
    }

    public function update(AntwortRequest $request, Antwort $antwort)
    {
        $this->authorize('update', $antwort);

        $antwort->update($request->validated());

        return new AntwortResource($antwort);
    }

    public function destroy(Antwort $antwort)
    {
        $this->authorize('delete', $antwort);

        $antwort->delete();

        return response()->json();
    }
}
