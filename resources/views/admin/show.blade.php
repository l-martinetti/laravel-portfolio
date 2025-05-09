@extends('layouts.master')

@section('title', $project->Name)

@section('content')
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">{{ $project->Name }}</h5>
            <p class="card-text">{{ $project->Brief }}</p>
        </div>
    </div>
@endsection