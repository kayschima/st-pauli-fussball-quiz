<?php

namespace App\Http\Controllers;

use App\Http\Requests\FrageRequest;
use App\Http\Resources\FrageResource;
use App\Models\Frage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FrageController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Frage::class);

        return FrageResource::collection(Frage::all());
    }

    public function store(FrageRequest $request)
    {
        $this->authorize('create', Frage::class);

        return new FrageResource(Frage::create($request->validated()));
    }

    public function show(Frage $frage)
    {
        $this->authorize('view', $frage);

        return new FrageResource($frage);
    }

    public function update(FrageRequest $request, Frage $frage)
    {
        $this->authorize('update', $frage);

        $frage->update($request->validated());

        return new FrageResource($frage);
    }

    public function destroy(Frage $frage)
    {
        $this->authorize('delete', $frage);

        $frage->delete();

        return response()->json();
    }
}
