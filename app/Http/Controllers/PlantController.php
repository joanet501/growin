<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePlantRequest;
use App\Http\Requests\DestroyPlantRequest;
use App\Http\Requests\StorePlantRequest;
use App\Http\Requests\UpdatePlantRequest;
use App\Models\Plant;
use App\Models\Garden;
use Illuminate\Support\Facades\Auth;

class PlantController extends Controller
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
    public function create(CreatePlantRequest $request)
    {
        //check if garden is full
        $count = Plant::where('garden_id', $request->garden_id)->count();
        if ($count>9)
            return response()->json([
                'status' => false,
                'message' => 'This garden is full'
             ]);
        //check if garden belongs to authenticated user
        $garden = Garden::find($request->garden_id);
        if ($garden->user_id != Auth::user()->id)
            return response()->json([
                'status' => false,
                'message' => "This garden does not belong to authenticated user"
            ]);
        //create
        $plant = Plant::create($request->all());
        return $plant;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlantRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function show(Plant $plant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlantRequest  $request
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlantRequest $request, Plant $plant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyPlantRequest $request)
    {
        $plant = Plant::find($request->plant_id);
        $plant->delete();
        if($plant){
            return response()->json([
                'status' => true,
                'message' => "Plant deleted successfully"
            ]);
        }else{
            return response()->json([
                'status' => false,
                'message' => "Plant could not be deleted(this plant doesn't belong to authenticated user's gardens?)"
            ]);
        }
    }


}
