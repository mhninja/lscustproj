@extends('layout')

@section('title' , 'Add Customer Details')
    
@section('content')
    <h1>Add Customer Details</h1>

    <form action="/customers" method="POST">
        @include('customers.form')

        <button type="submit" class="btn btn-primary">Add Customer</button>
    </form>
@endsection