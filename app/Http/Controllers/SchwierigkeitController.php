<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchwierigkeitRequest;
use App\Http\Resources\SchwierigkeitResource;
use App\Models\Schwierigkeit;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SchwierigkeitController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Schwierigkeit::class);

        return SchwierigkeitResource::collection(Schwierigkeit::all());
    }

    public function store(SchwierigkeitRequest $request)
    {
        $this->authorize('create', Schwierigkeit::class);

        return new SchwierigkeitResource(Schwierigkeit::create($request->validated()));
    }

    public function show(Schwierigkeit $schwierigkeit)
    {
        $this->authorize('view', $schwierigkeit);

        return new SchwierigkeitResource($schwierigkeit);
    }

    public function update(SchwierigkeitRequest $request, Schwierigkeit $schwierigkeit)
    {
        $this->authorize('update', $schwierigkeit);

        $schwierigkeit->update($request->validated());

        return new SchwierigkeitResource($schwierigkeit);
    }

    public function destroy(Schwierigkeit $schwierigkeit)
    {
        $this->authorize('delete', $schwierigkeit);

        $schwierigkeit->delete();

        return response()->json();
    }
}
