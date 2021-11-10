@extends('layouts.app')

@section('content')
<div class="card primary">
    <div class="card-header">Lexury Cars
        <div class="card-tools">
            <a href="car/create" class="badge badge-primary">Add</a>
    
        </div>
    </div>
    <div class="body">
        <table class="table table-striped table-inverse table-responsive table-sm">
            <thead class="thead-inverse">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>founded at</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Detail</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($cars as $car)
                    <tr>
                        <td>{{ $n++ }}</td>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->founded }}</td>
                        <td>{{ $car->description }}</td>
                        <td><a href=" car/{{ $car->id }}/edit "><i class="far fa-edit"></i></a></td>
                        <td><a href=" car/{{ $car->id }}"><i class="fas fa-info-circle"></i></a></td>
                        <td>
                            <form action="/car/{{ $car->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            
                            </form>
                        
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                    
                   
                </tbody>

        </table>
        <div class="d-flex">
            {{ $cars->links() }}
        </div>
    </div>
    <div class="card footer">

    </div>
</div>
@endsection
