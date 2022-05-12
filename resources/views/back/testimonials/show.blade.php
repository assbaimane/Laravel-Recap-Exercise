@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Detail testimonial {{ $testimonial->id }}</h1>

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
                        <a class='btn btn-secondary' href='{{ route('testimonials.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
@endsection
