@extends('layout')

@section('title' , 'Add Customer Details')
    
@section('content')
    
    <div class="row">
        <div class="col-12">
            <h1>Add Customer Details</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers" method="POST">
                @include('customers.form')

                <button type="submit" class="btn btn-primary">Add Customer</button>
            </form>
        </div>
    </div>
    
@endsection