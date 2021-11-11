@extends('layouts.app')
@section('content')
        <div class="card">

            <div class="card-header">Cars Model list
                <div class="card-tools"><a href="{{route('model.create')}}"><i class="fas fa-plus-square">&nbsp;Add</i></a></div>
            </div>
            <div class="card-body">
                <div class="row-12">
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
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
                                    <td>{{ $car_model->car_id }}</td>
                                    <td>{{ $car_model->model_name }}</td>
                                    <td>{{ $car_model->id }}</td>
                                    <td>{{ $car_model->id }}</td>

                                    <td>{{ $car_model->id }}</td>

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

@endsection