@extends("layouts.projects")

@section("title", $project->name)

@section("content")

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex py-4">
    <a class="btn btn-outline-danger" href="{{ route( 'projects.edit', $project ) }}">Modifica</a>

    <form action=" {{ route( 'projects.destroy', $project ) }}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" class="btn btn-outline-danger" value="Elimina">
    </form>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="card-title text-primary">
            {{ $project->name }}
        </h2>

        <h5 class="card-subtitle mb-2 text-muted">
            {{ $project->client }}
        </h5>

        <p class="text-secondary mb-2">
            <strong>Periodo:</strong> {{ $project->period }}
        </p>

        <hr>

        <p class="card-text">
            {{ $project->summary }}
        </p>

        <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary mt-3">← Torna alla lista</a>
    </div>
</div>

@endsection
