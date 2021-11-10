@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Edit car detail
        <div class="card-tools">
            <a href="/car" class="badge badge-primary">All</a>
    
        </div>
    </div>
    <div class="card-body">
        <form action="/car/{{ $car->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $car->name }}">
            </div>
            <div class="form-group">
                <label for="founded">Founded at</label>
                <input type="number" class="form-control" name="founded" placeholder="Enter founded year" value="{{ $car->founded }}">
            </div>
            <div class="form-group">
                <label for="descriptio">Description</label>
            <textarea name="description" id="" cols="30" rows="10">
           {{$car->description}}
            </textarea>

            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
        </form>
    </div>
</div>
    
@endsection