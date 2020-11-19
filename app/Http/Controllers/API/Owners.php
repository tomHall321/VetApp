<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Http\Requests\API\OwnerRequest;
use App\Http\Resources\API\OwnerResource;
use App\Http\Resources\API\OwnerListResource;

class Owners extends Controller
{
    public function index(Owner $owner)
    {
        return OwnerListResource::collection(Owner::all());
    }

    public function show(Owner $owner)
    {
        return new OwnerResource($owner);
    }

    public function destroy(Owner $owner)
    {
        $owner->delete();
        return response('', 204);
    }

    public function store(OwnerRequest $request)
    {
        $data = $request->all();
        $owner = Owner::create($data);
        return new OwnerResource($owner);
    }

    public function update(OwnerRequest $request, Owner $owner)
    {
        $data = $request->all();
        $owner->fill($data)->save();
        return $owner;
    }

}