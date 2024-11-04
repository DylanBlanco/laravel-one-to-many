@extends('layouts.app')

@section('page-title', 'Tutti i Types')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Tutti i Types
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-success  w-100">Crea Nuovo Type</a>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Type</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                        <tr>
                            <th scope="row"> {{ $type->id }} </th>
                            <td> {{ $type->name }} </td>
                            <td> {{ $type->description }} </td>
                            <td>
                                <a href="{{ route('types.show', $type->id) }}" class="btn btn-primary my-1  w-100">Visualizza</a>
                                <a href="#" class="btn btn-primary my-1  w-100">Modifica</a>
                                {{-- <form action="{{ route('types.destroy', $type->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Cancella" class="btn btn-danger my-1 w-100">
                                </form> --}}
                            </td>
                        </tr>    
                    @endforeach
                    <tr>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-success  w-100">Crea Nuovo type</a>
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
