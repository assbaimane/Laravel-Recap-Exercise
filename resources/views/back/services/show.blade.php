@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Détails du service {{ $service->id }}</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Description</th>
                    <th scope='col'>Image</th>
                    <th scope='col'>Icone de la card</th>
                    <th scope='col'>Titre de la card</th>
                    <th scope='col'>Description de la card</th>
                    <th scope='col'>Bouton de la card</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <th scope='row'>{{ $service->id }}</th>
                    <td>{{ $service->description }}</td>
                    <td>{{ $service->img }}</td>
                    <td>{{ $service->cardicon }}</td>
                    <td>{{ $service->cardtitle }}</td>
                    <td>{{ $service->carddescription }}</td>
                    <td>{{ $service->cardbtn }}</td>
                    <td>
                        <a class='btn btn-primary' href='{{ route('services.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
