@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Services Page</h1>

        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif

        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <a class='btn btn-success' href='{{ route('services.create') }}' role='button'>Create</a>
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
                @foreach ($services as $service)
                    <tr>
                        <th scope='row'>{{ $service->id }}</th>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->img }}</td>
                        <td>{{ $service->cardicon }}</td>
                        <td>{{ $service->cardtitle }}</td>
                        <td>{{ $service->carddescription }}</td>
                        <td>{{ $service->cardbtn }}</td>
                        <td>
                            <div class='d-flex'>
                                <form action='{{ route('services.destroy', $service->id) }}' method='post'>
                                    @csrf
                                    <button class="btn btn-danger" name="_method" value="DELETE" type="submit">Delete</button>
                                </form>
                                <a class='btn btn-secondary' href='{{ route('services.edit', $service->id) }}' role='button'>Edit</a>
                                <a class='btn btn-secondary' href='{{ route('services.show', $service->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
