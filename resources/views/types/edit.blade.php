@extends('layouts.app')

@section('page-title', 'Modifica Type')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Modifica Type
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col">
            <form method="post" action="{{ route('types.store') }}">
                @csrf
                @method('POST')

                <div class="mb-3">
                  <label for="name" class="form-label">Titolo</label>
                  <input value="{{ $type->type }}" type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input value="{{ $type->description }}" type="text" class="form-control" id="description" name="description">
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
              </form>
        </div>
    </div>
@endsection
