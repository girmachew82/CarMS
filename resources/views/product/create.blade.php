@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-tools"><a href="/product"><i class="fas fa-list"></i>&nbsp;All</a></div>
    </div>
<div class="card-body">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <form action="/product" method="post">
        @csrf

          <div class="form-group">
            <label for="">Product name</label>
            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Enter product name">
          </div>
          <div class="form-group">
              <input type="submit" value="Save" class="btn btn-primary btn-sm">
          </div>
    </form>
</div>
</div>
@endsection