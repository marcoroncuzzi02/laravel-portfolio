@extends("layouts.projects")

@section("title", "Tutti i projects")

@section("content")

    <h1>Tutti i Progetti</h1>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Azienda</th>
                <th>Periodo</th>
                <th>Riassunto</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $projects as $project )
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->client }}</td>
                    <td>{{ $project->period }}</td>
                    <td>{{ $project->summary }}</td>
                    <td><a href="{{ route('projects.show', $project) }}" class="btn-view">Visualizza</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
