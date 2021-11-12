@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-tools"><a href="{{ route('engine.index') }}"> <i class="fas fa-list"></i>&nbsp; All</a></div>
    </div>
    <div class="card-body">
        <form action="/engine" method="post">
            @csrf
                <div class="form-group">
                  <label for=""></label>
                  <select class="form-control" name="model_id" id="">
                    <option>Select model</option>
                    @forelse ($car_models as $car_model)
                        <option value="{{ $car_model->id }}">{{ $car_model->model_name }}</option>
                    @empty
                        <option value="">No car model</option>
                    @endforelse
                  </select>
                </div>
                <div class="form-group">
                    <input type="text" name="engine_name" id="" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
        </form>
    </div>
</div>
@endsection