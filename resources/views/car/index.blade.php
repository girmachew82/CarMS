@extends('layouts.app')

@section('content')
<div class="card primary">
    <div class="card-header">Lexury Cars
        <div class="card-tools">
            <a href="car/create" class="badge badge-primary">Add</a>
    
        </div>
    </div>
    <div class="body">


        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                    <div class="dt-buttons btn-group flex-wrap">               
                        <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button">
                            <span>Copy</span></button> 
                            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                <span>CSV</span></button> 
                                <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">
                            <span>Excel</span></button>
                            <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button">
                            <span>PDF</span></button> 
                            <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button">
                            <span>Print</span></button> 
                            <div class="btn-group">
                            <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false">
                                <span>Column visibility</span></button>
                            </div> 
                        </div>
                            </div><div class="col-sm-12 col-md-6">
                                <div id="example1_filter" class="dataTables_filter">
                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                                </div>
                            </div>
                        </div>
            <div class="row">
            <div class="col-sm-12">
 
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                    <thead class="thead-inverse">
                            <tr  role="row">
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Number: activate to sort column descending">No</th>
                                <th  class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Founded: activate to sort column ascending">founded at</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending">Description</th>
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
        </div>
        </div>
        <div class="d-flex">
            {{ $cars->links() }}
        </div>
  
    </div>
    </div>
     </div>
     
    </div>

</div>
@endsection
