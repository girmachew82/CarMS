@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-tools"><a href="/engine"><i class="fas fa-list"></i>&nbsp;All</a></div>
    </div>
    <div class="card-body">
        {{ $engine }}
    </div>
</div>
    
@endsection