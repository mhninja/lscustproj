@extends('layout')

@section('title' , 'Customer List')
    
@section('content')
    <h1>Customer List</h1>
        <div class="row">
            <div class="col-12">
                <p><a href="customers/create">Add New Customer</a></p>
            </div>
        </div>

    @if(count($customers) > 0)
        <div class="row">
            <div class="col-6">
                <h3>Customer List</h3>
                <table class="table table-striped">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->firstName }}</td>
                        <td>{{ $customer->lastName }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->active }}</td>
                        <td><a href="customers/{{ $customer->id }}">Show</a></td>
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    @else
        <p>No customers found</p>
    @endif
@endsection