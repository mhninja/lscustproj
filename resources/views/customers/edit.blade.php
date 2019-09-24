@extends('layout')

@section('title' , 'Edit Details for '. $customer->firstName . ' ' $customer->lastName)
    
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Details for {{ $customer->firstName }} {{ $customer->lastName }}</h1>           
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers" method="POST">
                @method('PATCH')
                @include('customers.form')

                <button type="submit" class="btn btn-primary">Add Customer</button>
            </form>
        </div>
    </div>
@endsection