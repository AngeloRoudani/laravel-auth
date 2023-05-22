@extends('layouts.admin')

@section('content')

<div>
    <div class="card" style="width: 18rem;">
        @foreach
        <div class="card-body">
            <h5 class="card-title">{{$projects->name}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Linguaggio{{$projects->language_dev}}</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">Framework{{$projects->framework}}</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">Data inizio{{$projects->start_date}}</h6>
            <a href="#" class="btn btn-success">Modifica</a>
            <a href="#" class="btn btn-danger">Elimina</a>
        </div>
        @endforeach
    </div>
</div>
    
@endsection