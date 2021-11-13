@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-tools"><a href="/cpd"><i fas fa-list></i>&nbsp;All</a></div>
    </div>
    <div class="card-body">

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
        <form action="/cpd" method="post">
            @csrf
              <div class="form-group">
                  <label for="">Car Model</label>
                  <select class="form-control" name="model_id" id="">
                      <option value="">Select car model</option>
                      @forelse ($car_models as $car_model)
                          <option value="{{ $car_model->id }}">{{ $car_model->model_name }}</option>
                      @empty
                          <option value="">No car model</option>
                      @endforelse
                  </select>
                </div>
               <div class="form-group">
                 <label for="">Created at</label>
                 <input type="date" name="created_at" id="" class="form-control" placeholder="Enter created date" aria-describedby="helpId">
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
    
@endsection