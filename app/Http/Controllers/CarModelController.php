<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $car_models = CarModel::join('cars','cars.id','=','car_models.car_id')
                        ->get(['cars.*','car_models.*']);
        $n=1;
        return view('model.index',compact('car_models','n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::all();
        return view('model.create',compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car_model = new CarModel();
        $car_model->car_id = $request->input('car_id');
        $car_model->model_name = $request->input('model_name');
        $car_model->save();
        return redirect()->back()->with('message', 'IT WORKS!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car_model = CarModel::find($id);
        return view('model.show')->with('car_model',$car_model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car_model = CarModel::find($id);
        $cars = Car::all();
                  
        $name = CarModel::join('cars','cars.id','=','car_models.car_id')
        ->where('car_models.id',$id)
        ->get(['name']);
        return view('model.edit',compact('car_model','cars','name'));
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
                       CarModel::where('id',$id)
                                ->update(
                                    [
                                        'car_id'=>$request->input('car_id'),
                                        'model_name'=>$request->input('model_name')
                                    ]
                                    );
           return redirect('/model');
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
