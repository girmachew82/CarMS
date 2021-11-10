@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Add new lexury car

    </div>
    <div class="card-body">
        <form action="/car" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label for="founded">Founded at</label>
                <input type="number" class="form-control" name="founded" placeholder="Enter founded year" required>
            </div>
            <div class="form-group">
                <label for="descriptio">Description</label>
            <textarea name="description" id="" cols="30" rows="10" required>
                Write description of a car
            </textarea>

            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
    
@endsection