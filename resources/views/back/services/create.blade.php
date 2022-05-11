@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Nouveau Service</h1>

        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action='{{ route('services.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>Description</label>
                <input type='text' name='description'>
            </div>
            <div>
                <label for=''>Image</label>
                <input type='text' name='img'>
            </div>
            <div>
                <label for=''>Icone de la card</label>
                <input type='text' name='cardicon'>
            </div>
            <div>
                <label for=''>Titre de la card</label>
                <input type='text' name='cardtitle'>
            </div>
            <div>
                <label for=''>Description de la card</label>
                <input type='text' name='carddescription'>
            </div>
            <div>
                <label for=''>Bouton de la card</label>
                <input type='text' name='cardbtn'>
            </div>
            <button type='submit'>Create</button>
        </form>
    </div>
@endsection
