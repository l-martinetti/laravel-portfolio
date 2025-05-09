@extends('layouts.master')

@section('title', "I miei progetti")

@section('content')

    <section class="container mt-4">
        @foreach($projects as $project)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->Name }}</h5>
                    <p class="card-text">{{ $project->Brief }}</p>
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-outline-primary">Visualizza</a>
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-outline-warning">Modifica</a>

                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal-{{$project->id}}">
                        Elimina
                    </button>
                </div>
            </div>


            <div class="modal fade" id="exampleModal-{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il progetto</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Vuoi eliminare il progetto?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <form class="d-inline" action={{ route('admin.projects.destroy', $project)}} method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-outline-danger" value="Elimina">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>


@endsection