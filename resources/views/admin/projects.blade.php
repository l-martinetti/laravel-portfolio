@extends('layouts.master')

@section('title', "I miei progetti")

@section('content')

    <section class="container mt-4">
        @foreach($projects as $project)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->Name }}</h5>
                    <p class="card-text">{{ $project->Brief }}</p>
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">Visualizza</a>
                </div>
            </div>
        @endforeach
    </section>


@endsection