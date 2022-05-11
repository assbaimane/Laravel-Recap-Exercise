@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Banners Page</h1>

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

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Description</th>
                    <th scope='col'>Bouton 1</th>
                    <th scope='col'>Bouton 2</th>
                    <th scope='col'>Image</th>
                    <th scope='col'>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($banners as $banner)
                    <tr>
                        <th scope='row'>{{ $banner->id }}</th>
                        <td>{{ $banner->description }}</td>
                        <td>{{ $banner->btn1 }}</td>
                        <td>{{ $banner->btn2 }}</td>
                        <td>{{ $banner->img }}</td>
                        <td>
                            <div class='d-flex'>
                                <a class='btn btn-secondary' href='{{ route('banner.edit', $banner->id) }}' role='button'>Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection