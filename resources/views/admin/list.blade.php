@extends('admin.client')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>SĐT</th>
                <th>Địa chỉ</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($lops as $lop)
                <tr>
                    <td>{{$lop->id}}</td>
                    <td>{{$lop->name}}</td>
                    <td>{{$lop->email}}</td>
                    <td>{{$lop->birthday}}</td>
                    <td>{{$lop->gender}}</td>
                    <td>{{$lop->phonenumber}}</td>
                    <td>{{$lop->address}}</td>
                    <td>
                        <a href="/edit/{{$lop->id}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="/delete/{{$lop->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    {{$lops->links('pagination::bootstrap-4')}}
@endsection
