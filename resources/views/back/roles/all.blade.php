@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Roles Page</h1>

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Nom</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <th scope='row'>{{ $role->id }}</th>
                        <td>{{ $role->nom }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
