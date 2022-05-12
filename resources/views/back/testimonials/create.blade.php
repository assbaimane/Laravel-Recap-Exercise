@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Créer un testimonial</h1>

        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action='{{ route('testimonials.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>Fullname</label>
                <input type='text' name='fullname'>
            </div>
            <div>
                <label for=''>Date</label>
                <input type='text' name='date'>
            </div>
            <div>
                <label for=''>Sector</label>
                <input type='text' name='sector'>
            </div>
            <div>
                <label for=''>Rate</label>
                <input type='text' name='rate'>
            </div>
            <div>
                <label for=''>Testimonial</label>
                <input type='text' name='testimonial'>
            </div>
            <div>
                <label for=''>Nickname</label>
                <input type='text' name='nickname'>
            </div>
            <div>
                <label for=''>Position</label>
                <input type='text' name='position'>
            </div>
            <button class="btn btn-success" type='submit'>Create</button>
        </form>

    </div>
@endsection
