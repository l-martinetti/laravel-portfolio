@extends('layouts.master')

@section('content')
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">{{ $project->Name }}</h5>
        <p class="card-text">{{ $project->Brief }}</p>
    </div>
</div>
@endsection