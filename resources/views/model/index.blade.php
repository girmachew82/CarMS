@extends('layouts.app')
@section('content')
        <div class="card">

            <div class="card-header">Cars Model list
                <div class="card-tools"><a href="{{route('model.create')}}"><i class="fas fa-plus-square">&nbsp;Add</i></a></div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">

                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                            <thead class="thead-inverse">
                            <tr role="row">
                                <th>No</th>
                                <th>Car</th>
                                <th>Model</th>
                                <th>Edit</th>
                                <th>Detail</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($car_models as $car_model )
                                <tr>
                                    <td scope="row">{{ $n++ }}</td>
                                    <td>{{ $car_model->name  }}</td>
                                    <td>{{ $car_model->model_name }}</td>
                                    <td><a href="model/{{ $car_model->id }}/edit"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                                    <td><a href="model/{{ $car_model->id }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a></td>
                                    <td>
                                        <form action="/model/{{ $car_model->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="6"> No record</td>
                                    </tr>
                                @endforelse
                                

                            </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>

@endsection