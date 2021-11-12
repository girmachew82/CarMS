@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-tools"><a href="engine/create">Add</a> <i class="fa fa-plus-circle" aria-hidden="true"></i></div>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead class="thead-inverse">
                <tr>
                    <th>No</th>
                    <th>Car</th>
                    <th>Model</th>
                    <th>Engine</th>
                    <th>Edit</th>
                    <th>Detail</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($engines as $engine )
                    <tr>
                        <td scope="row">{{ $n++ }}</td>
                        <td scope="row">{{ $engine->name }}</td>
                        <td scope="row">{{ $engine->model_name }}</td>
                        <td scope="row">{{ $engine->engine_name }}</td>
                        <td scope="row"> <a href="/engine/{{ $engine->id }}/edit"><i class="far fa-edit"></i></a></td>
                        <td scope="row"><a href="/engine/{{ $engine->id }}"><i class="fas fa-info-circle"></i></a></td>
                        <td scope="row">
                        <form action="/engine/{{ $engine->id }}" method="post">
                         <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        
                        </td>

                    </tr>
                    @endforeach

                </tbody>
        </table>
    </div>
</div>
    
@endsection