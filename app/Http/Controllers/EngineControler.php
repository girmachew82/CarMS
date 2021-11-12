<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use App\Models\Engine;
use Illuminate\Http\Request;

class EngineControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $engines = Engine::join('car_models','car_models.id','=','engines.model_id')
                        ->join('cars','cars.id','=','car_models.car_id')
                        ->get(['cars.name','car_models.model_name','engines.*']);
        $n=1;                        
        return view('engine.index',compact('engines','n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car_models= CarModel::all();
        return view('engine.create',compact('car_models'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $engine = new Engine();
        $engine->model_id =$request->input('model_id');
        $engine->engine_name = $request->input('engine_name');
        $engine->save();
        return redirect('/engine');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $engine = Engine::find($id);

        return view('engine.show',compact('engine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $engine = Engine::find($id);
        $car_models = CarModel::all();
        $car_model = Engine::join('car_models','car_models.id','=','engines.model_id')
                            ->get(['car_models.model_name']);

        return view('engine.edit',compact('engine','car_models','car_model'));
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
      Engine::where('id',$id)
            ->update([
                'model_id'=>$request->input('model_id'),
                'engine_name'=>$request->input('engine_name')
            ]);
            return redirect('/engine');
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
