@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-between">

        @foreach($projects as $project)
        <div class="card mt-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$project->name}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Linguaggio: {{$project->language_dev}}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary">Framework: {{$project->framework}}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary">Data inizio: {{$project->start_date}}</h6>
                <a href="#" class="btn btn-success">Modifica</a>
                <a href="#" class="btn btn-danger">Elimina</a>
            </div>
        </div>

        @endforeach
    </div>
</div>
    
@endsection