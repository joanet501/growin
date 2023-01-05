<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteGardenRequest;
use App\Http\Requests\StoreGardenRequest;
use App\Http\Requests\UpdateGardenRequest;
use App\Models\Garden;
use App\Models\Plant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Http\Resources\UserResource;


class GardenController extends Controller
{
//relaciones


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

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGardenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGardenRequest $request)
    {
        $numberGardens = count(auth()->user()->gardens);
        $newGarden['name'] = "Huerto ".$numberGardens+1;
        $newGarden['user_id'] = Auth::user()->id;
        Garden::create($newGarden);
        //redirect to page
        $user = Auth::user();
        $user = UserResource::make($user);
        $data = json_decode($user->toJson(), true);
        return redirect()->back()->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Garden  $garden
     * @return \Illuminate\Http\Response
     */
    public function show(Garden $garden)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Garden  $garden
     * @return \Illuminate\Http\Response
     */
    public function edit(Garden $garden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGardenRequest  $request
     * @param  \App\Models\Garden  $garden
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGardenRequest $request, Garden $garden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Garden  $garden
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteGardenRequest $request)
    {
        $garden = Garden::find($request->garden_id);
        $garden->delete();
        //redirect to page
        $user = Auth::user();
        $user = UserResource::make($user);
        $data = json_decode($user->toJson(), true);
        return redirect()->back()->with($data);
    }

}
