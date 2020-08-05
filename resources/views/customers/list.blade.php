@extends('master')
@section('content')
<h2 style="text-align:center "> Danh sách khách hàng</h2>
<body>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên Khách hàng</th>
            <th scope="col">Ngày Sinh</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th> </th>
        </tr>
        </thead>
        <tbody>
        @if(count($customers)==0)
            <tr>
                <td colspan='4'> No data</td>
            </tr>
        @else
            @foreach($customers as $key => $customer)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$customer['name']}}</td>
                    <td>{{$customer['bod']}}</td>
                    <td>{{$customer['email']}}</td>
                    <td>
                        @if($customer['role'] == \App\Http\Controllers\RoleInterface::Admin)
                            {{'Admin'}}
                        @elseif($customer['role']==\App\Http\Controllers\RoleInterface::User)
                            {{'User'}}
                        @endif
                    </td>
                    <td><a href="{{route('customers.edit', $customer['id'] )}} " class="btn btn-primary">Edit</a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>
@endsection
