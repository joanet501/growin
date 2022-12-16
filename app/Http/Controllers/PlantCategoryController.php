<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlantCategoryRequest;
use App\Http\Requests\DeletePlantCategoryRequest;
use App\Http\Requests\StorePlantCategoryRequest;
use App\Http\Requests\UpdatePlantCategoryRequest;
use App\Models\PlantCategory;
use Illuminate\Support\Facades\Auth;
class PlantCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlantCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function createPlantCategory(CreatePlantCategoryRequest $request)
    {
        $plant = PlantCategory::create($request->all());
        return $plant;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlantCategory  $plantCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PlantCategory $plantCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlantCategory  $plantCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PlantCategory $plantCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlantCategoryRequest  $request
     * @param  \App\Models\PlantCategory  $plantCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlantCategoryRequest $request, PlantCategory $plantCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlantCategory  $plantCategory
     * @return \Illuminate\Http\Response
     */
    public function deletePlantCategory(DeletePlantCategoryRequest $request)
    {
        $garden = PlantCategory::find($request->id);
        if($garden->user_id == Auth::user()->id){
            $garden->delete();
            return "Eliminado correctamente";
        }
        return "Este huerto no lo puedes borrar, no te pertenece!";
    }
}
