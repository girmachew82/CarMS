@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-tools">
            <a href="/cpd/create"><i class="fas fa-plus-circle">&nbsp;Add</i></a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-sm ">
            <thead class="thead-inverse">
                <tr>
                    <th>No</th>
                    <th>Model</th>
                    <th>Production date</th>
                    <th>Edit</th>
                    <th>Detail</th>
                    <th>Delete</th>

                </tr>
                </thead>
                <tbody>
                    @forelse ($cpds as $cpd)
                    <tr>
                        <td scope="row">{{ $n++ }}</td>
                        <td>{{ $cpd->model_name }}</td>
                        <td>{{ $cpd->created_at }}</td>
                        <td><a href="/cpd/{{ $cpd->id }}"> <i class="fa fa-edit" aria-hidden="true"></i></a></td>
                        <td><a href="/cpd/{{ $cpd->id }}"><i class="fas fa-info-circle"></i></a></td>
                        <td>
                            <form action="" method="post">
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                    
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>
    
@endsection