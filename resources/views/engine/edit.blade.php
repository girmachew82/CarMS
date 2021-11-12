@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-tools"><a href="/engine"><i class="fas fa-list"></i>&nbsp;All</a></div>
    </div>
    <div class="card-body">
        {{ $engine }}

        <form action="/engine/{{ $engine->id }}" method="post">
            @csrf
            @method('put')
                <div class="form-group">
                  <label for="">Car Model</label>
                  <select class="form-control" name="model_id" id="">
                      <option value="{{ $engine->model_id }}" style="color: red">{{ $car_model }}</option>
                      @foreach ($car_models as $car_model)
                      <option value="{{ $car_model->id }}">{{ $car_model->model_name }}</option>
                      @endforeach
                  </select>
                </div>
            <div class="form-group">
                <label for="engine_name">Engine Name</label>
                <input type="text" name="engine_name" id="" class="form-control" value="{{ $engine->engine_name }}">
            </div>
            <div class="form-group">
              <input type="submit" value="update" id="" class="btn btn-primary btn-sm" placeholder="" aria-describedby="helpId">
            </div>
        </form>
    </div>
</div>
    
@endsection