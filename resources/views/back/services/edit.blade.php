@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Mise à jour du service {{ $service->id }}</h1>

        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action='{{ route('services.update' , $service->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>Description</label>
                <input type='text' name='description' value='{{ $service->description }}'>
            </div>
            <div>
                <label for=''>Image</label>
                <input type='text' name='img' value='{{ $service->img }}'>
            </div>
            <div>
                <label for=''>Icone de la card</label>
                <input type='text' name='cardicon' value='{{ $service->cardicon }}'>
            </div>
            <div>
                <label for=''>Titre de la card</label>
                <input type='text' name='cardtitle' value='{{ $service->cardtitle }}'>
            </div>
            <div>
                <label for=''>Description de la card</label>
                <input type='text' name='carddescription' value='{{ $service->carddescription }}'>
            </div>
            <div>
                <label for=''>Bouton de la card</label>
                <input type='text' name='cardbtn' value='{{ $service->cardbtn }}'>
            </div>
            <button type='submit'>Update</button>
        </form>
    </div>
@endsection
