@extends("layouts.projects")

@section("title", "Aggiungi un progetto")

@section("content")

<form action="{{ route( 'projects.store' ) }}" method="POST">
    @csrf

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name">
    </div>

    <div class="form-control mb-3 d-flex flex-column" >
        <label for="client">Cliente</label>
        <input type="text" id="client" name="client" >
    </div>

    <div class="form-control mb-3 d-flex flex-column" >
        <label for="period">Periodo</label>
        <input type="text" id="period" name="period" >
    </div>

    <div class="form-control mb-3 d-flex flex-column" >
        <label for="summary">Riassunto</label>
        <textarea id="summary" name="summary" width="100%" rows="5"></textarea>
    </div>

    <input type="submit" value="Salva">

</form>

@endsection