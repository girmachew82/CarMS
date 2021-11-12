@extends('layouts.app')
@section('content')
<div class="card">

    <div class="card-header">
        Car detail
        <div class="card-tools"><a href="/car" class="badge badge-primary"> All</a></div>
    </div>
    <div class="card-body">
    Name :{{ $car->name }}
    <br>
    Founded at {{ $car->founded }}
    <br>
    Description {{ $car->description }}
    <br>
    Model :
    @forelse ($car->carmodels as $carmodel)
        <li>
            {{ $carmodel['model_name'] }}
        </li>
    @empty
        <p>No car model</p>
    @endforelse
    Engine:
        @forelse ($car->engines as  $engine)
            <li>{{ $engine->engine_name }}</li>
        @empty
            <p>No car engine found</p>
        @endforelse

    </div>
</div>
@endsection