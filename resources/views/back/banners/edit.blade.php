@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Banners Page</h1>

        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action='{{ route('banner.update' , $banner->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>Description</label>
                <input type='text' name='description' value='{{ $banner->description }}'>
            </div>
            <div>
                <label for=''>Bouton 1</label>
                <input type='text' name='btn1' value='{{ $banner->btn1 }}'>
            </div>
            <div>
                <label for=''>Bouton 2</label>
                <input type='text' name='btn2' value='{{ $banner->btn2 }}'>
            </div>
            <div>
                <label for=''>Image</label>
                <input type='text' name='img' value='{{ $banner->img }}'>
            </div>
            <button class="btn btn-secondary" type='submit'>Update</button>
        </form>
    </div>
@endsection
