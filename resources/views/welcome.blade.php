@extends('header')

@section('content')
@can('contact_insert')
    <a class="btn btn-primary" href="{{ route('contact.get') }}">Inserir novo</a><br />
@endcan
<div class="mt-8 mb-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
<table class="table-auto min-w-full">
    <thead>
        <tr>
        @can('contact_delete')
        <th></th>
        @endcan
        <th class="w-64">Name</th>
        <th>Contact</th>
        <th class="w-64">Email</th>
        @can('contact_edit')
        <th></th>
        @endcan
        </tr>
    </thead>
    <tbody>
    @foreach ($contacts as $contact)
        <tr>
        @can('contact_delete')
        <th>
            <input type="checkbox" class="mr-2 ml-2" value="{{$contact->id}}" name="selected">
        </th>
        @endcan
        <th class="w-64 ml-2">{{ $contact->name }}</th>
        <th>{{ $contact->contact }}</th>
        <th class="w-64">{{ $contact->email }}</th>
        @can('contact_edit')
        <th>
            <a class="ml-2 btn btn-primary" href="{{ route('contact.get', $contact->id) }}">Edit</a>
        </th>
        @endcan
        </tr>
    @endforeach
    </tbody>
</table>
</div>

@can('contact_delete')
    <a class="btn btn-danger" href="#">delete selected</a><br />
@endcan
@endsection