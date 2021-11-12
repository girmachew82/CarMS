@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-tools">All</div>
    </div>
    <div class="card-body">
        <form action="/model/{{ $car_model->id }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <select name="car_id" id="" class="form-control">
                    <option value="{{ $car_model->car_id }}" style="color: red">{{$name}}</option>
                    @foreach ($cars as $car )
                        <option value="{{ $car->id }}">{{ $car->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                 <input type="text" value="{{ $car_model->model_name }}" class="form-control" name="model_name">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-sm" value="Update">
            </div>
        </form>
    </div>
</div>
    
@endsection