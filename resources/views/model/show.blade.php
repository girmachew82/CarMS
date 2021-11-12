@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-tools"><a href="/model"><i class="fas fa-list">&nbsp;All</i></a></div>
    </div>
    <div class="card-body">
        {{ $car_model }}
    </div>
</div>

@endsection