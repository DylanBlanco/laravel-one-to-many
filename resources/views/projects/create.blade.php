@extends('layouts.app')

@section('page-title', 'Crea Project')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Crea Nuovo Project
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col">
            <form method="post" action="{{ route('projects.store') }}">
                @csrf

                <div class="mb-3">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Autore</label>
                    <input type="text" class="form-control" id="author" name="author">
                </div>
                <div class="mb-3">
                    <label for="date_create" class="form-label">Data di Creazione</label>
                    <input type="date" class="form-control" id="date_create" name="date_create">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="mb-3">
                    <label for="create_at" class="form-label">Data Inserimento</label>
                    <input type="date" class="form-control" id="create_at" name="create_at">
                </div>
                <div class="mb-3">
                    <label for="update_at" class="form-label">Data Modifica</label>
                    <input type="date" class="form-control" id="update_at" name="update_at">
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
              </form>
        </div>
    </div>
@endsection
