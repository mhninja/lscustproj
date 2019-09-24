@extends('layout')

@section('title' , 'Details for '. $customer->firstName .' '. $customer->lastName )
    
@section('content')
    <h1>Details for {{ $customer->firstName }} {{ $customer->lastName }}</h1>
    <p><a href="customers/{{ $customer->id }}/edit">Edit</a></p>
    <form action="/customers/{{ $customer->id }}" method="POST">
        @method('DELETE')
        
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <p><a href="/customers">Customer List</a></p>

    <div class="row">
            <div class="col-12">
                <p><strong>First Name: </strong>{{ $customer->firstName }}</p>
                <p><strong>Last Name: </strong>{{ $customer->lastName }}</p>
                <p><strong>Email: </strong>{{ $customer->email }}</p>
                <p><strong>Status: </strong>{{ $customer->active }}</p>
            </div>
        </div>
@endsection