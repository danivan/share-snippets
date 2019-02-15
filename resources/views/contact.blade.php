@extends('layouts.app')

@section('content')
    {{ Form::open('/') }}
        {{ Form::textarea('snippet') }}
    {{ Form::close() }}
@endsection
