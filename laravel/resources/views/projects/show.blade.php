@extends("layouts.projects")

@section("title", $project->name)

@section("content")

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
