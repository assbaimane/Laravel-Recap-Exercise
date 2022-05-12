@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Modifier le testimonial {{ $testimonial->id }}</h1>

        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action='{{ route('testimonials.update' , $testimonial->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>Fullname</label>
                <input type='text' name='fullname' value='{{ $testimonial->fullname }}'>
            </div>
            <div>
                <label for=''>Date</label>
                <input type='text' name='date' value='{{ $testimonial->date }}'>
            </div>
            <div>
                <label for=''>Sector</label>
                <input type='text' name='sector' value='{{ $testimonial->sector }}'>
            </div>
            <div>
                <label for=''>Rate</label>
                <input type='text' name='rate' value='{{ $testimonial->rate }}'>
            </div>
            <div>
                <label for=''>Testimonial</label>
                <input type='text' name='testimonial' value='{{ $testimonial->testimonial }}'>
            </div>
            <div>
                <label for=''>Nickname</label>
                <input type='text' name='nickname' value='{{ $testimonial->nickname }}'>
            </div>
            <div>
                <label for=''>Position</label>
                <input type='text' name='position' value='{{ $testimonial->position }}'>
            </div>
            <button class="btn btn-success" type='submit'>Update</button>
        </form>

    </div>
@endsection
