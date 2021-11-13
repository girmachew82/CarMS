@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-tools"><a href="/product/create"><i class="fas fa-plus-circle"></i>Add</a></div>
    </div>
<div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Detail</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <td scope="row">{{ $n++ }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->id }}</td>
                <td>{{ $product->id }}</td>
                <td>{{ $product->id }}</td>

            </tr>
            @empty
                
            @endforelse
           
           
        </tbody>
    </table>
</div>
</div>
    
@endsection