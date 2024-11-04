@extends('layouts.app')

@section('page-title', 'Type')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Type | {{ $type->title }}
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
                        <th scope="col">#</th>
                        <th scope="col">Type</th>
                        <th scope="col">Descrizione</th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ $type->id }} </th>
                        <td> {{ $type->name }} </td>
                        <td> {{ $type->description }} </td>
                    </tr>    
                </tbody>
            </table>
        </div>
    </div>
@endsection
