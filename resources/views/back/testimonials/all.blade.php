@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Testimonials Page</h1>

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

        <a class='btn btn-success' href='{{ route('testimonials.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Fullname</th>
                    <th scope='col'>Date</th>
                    <th scope='col'>Sector</th>
                    <th scope='col'>Rate</th>
                    <th scope='col'>Testimonial</th>
                    <th scope='col'>Nickname</th>
                    <th scope='col'>Position</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <th scope='row'>{{ $testimonial->id }}</th>
                        <td>{{ $testimonial->fullname }}</td>
                        <td>{{ $testimonial->date }}</td>
                        <td>{{ $testimonial->sector }}</td>
                        <td>{{ $testimonial->rate }}</td>
                        <td>{{ $testimonial->testimonial }}</td>
                        <td>{{ $testimonial->nickname }}</td>
                        <td>{{ $testimonial->position }}</td>
                        <td> 
                            <div class='d-flex'>
                                <form action='{{ route('testimonials.destroy', $testimonial->id) }}' method='post'>
                                    @csrf
                                    <button class="btn btn-danger" name="_method" value="DELETE" type="submit">Delete</button>
                                </form>
                                <a class='btn btn-secondary' href='{{ route('testimonials.edit', $testimonial->id) }}' role='button'>Edit</a>
                                <a class='btn btn-secondary' href='{{ route('testimonials.show', $testimonial->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
