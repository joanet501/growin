<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePlantRequest;
use App\Http\Requests\DestroyPlantRequest;
use App\Http\Requests\StorePlantRequest;
use App\Http\Requests\UpdatePlantRequest;
use App\Http\Resources\PlantResource;
use App\Http\Resources\UserResource;
use App\Models\Plant;
use App\Models\User;

use App\Models\Garden;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
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
    public function create(Request $request)
    {
        $gardenId = $request->gardenId;
        $gardens = Auth::user()->gardens;

        if ($request->plantType == 0){
            $user = Auth::user();
            $user = UserResource::make($user);
            $data = json_decode($user->toJson(), true);
            return redirect()->back()->with($data);
        }

        $data = array(
            "category_id" =>  $request->plantType,
            "name" => null,
            "garden_id" => $gardens[$gardenId]->id,
        );

        Plant::create($data);
        $user = Auth::user();
        $user = UserResource::make($user);
        $data = json_decode($user->toJson(), true);
        return redirect()->back()->with($data);
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

    public function delete(Request $request){
        $garden = Auth::user()->gardens;
        $gardenId = $request->gardenId;
        $plantId = $request->plantId;
        $garden = $garden[$gardenId];
        $plants = $garden->plants;
        $plants[$plantId]->delete();
        $user = Auth::user();
        $user = UserResource::make($user);
        $data = json_decode($user->toJson(), true);
        return redirect()->back()->with($data);

    }

    public function redirectGarden(){

    }



    public function water(Request $request){
        $garden = Auth::user()->gardens;
        $garden = $garden[$request->gardenId];
        $plants = $garden->plants;
        $waterPlant = Plant::find($plants[$request->plantId]->id);
        $today = Carbon::now()->format('d-m-Y');
        if ($waterPlant->category_id == 1){
            $nextWaterDay = Carbon::now()->addDays(3)->format('d-m-Y');
        }else if ($waterPlant->category_id == 2){
            $nextWaterDay = Carbon::now()->addDays(5)->format('d-m-Y');
        }else{
            $nextWaterDay = Carbon::now()->addDays(2)->format('d-m-Y');
        }
        $waterPlant->update([
            'water_date' =>$today,
            'next_water_date' =>$nextWaterDay,
        ]);
        //redirect to page
        $user = Auth::user();
        $user = UserResource::make($user);
        $data = json_decode($user->toJson(), true);
        return redirect()->back()->with($data);
    }


}
