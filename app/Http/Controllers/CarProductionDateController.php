<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use App\Models\CarProductionDate;
use Illuminate\Http\Request;

class CarProductionDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cpds = CarProductionDate::join('car_models','car_models.id','=','car_production_dates.model_id')
                                    ->get(['car_models.model_name','car_production_dates.*']);
                                    $n=1;
        return view('cpd.index',compact('cpds','n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car_models = CarModel::all();
        return view('cpd.create',compact('car_models'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cpd = CarProductionDate::create([
                'model_id'=> $request->input('model_id'),
                'created_at'=>$request->input('created_at')
        ]);
        return redirect()->back()->with('message',"Saved ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
