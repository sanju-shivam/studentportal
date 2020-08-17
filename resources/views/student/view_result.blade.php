@extends('layouts.master')
@section('content')

@foreach($results as $result)

{{$result->registration_no}}

@endforeach

@endsection