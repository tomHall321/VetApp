<?php

namespace App\Http\Controllers\API;
use App\Models\Owner;
use App\Models\Animal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\API\AnimalResource;
use App\Http\Resources\API\AnimalListResource;
use App\Http\Requests\API\AnimalRequest;

class Animals extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Owner $owner, Animal $animal)
    {
        return AnimalListResource::collection(Animal::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Owner $owner, Animal $animal)
    {
        return new AnimalResource($animal);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnimalRequest $request, Owner $owner)
    {
        $animal_data = $request->only(['name', 'type', 'date_of_birth', 'weight', 'height', 'biteyness']);
        $treatment_data = $request->get("treatments");
        $animal = new Animal($animal_data);
        $animal->owner()->associate($owner);
        $animal->save();
        $animal->setTreatments($treatment_data);
        return new AnimalResource($animal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnimalRequest $request, Owner $owner, Animal $animal)
    {
        $data = $request->all();
        $animal->update($data);
        return new AnimalResource($animal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner, Animal $animal)
    {
        $animal->delete();
        return response(null, 204);
    }
}
