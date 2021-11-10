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
    </div>
</div>
@endsection