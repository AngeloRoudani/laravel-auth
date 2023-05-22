@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row justify-content-between">

            <form action="{{route('admin.projects.store')}}" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome del progetto</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="language_dev" class="form-label">Linguaggio di Programmazione</label>
                    <input type="text" id="language_dev" name="language_dev" class="form-control" value="{{ old('language_dev') }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="framework" class="form-label">Framework Usato</label>
                    <input type="text" id="framework" name="framework" class="form-control" value="{{ old('framework') }}">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="start_date" class="form-label">Data di inizio</label>
                    <input type="text" id="start_date" name="start_date"  class="form-control" value="{{ old('start_date') }}">
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Crea</button>
            </form>

        </div>
    </div>
    
@endsection