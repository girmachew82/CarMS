@extends('layouts.app')
@section('content')
  <div class="card">
      <div class="card-header">Car models
          <div class="card-tools"><a href="{{ route('model.index') }}"><i class="fas fa-list"></i>&nbsp;All</a></div>
      </div>
      <div class="card-body">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
     @endif
          <form action="{{route('model.store')}}" method="post">
              @csrf
              <div class="form-group">
                  <select name="car_id" id="" class="form-control" required>
                    <option value="">Select car</option>
                    @forelse ($cars as $car)
                        <option value="{{ $car->id }}">{{ $car->name }}</option>
                    @empty
                        <option value="">No car</option>
                    @endforelse
                  </select>
              </div>
              <div class="form-group">
                <input type="text" name="model_name" id="" class="form-control" required>
              </div>
            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-primary">
            </div>


          </form>
      </div>
  </div>
@endsection