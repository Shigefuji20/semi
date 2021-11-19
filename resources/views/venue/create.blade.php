@extends('base')

@section('content')

    <h1>Add New Reservation</h1>

    <div class="row">
        <div class="col-md-5">
            {!! Form::open(['url'=>'/Venue', 'method'=>'post']) !!}

            @include('Venue._form')

            <div class="form-group">
                <button class="btn btn-primary float-right">
                    Add Reservation
                </button>
            </div>
            {!! Form::close() !!}

        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>

@endsection
