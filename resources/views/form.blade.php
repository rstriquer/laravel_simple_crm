@extends('header')

@section('content')
<div class="mt-8 mb-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

    <h1>Contact details</h1>
    {{ Form::open(['route' => ['contact.post', 1]]) }}
    {{ Form::token() }}
    <div>Name: {{ Form::text('name', data_get($contact, 'name')) }}</div>
    <div>{{ Form::submit('Click Me!') }}</div>

</div>
@endsection